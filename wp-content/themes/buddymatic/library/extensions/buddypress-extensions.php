<?php
// add buddypress styles
function thematic_buddypress_css() { 
	if(thematic_have_bp()) { 
		if( !thematic_no_bp_adminbar() ) { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/styles/adminbar.css" />
<?php }
		if(thematic_is_bp_home()) { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/styles/buddypress.css" />
<?php }
		if( is_file(get_stylesheet_directory() . '/buddypress.css') ) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/buddypress.css" />
<?php } 
	}
}
add_action('wp_head', 'thematic_buddypress_css', 90);

// not supporting pre-buddypress 1.1 member themes
function thematic_remove_dep_admin_bar_css($content) { 
	return (is_admin() ? $content : false); 
}
add_filter('bp_core_admin_bar_css', 'thematic_remove_dep_admin_bar_css');

// add the buddypress search bar
function thematic_bp_search() {
	if(thematic_have_bp() && thematic_is_bp_home()) { ?>
		<div id="search-login-bar">
	
			<form action="<?php echo bp_search_form_action() ?>" method="post" id="search-form">
				<input type="text" id="search-terms" name="search-terms" value="" /> 
				<?php echo bp_search_form_type_select() ?>
	
				<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ) ?>" />
				<?php wp_nonce_field( 'bp_search_form' ) ?>
			</form>
			
			<?php if ( !is_user_logged_in() ) : ?>
		
				<form name="login-form" id="login-form" action="<?php echo $bp->root_domain . '/wp-login.php' ?>" method="post">
					<input type="text" name="log" id="user_login" value="<?php _e( 'Username', 'buddypress' ) ?>" onfocus="if (this.value == '<?php _e( 'Username', 'buddypress' ) ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Username', 'buddypress' ) ?>';}" />
					<input type="password" name="pwd" id="user_pass" class="input" value="" />
			
					<input type="checkbox" name="rememberme" id="rememberme" value="forever" title="<?php _e( 'Remember Me', 'buddypress' ) ?>" />
			
					<input type="submit" name="wp-submit" id="wp-submit" value="<?php _e( 'Log In', 'buddypress' ) ?>"/>	
					
					<?php if ( 'none' != bp_get_signup_allowed() && 'blog' != bp_get_signup_allowed() ) : ?>		
						<input type="button" name="signup-submit" id="signup-submit" value="<?php _e( 'Sign Up', 'buddypress' ) ?>" onclick="location.href='<?php echo bp_signup_page() ?>'" />
					<?php endif; ?>
					
					<input type="hidden" name="redirect_to" value="<?php bp_root_domain() ?>" />
					<input type="hidden" name="testcookie" value="1" />
						
					<?php do_action( 'bp_login_bar_logged_out' ) ?>
				</form>
	
			<?php else : ?>
		
				<div id="logout-link">
					<?php bp_loggedin_user_avatar( 'width=20&height=20' ) ?> &nbsp; <?php bp_loggedinuser_link() ?> / <?php bp_log_out_link() ?>
					
					<?php do_action( 'bp_login_bar_logged_in' ) ?>
				</div>
		
			<?php endif; ?>

		</div><?php 
	} 
}
add_action('thematic_header', 'thematic_bp_search', 99);

// add user navigation
function thematic_bp_nav() {
	if (thematic_have_bp() && thematic_is_bp_home() && 
		!(bp_is_blog_page() || bp_is_directory() || bp_is_register_page() || bp_is_activation_page()) ) {
		locate_template( array( 'optionsbar.php' ), true );
		locate_template( array( 'userbar.php' ), true );
	}
}
add_action('bp_after_profile_menu', 'thematic_bp_nav', 99);

function thematic_bp_profile_nav() { ?>
	<div class="left-menu">
		<?php locate_template( array( 'profile/profile-menu.php' ), true ) ?>
	</div>
	<div class="main-column">
<?php 
}

function thematic_bp_after_profile_nav() { ?>
	</div>
<?php 
}

foreach( array( 'group_invites', 'group_creation', 'my_groups', 'profile_edit', 'profile_avatar_upload', 'my_blogs', 'create_blog', 'recent_comments', 'recent_posts', 'messages_inbox', 'messages_compose', 'messages_notices', 'messages_sentbox', 'my_friends', 'friend_requests' ) as $what ) {
	add_action("bp_before_{$what}_content", 'thematic_bp_profile_nav', 99);
	add_action("bp_after_{$what}_content", 'thematic_bp_after_profile_nav', 99);
}
add_action("bp_template_content", 'thematic_bp_profile_nav', 1);
add_action("bp_template_content", 'thematic_bp_after_profile_nav', 99);

// add the buddypress site navigation
function thematic_bp_site_nav($menu) { 
	if (thematic_have_bp() && thematic_is_bp_home()) { 
		$bp_items = array(
//			array('slug' => 'home' , 'desc' => __( 'Home', 'buddypress' ), 'fun' => false),
			0 => array('slug' => constant('BP_HOME_BLOG_SLUG') , 'desc' => __( 'Blog', 'buddypress' ), 'fun' => false),
			1 => array('slug' => constant('BP_MEMBERS_SLUG') , 'desc' => __( 'Members', 'buddypress' ), 'fun' => false),
			2 => array('slug' => constant('BP_GROUPS_SLUG') , 'desc' => __( 'Groups', 'buddypress' ), 'fun' => 'groups_install'),
			4 => array('slug' => constant('BP_BLOGS_SLUG') , 'desc' => __( 'Blogs', 'buddypress' ), 'fun' => 'bp_blogs_install')
		);
		if( function_exists( 'bp_forums_setup' ) && !(int) get_site_option( 'bp-disable-forum-directory' ) ) {
			$bp_items[3] = array('slug' => constant('BP_FORUMS_SLUG') , 'desc' => __( 'Forums', 'buddypress' ), 'fun' => 'groups_install');
			ksort( $bp_items );
		}
		$before = '';
		$home = get_option('home');
		foreach($bp_items as $item) {
			if(!$item['fun'] || function_exists($item['fun'])) {
				$before .= '<li ' . (( bp_is_page( $item['slug'] ) ) ? 'class="selected"' : '') . 
					"><a href=\"{$home}/{$item['slug']}\" title=\"" . $item['desc'] . '">' . $item['desc'] . "</a></li>\n";
			}
		}
		$index = strpos($menu, '<ul');
		if($index === false) {
			$menu = '<div class="menu"><ul class="sf-menu"></ul></div>';
			$index = strpos($menu, '<ul');
		}
		if(($index2 = strpos(substr($menu, $index), '>')) > 0) {
			$index += $index2 + 1;
			$menu = substr($menu, 0, $index) . $before . substr($menu, $index);
		}
	}
	return $menu;
}
add_filter('wp_page_menu','thematic_bp_site_nav');

function thematic_show_home_blog() {
	global $bp, $query_string, $paged;
	if (thematic_have_bp() && thematic_is_bp_home()) { 
		if ( $bp->current_component == BP_HOME_BLOG_SLUG && ( !$bp->current_action || 'page' == $bp->current_action ) ) {				
			unset( $query_string );
			
			if ( ( 'page' == $bp->current_action && $bp->action_variables[0] ) && false === strpos( $query_string, 'paged' ) ) {
				$query_string .= '&paged=' . $bp->action_variables[0];
				$paged = $bp->action_variables[0];
			}

			query_posts($query_string);
			bp_core_load_template( 'index', true );
		}
	}
}
add_action( 'wp', 'thematic_show_home_blog', 2 );

/* Load the BP AJAX functions for the theme */
require_once( TEMPLATEPATH . '/_inc/ajax.php' );

/* Load the javascript for the theme */
wp_enqueue_script( 'jquery-livequery-pack', get_template_directory_uri() . '/_inc/js/jquery-livequery.js', array( 'jquery' ) );
wp_enqueue_script( 'dtheme-ajax-js', get_template_directory_uri() . '/_inc/js/ajax.js', array( 'jquery', 'jquery-livequery-pack' ) );
function thematic_add_bp_ajax() {
	if( !thematic_have_bp() || !thematic_is_bp_home() ) {
		wp_deregister_script( 'jquery-livequery-pack' );
		wp_deregister_script( 'dtheme-ajax-js' );
	}
}
add_action( 'wp_head', 'thematic_add_bp_ajax', 1 );

// is the buddypress admin bar active
function thematic_no_bp_adminbar() {
	return defined('BP_DISABLE_ADMIN_BAR');
}

// are we the buddypress home blog
function thematic_is_bp_home() {
	global $current_blog;
	return (defined( 'BP_ENABLE_MULTIBLOG' ) || 
		(defined('BP_ROOT_BLOG') && $current_blog->blog_id == constant('BP_ROOT_BLOG')));
}

// is bp running
function thematic_have_bp() {
	global $bp;
	return isset($bp);
}
?>