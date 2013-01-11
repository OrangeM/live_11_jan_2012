<?php
/*
Plugin Name: Latest Voices
Plugin URI: http://andrewbleakley.com/wordpress-development.php
Description: Returns a list of the most recent posts, events and forum postings.
Version: 1.0
Author: Andrew Bleakley
Author URI: http://andrewbleakley.com/
*/
if ( !is_admin() ) { // instruction to only load if it is not the admin area
	wp_enqueue_script('mousewheel', WP_PLUGIN_URL . '/latest-voices/jquery.mousewheel.min.js', array('jquery'));
	wp_enqueue_script('jcarousellite', WP_PLUGIN_URL . '/latest-voices/jcarousellite_1.0.1.min.js', array('jquery'));
	wp_enqueue_script('latest-voices', WP_PLUGIN_URL . '/latest-voices/latest-voices.js', array('jquery'));
}
function truncate($string, $limit, $break=" ", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }
    
  return $string;
}
class Voice {
	var $title;
	var $icon_url;
	var $body;
	var $date;
	var $rawdate;
	var $section;
	var $type;	
	
	function Voice($title, $icon_url, $body, $date, $section, $rawdate, $type)
    {
        $this->title = $title;
		$this->icon_url = $icon_url;
		$this->body = $body;
		$this->date = $date;
		$this->section = $section;
		$this->rawdate = $rawdate;
		$this->type = $type;
    }
	
	static function cmp_obj($a, $b)
    {
        $al = $a->rawdate;
        $bl = $b->rawdate;
        if ($al == $bl) {
            return 0;
        }
        return ($al < $bl) ? +1 : -1;
    }
}
if ( is_admin() ){ // admin actions
  add_action( 'admin_menu', 'add_latest_voices_menu' );
}

function register_latest_voices_settings() { // whitelist options
  register_setting( 'latest-voices-group', 'no_posts' );
  register_setting( 'latest-voices-group', 'before' );
  register_setting( 'latest-voices-group', 'after' );
}

function add_latest_voices_menu() {
	//create new top-level menu
	add_submenu_page('options-general.php', 'Latest Voices Settings', 'Latest Voices', 'administrator', __FILE__, 'latest_voices_settings_page');
	//call register settings function
	add_action( 'admin_init', 'register_latest_voices_settings' );
}

function latest_voices_settings_page() {
?>
<div class="wrap">
<h2>Latest Voice Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'latest-voices-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Number of Posts</th>
        <td><input type="text" name="no_posts" value="<?php echo get_option('no_posts'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">HTML Before plugin output</th>
        <td><input type="text" name="before" value="<?php echo get_option('before'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">HTML after plugin output</th>
        <td><input type="text" name="after" value="<?php echo get_option('after'); ?>" /></td>
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php }

function av_latest_voices( $no_posts = 30 ) {

	global $wpdb;
	$voices = null;
	$time_difference = get_settings( 'gmt_offset' );
	$now = gmdate( "Y-m-d H:i:s", time() );
	//blog posts
	$request = "SELECT ID, post_title, post_excerpt, post_date, post_author 
			FROM $wpdb->posts 
			LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
			LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
			WHERE post_status = 'publish' 
			AND post_password ='' 
			AND post_type='post' 
			AND $wpdb->term_taxonomy.taxonomy = 'category'
			AND $wpdb->term_taxonomy.term_id NOT IN(3,747)
			AND post_date_gmt < '$now' ORDER BY post_date 
			DESC LIMIT 0, $no_posts";
	
	//mail("andrew@andrewbleakley.com","SQL",$request);
	$posts = $wpdb->get_results( $request );
	if ( $posts ) {
		foreach ( $posts as $post ) {
			$post_title = $post->post_title;
			$permalink = get_permalink( $post->ID );
			$title = '<a href="' . esc_url( $permalink ) . '" rel="bookmark" title="Permanent Link: ' . esc_attr( $post_title ) . '">' . truncate(esc_html( $post_title ),30) . '</a>'; //by '.get_userdata($post->post_author)->display_name;
			$post_excerpt = esc_html( $post->post_excerpt );
			$voices[] = new Voice($title, get_avatar($post->ID, 32),$post_excerpt,$post->post_date,'news centre', strtotime($post->post_date),"blogpost");
		}
	}
	//users
	$request = "SELECT u.*, s.status FROM wp_users u, wp_sabre_table s WHERE u.ID=s.user_id AND s.status='ok' ORDER BY user_registered DESC LIMIT 0 , 30";
	$users = $wpdb->get_results( $request );
	if ( $users ) {
		foreach ( $users as $user ) {
			$title = "Welcome to " . $user->display_name;
			$voices[] = new Voice($title, get_avatar($user->ID, 32) ,"",$user->user_registered,'people', strtotime($user->user_registered . "+". $time_difference ."hours") ,"people");
		}
	}
	//events - sp_events
	//$request = "SELECT ID, post_title, post_excerpt, post_date, post_author FROM $wpdb->posts WHERE post_status = 'publish' AND post_password ='' AND post_type='sp_events' AND post_date_gmt < '$now' ORDER BY post_date DESC LIMIT 0, $no_posts";
	//$posts = $wpdb->get_results( $request );
	//if ( $posts ) {
		//foreach ( $posts as $post ) {
			//$post_title = $post->post_title;
			//$permalink = get_permalink( $post->ID );
			//$title = 'new event added<br /><a href="' . esc_url( $permalink ) . '" >' . truncate(esc_html( $post_title ),30) . '</a>';
			//$voices[] = new Voice($title, '','',$post->post_date,'event', strtotime($post->post_date),"event");
		//}
	//}
	//forum posts
	//$request = "SELECT * FROM bb_posts ORDER BY post_time DESC LIMIT 0 , 10";
	//$posts = $wpdb->get_results( $request );
	//if ( $posts ) {
	//	foreach ( $posts as $post ) {
			//$voices[] = new Voice("Forum topic", get_avatar($post->ID, 32),truncate(strip_tags($post->post_text),50),$post->post_time,'forums', strtotime($post->post_time),"forum");
	//	}
	//}
	//comments
	$request = "SELECT * FROM wp_comments WHERE comment_approved=1 ORDER BY comment_date DESC LIMIT 0 , 30";
	$posts = $wpdb->get_results( $request );
	if ( $posts ) {
		foreach ( $posts as $post ) {
			$voices[] = new Voice("<a href='".get_permalink($post->comment_post_ID)."#comment-".$post->comment_ID."'>Comment</a> by ".$post->comment_author, get_avatar($post->ID, 32),truncate(strip_tags($post->comment_content),30),$post->comment_date,'comment', strtotime($post->comment_date),"comment");
		}
	}
	
	usort($voices, array("Voice", "cmp_obj"));
	$output = "<div id=\"lvwidget\"><h2 class=\"blue-bg\">AV Updates</h2><div id=\"lvwidgetwindow\"><ul>";
	$voices_count = 0;
	foreach ($voices as $voice) {
		$output .= "<li class=\"".$voice->type." clearfix\">";
    	if($voice->type == "event"){ 
			$output .= '<div class="event-date">';
			$output .= '<div class="month">'.date("M",$voice->rawdate).'</div>';
			$output .= '<div class="day">'.date("d",$voice->rawdate).'</div>';
			$output .= '</div>';	
			$output .= '<div class="event">';
			$output .= $voice->title;
			$output .= '</div>';
			$output .= '<div class="loc">'. date("d/m/Y",$voice->rawdate) .'</div>';
			$output .= '<div class="clearB"></div>';
		}else{		
			
			$output .= "<span class=\"lv_icon\">".$voice->icon_url."</span>";
			$output .= "<span class=\"lv_title\">".$voice->title."</span>";
			$output .= "<span class=\"lv_body\">".$voice->body."</span>";
			$output .= "<span class=\"lv_footer\">".date("d/m/Y",$voice->rawdate) ." ";
			switch ( $voice->type ) {
				case "post":
					//$output .= "<a href=\"/section/discuss/\">".$voice->section."</a>";
					break;
				case "forum":
					//$output .= "<a href=\"/forums/\">".$voice->section."</a>";
					break;
				default:	
					//$output .= $voice->section;	
			}
			$output .= "</span>";	
		}
		$output .= "</li>";
		
		if(++$voices_count == 30) break;
	}
	$output .= "</ul></div><img src=\"http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/lv/scroll.jpg\" /><img src=\"http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/lv/up.jpg\" id=\"scrollup\" /><img src=\"http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/lv/down.jpg\" id=\"scrolldown\" /></div>";
	echo $output;
}
?>