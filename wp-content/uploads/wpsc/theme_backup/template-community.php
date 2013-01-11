<?php 
/* 
Template Name:  Community
*/ 
get_header(); ?>  
    <div id="container">
            
		        
        
        
        <h1 class="blue-bg"><?php the_title(); ?></h1> 
        

            

            <div class="separator-arrow"> </div>
            
          
        	<div id="content" role="main" class="staticp community">
        
		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content(); ?>
                                    <?php /* display all users */ ?>
                                    <ol id="community-list">
                                    
                                    <?php 									
global $wpdb;
$request = "SELECT * FROM wp_users ORDER BY display_name ASC";
$users = $wpdb->get_results( $request );
if ( $users ) {
	foreach ( $users as $user ) {
		$output = "<li class=\"community-member\">";
		$output .= get_avatar( $user->ID, 82, '', $user->display_name );
		$output .= "<div class=\"community-member-details\">";
		$output .= "<span class=\"membername\">";
		$output .= "<a href=\"/user?author_name=" . $user->user_login . "\">";
		$output .= get_user_meta($user->ID, 'first_name', true) . ' ' . get_user_meta($user->ID, 'last_name', true) . "</a></span>";
		$output .= "<br />";
		$output .= get_user_meta($user->ID, 'jobtitle', true);
		$output .= "<br />";
		$output .= get_user_meta($user->ID, 'company', true);
		$output .= "</div>";
		$output .= "</li>";
		echo $output;		
	}
}
									
									?>
                                    <ol>
                                    
                                                                       
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>
                
                        
                
                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
                
                    <?php endif; ?>
				
                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        <?php get_sidebar(); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
