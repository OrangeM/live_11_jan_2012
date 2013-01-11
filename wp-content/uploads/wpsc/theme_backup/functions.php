<?php
	if ( function_exists('register_sidebar') )
	register_sidebar();

	
	if ( function_exists ('register_sidebar')) { 
    register_sidebar (array('name' => 'stateofplay')); 
	}
	
	if ( function_exists ('register_sidebar')) { 
    register_sidebar (array('name' => 'login')); 
	} 


	add_filter('comments_template', 'legacy_comments');
	function legacy_comments($file) {
		if ( !function_exists('wp_list_comments') ) 
			$file = TEMPLATEPATH . '/old-comments.php';
		return $file;
	}

 	
	add_filter( 'avatar_defaults', 'newgravatar' );
	function newgravatar ($avatar_defaults) {
    	$myavatar = get_bloginfo('template_directory') . '/images/global/posts/av-gravatar.png';
    	$avatar_defaults[$myavatar] = "AdviserVoice";
    	return $avatar_defaults;
	}
	
	add_theme_support( 'nav-menus' );
	
	
	
	//breadcrumbs from cats who code
	function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');	//addscustomise gravatar

		echo "</a>&nbsp;&nbsp; &raquo; &nbsp;&nbsp;";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "&nbsp;&nbsp; &raquo; &nbsp;&nbsp;";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

//adds a current-cat class to the top parent category in single post view (useful to highlight the relevant item in the main menu)
class KHUC {

	function wp_list_categories ($text) {
	
		global $post;
	
		if (is_singular()) {
		
			$categories = wp_get_post_categories($post->ID);
			
			foreach ($categories as $category_id) {
	
				$category = get_category($category_id);
				$category_parent = get_category($category->category_parent);
				
				$text = preg_replace(
					"/class=\"(.*)\"><a ([^<>]*)>$category->name<\/a>/", 
					' class="$1 used-cat"><a $2>' . $category->name . '</a>', 
					$text);
					
				$text = preg_replace(
					"/class=\"(.*)\"><a ([^<>]*)>$category_parent->name<\/a>/", 
					' class="$1 used-cat-parent"><a $2>' . $category_parent->name . '</a>', 
					$text);
	
			}
	
		}
	
		return $text;
	
	}

}

add_filter('wp_list_categories', array('KHUC','wp_list_categories'));

	//breadcrumbs from http://dimox.net/wordpress-breadcrumbs-without-a-plugin/
	function dimox_breadcrumbs() {
 
  	$delimiter = '&nbsp; &raquo; &nbsp;';
  	$name = 'Home'; //text for the 'Home' link
  	$currentBefore = '<span class="current">';
  	$currentAfter = '</span>';
 
  	if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="crumbs">';
 
    global $post;
    echo '<span class="crumbs-start">You are in &nbsp;&nbsp;</span>';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $currentBefore . '';
      single_cat_title();
      echo '' . $currentAfter;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('d') . $currentAfter;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('F') . $currentAfter;
 
    } elseif ( is_year() ) {
      echo $currentBefore . get_the_time('Y') . $currentAfter;
 
    } elseif ( is_single() && !is_attachment() ) {
      $cat = get_the_category(); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_search() ) {
      echo $currentBefore . 'Search results for &#39;' . get_search_query() . '&#39;' . $currentAfter;
 
    } elseif ( is_tag() ) {
      echo $currentBefore . 'Posts tagged &#39;';
      single_tag_title();
      echo '&#39;' . $currentAfter;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $currentBefore . 'Articles posted by ' . $userdata->display_name . $currentAfter;
 
    } elseif ( is_404() ) {
      echo $currentBefore . 'Error 404' . $currentAfter;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}


/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
function post_is_in_descendant_category( $cats, $_post = null )
{
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}

//add custom background
add_custom_background();



// create custom taxonomy


add_action( 'init', 'av_custom_taxonomies', 0 );

function av_custom_taxonomies() {
	register_taxonomy( 'filed-under', 'the_directory', array( 'hierarchical' => true, 'label' => __('Filed under', 'series'), 'query_var' => true, 'rewrite' => array( 'slug' => 'filed-under','with_front' => true  ) ) );
	register_taxonomy( 'first-letter', 'the_directory', array( 'hierarchical' => false, 'label' => __('First letter', 'series'), 'query_var' => true, 'rewrite' => array( 'slug' => 'first-letter', 'with_front' => true  ) ) );
	register_taxonomy( 'source', 'post', array( 'hierarchical' => true, 'label' => __('Source', 'series'), 'query_var' => true, 'rewrite' => array( 'slug' => 'source', 'with_front' => true  ) ) );
}


//custom posts for the Directory

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'the_directory',
		array(
			'labels' => array(
				'name' => __( 'The Directory' ),
				'singular_name' => __( 'Business' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New Business to the Directory' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Business' ),
				'new_item' => __( 'New Business' ),
				'view' => __( 'View' ),
				'view_item' => __( 'View Business' ),
				'search_items' => __( 'Search Businesses' ),
				'not_found' => __( 'No business found' ),
				'not_found_in_trash' => __( 'No businesses found in Trash' ),
				'parent' => __( 'Parent Business' ),
				),
			'public' => true,
			'query_var' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
			'rewrite' => true // pretty permalinks for your taxonomy?

			
			
		)
	);
}
//function to get icons displayed for each category

//on home page, in the practice success section

		function get_cat_icon_homep($the_categories) {
		foreach( $the_categories as $category) {
		
		if ($category->cat_name == "Best Practice") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_best-practice.png' . '" ' . 'alt="Latest from Best Practice" ' . 'width="35" ' . 'height="44"  />'; }
		
		elseif ($category->cat_name == "Thought Leadership") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_thought-lead.png' . '" ' . 'alt="Latest from Thought Leadership" ' . 'width="35" ' . 'height="44"  />'; }

		elseif ($category->cat_name == "FAQs") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_faqs.png' . '" ' . 'alt="Latest from FAQs" ' . 'width="35" ' . 'height="44"  />'; }
		
		elseif ($category->cat_name == "Marketing") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_marketing.png' . '" ' . 'alt="Latest from Marketing" ' . 'width="35" ' . 'height="44"  />'; }

		elseif ($category->cat_ID == 21) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_systems-tech.png' . '" ' . 'alt="Latest from Systems &amp; Technology" ' . 'width="35" ' . 'height="44"  />'; }

		elseif ($category->cat_ID == 27) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_education.png' . '" ' . 'alt="Latest from Education"  ' . 'width="35" ' . 'height="44" />'; }

		elseif ($category->cat_ID == 535) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/home/practice-success/post-icons/ps_jobs.png' . '" ' . 'alt="Latest from Jobs Board"  ' . 'width="35" ' . 'height="44" />'; }
		}
		} 

//in the state of play, achieve and practice success pages


	//explore
		function get_cat_icon($the_categories) {
		foreach( $the_categories as $category) {
		
		if ($category->cat_name == "Best Practice") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/best_prac.png" />'; }
 	
		elseif ($category->cat_name == "Thought Leadership") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/thought_lead.png" />' ; }
	
		elseif ($category->cat_name == "FAQs") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/faqs.png" />' ; }
		
		elseif ($category->cat_name == "Marketing") {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/marketing.png" />' ; }
			
		elseif ($category->cat_ID == 21) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/sys_tech.png" />' ; }

		elseif ($category->cat_ID == 535) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/jobs.png" />'; }

		elseif ($category->cat_ID == 22) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/practice-success/icons/managers_corner.png" />'; }
	
	//discuss
	
		elseif ($category->cat_ID == 525) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/opinions.png" />'; }
		
		elseif ($category->cat_ID == 524) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/gurus.png" />'; }

		elseif ($category->cat_ID == 526) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/trends.png" />'; }

		elseif ($category->cat_ID == 533) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/industry-bodies.png" />'; }

		elseif ($category->cat_ID == 523) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/from_source.png" />'; }

		elseif ($category->cat_ID == 527) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/state-of-play/icons/economic.png" />'; }


	//achieve		

		elseif ($category->cat_ID == 27) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/achieve/icons/education.png" />'; }
		
		elseif ($category->cat_ID == 28) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/achieve/icons/comms.png" />'; }


		elseif ($category->cat_ID == 29) {
			echo '<img src="' . get_bloginfo('template_directory') . '/images/achieve/icons/b_growth.png" />'; }
		
			
	}
}


 //comments
	function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			
			<div id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php echo get_avatar($comment,$size='40',$default= get_bloginfo('template_directory') . '/images/global/posts/av-gravatar.png' );?>
					
					<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()); ?>  
				</div>
				<div class="comment-meta commentmetadata">&nbsp;on&nbsp;<?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?>	</div>
				
				<?php //if ($comment->comment_approved == '0') : ?>
					<!--<p class="moderation">Your comment is awaiting moderation</p>-->
				
				<?php //endif; ?>
					<div class="comment-wrapper">  
					   <div class="comment-entry"> <?php comment_text(); ?></div>
										
						<div class="comment-footer">
							<div class="reply"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
							
							<?php if (current_user_can('edit_post')) {?> 
								
								<div class="edit"><?php edit_comment_link(__('Edit this entry'),' ','') ?></div> 
								
								<div class="delete"><?php echo '<a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&c='.$id.'">Remove reply</a>'; ?></div>
								<div class="spam"><?php echo '<a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&dt=spam&c='.$id.'">Flag as inappropriate</a>'; ?> </div>
							
							
							<?php } ?>
											
						</div> <!--end comment footer-->
					
					</div> <!--end comment wrapper-->
					
					<div class="clearB"></div>
				
				</div>
			<?php
			}
	
 // to hide the website field in the comment form
    add_filter('comment_form_default_fields', 'mytheme_remove_url');
    
    function mytheme_remove_url($arg) {
        $arg['url'] = '';
        return $arg;
    }

// Title Trimmer (Version 3)
// Sam Morris – 12.28.2009
// www.smor.tv

    function title_trimmer($title , $maxLength)
    {
    $titleLength = strlen($title); // get the amount of characters in the title

    // start conditional
    if ($titleLength > $maxLength) // if the title length is over the max length, then we start the trimming process.
    {
    $trimmedTitle = substr_replace($title,"",$maxLength);
    echo $trimmedTitle. "&#46;&#46;&#46;";
    //echo $trimmedTitle . "…"; //use this instead of the line above if you prefer having a … after your trimmed titles.
    }
    else
    {
    echo $title;
    }
    }


// Function to Add Map

function google_static_map($content) {
	global $post;
	$thePostID = $post->ID;
	
	if(get_post_meta($thePostID, 'Address', true)) {
	$Address = get_post_meta($thePostID, 'Address', true);
	
	return "$content <div class=\"listing-static-map\"><img src=\"http://maps.google.com/maps/api/staticmap?center=$Address
	&zoom=14&size=620x200&maptype=roadmap&markers=color:blue|label:S|40.702147,-74.015794&markers=color:blue|label:A|$Address
	&markers=color:red|color:red|label:C|40.718217,-73.998284&sensor=false\" />
	
	<div class=\"static-map-directions\"><p><a href=\"javascript:ReverseDisplay('get_directions-$thePostID')\">
	Get Directions
	</a></p>
	
	<div id=\"get_directions-$thePostID\" style=\"display:none;\">
	<p><form action=\"http://maps.google.com/maps\" method=\"get\" target=\"_blank\">
	Get directions from your address:
	<input type=\"text\" name=\"saddr\" />
	<input type=\"hidden\" name=\"daddr\" value=\"$Address\" />
	<input type=\"submit\" value=\"get directions\" />
	</form></p></div></div>
	
	</div>";}

else {return $content;}

}

//Throw that map in a post or page!
add_action ( 'the_content', 'google_static_map');

//Javascript to be placed in header.php
function static_map_directions_script(){
echo "
<!--Static Google Maps-->
<script type=\"text/javascript\" language=\"JavaScript\"><!--
function HideContent(d) {
document.getElementById(d).style.display = \"none\";
}
function ShowContent(d) {
document.getElementById(d).style.display = \"block\";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == \"none\") { document.getElementById(d).style.display = \"block\"; }
else { document.getElementById(d).style.display = \"none\"; }
}
//--></script>
<!--/Static Google Maps-->"
;}

//inserts script in head of document
add_action ( 'wp_head', 'static_map_directions_script' );

//hide gurus-profiles category from RSS feeds
function my_cat_exclude($query) {
    if ($query->is_feed) {
        $query->set('cat','-747'); // if you want to exclude more than one category use: $query->set('cat','-ID1,-ID2,-ID3');
    }
    return $query;
}

add_filter('pre_get_posts','my_cat_exclude');


//enables post thumbnails
if (function_exists('add_theme_support')) { add_theme_support('post-thumbnails'); }


// to exclude pingbacks and trackbacks from the comment number in wordpress
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments = get_approved_comments($id);
	$comment_count = 0;
	foreach($comments as $comment){
		if($comment->comment_type == ""){
			$comment_count++;
		}
	}
	return $comment_count;
}
?>
<?php
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
 
function extra_user_profile_fields( $user ) { ?>
<table class="form-table">
<tr>
<th><label for="jobtitle"><?php _e("Job Title"); ?></label></th>
<td>
<input type="text" name="jobtitle" id="jobtitle" value="<?php echo esc_attr( get_the_author_meta( 'jobtitle', $user->ID ) ); ?>" class="regular-text" />
</td>
</tr>

<tr>
<th><label for="company"><?php _e("Company"); ?></label></th>
<td>
<input type="text" name="company" id="company" value="<?php echo esc_attr( get_the_author_meta( 'company', $user->ID ) ); ?>" class="regular-text" />
</td>
</tr>

<tr>
<th><label for="suburb"><?php _e("Postcode"); ?></label></th>
<td>
<input type="text" name="postcode" id="postcode" value="<?php echo esc_attr( get_the_author_meta( 'postcode', $user->ID ) ); ?>" class="regular-text" />
</td>
</tr>

<tr>
<th><label for="dealergroup"><?php _e("Dealer Group"); ?></label></th>
<td>
<input type="text" name="dealergroup" id="dealergroup" value="<?php echo esc_attr( get_the_author_meta( 'dealergroup', $user->ID ) ); ?>" class="regular-text" />
</td>
</tr>

<tr>
<th><label for="industry"><?php _e("Industry"); ?></label></th>
<td>
<?php $selval = esc_attr( get_the_author_meta( 'industry', $user->ID ) ); ?>
<select  name="industry" id="industry">
<option <?php if($selval=="") echo "selected" ?> value="">Select...</option>
<option <?php if($selval=="Financial Planning Practice") echo "selected" ?> value="Financial Planning Practice">Financial Planning Practice</option>
<option <?php if($selval=="Dealer Group Head Office") echo "selected" ?> value="Dealer Group Head Office">Dealer Group Head Office</option>
<option <?php if($selval=="Fund ManagerAccounting Practice") echo "selected" ?> value="Fund ManagerAccounting Practice">Fund ManagerAccounting Practice</option>
<option <?php if($selval=="Service Provider") echo "selected" ?> value="Service Provider">Service Provider</option>
<option <?php if($selval=="Other") echo "selected" ?> value="Other">Other</option>
</select>
</td>
</tr>

<tr>
<th><label for="jobfunction"><?php _e("Job Function"); ?></label></th>
<td>
<?php $selval = esc_attr( get_the_author_meta( 'jobfunction', $user->ID ) ); ?>
<select  name="jobfunction" id="jobfunction">
<option <?php if($selval=="") echo "selected" ?> value="">Select...</option>
<option <?php if($selval=="Financial Planner") echo "selected" ?> value="Financial Planner">Financial Planner</option>
<option <?php if($selval=="Principle") echo "selected" ?> value="Principle">Principle</option>
<!--<option <?php if($selval=="Sales/Marketing") echo "selected" ?> value="Sales/Marketing">Sales/Marketing</option>-->
<!--<option <?php if($selval=="Business Development") echo "selected" ?> value="Business Development">Business Development</option>-->
<option <?php if($selval=="Technical") echo "selected" ?> value="Technical">Technical</option>
<!--<option <?php if($selval=="Administration") echo "selected" ?> value="Administration">Administration</option>-->
<option <?php if($selval=="Portfolio Management") echo "selected" ?> value="Portfolio Management">Portfolio Management</option>
<option <?php if($selval=="Relationship Management") echo "selected" ?> value="Relationship Management">Relationship Management</option>
<option <?php if($selval=="Other") echo "selected" ?> value="Other">Other</option>

</select>
</td>
</tr>

</table>
<?php }
 
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

 
function save_extra_user_profile_fields( $user_id ) {
 
if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
 
update_usermeta( $user_id, 'jobtitle', $_POST['jobtitle'] );
update_usermeta( $user_id, 'company', $_POST['company'] );
update_usermeta( $user_id, 'postcode', $_POST['postcode'] );
update_usermeta( $user_id, 'dealergroup', $_POST['dealergroup'] );
update_usermeta( $user_id, 'industry', $_POST['industry'] );
update_usermeta( $user_id, 'jobfunction', $_POST['jobfunction'] );

}

//Custom Login Screen 
//change logo on the sign in page as explained in http://www.wprecipes.com/customize-wordpress-login-logo-without-a-plugin
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/global/adviservoice-login.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');



//email a friend 
//to add the email a friend link as explained in http://www.wprecipes.com/wordpress-tip-send-article-to-a-friend-by-email
function direct_email($text="email"){
        global $post;
        $title = htmlspecialchars($post->post_title);
        $subject = 'On '.htmlspecialchars(get_bloginfo('name')).': '.$title;
        $body = 'I recommend you this article: '.$title.'. You can read it on: '.get_permalink($post->ID);
        $link = '<a rel="nofollow" href="mailto:?subject='.rawurlencode($subject).'&amp;body='.rawurlencode($body).'" title="'.$text.' : '.$title.'">'.$text.'</a>';
        return $link;
}



//change url and title attribute in the login screen (to go to the home page instead of wordpress.org) - read in the comments http://www.wprecipes.com/customize-wordpress-login-logo-without-a-plugin
function change_wp_login_url() {
echo bloginfo('url');
}

function change_wp_login_title() {
echo get_option('blogname');
}

add_filter('login_headerurl', 'change_wp_login_url');
add_filter('login_headertitle', 'change_wp_login_title');

add_filter( 'show_admin_bar', '__return_false' );
?>