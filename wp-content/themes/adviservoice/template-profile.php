<?php 
/* 
Template Name:  User Profile
*/ 
get_header(); ?>  
    <div id="container">
            
<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($_GET['author_name']);
else :
$curauth = get_userdata(intval($author));
endif;
?>		        
        
        
        <h1 class="blue-bg"><?php echo get_user_meta($curauth->ID, 'first_name', true) . ' ' . get_user_meta($curauth->ID, 'last_name', true); ?></h1> 
            <div class="separator-arrow"> </div>
                  
        	<div id="content" role="main" class="staticp profile">
        
		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                               
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    
                                    <!-- This sets the $curauth variable -->

<h3>About: <?php echo $curauth->display_name; ?></h3>
<p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
<p><strong>Profile:</strong> <?php echo $curauth->user_description; ?></p>

<p><strong>Company:</strong> <?php echo get_user_meta($curauth->ID, 'company', true); ?></p>
<p><strong>Job Title:</strong> <?php echo get_user_meta($curauth->ID, 'jobtitle', true); ?></p>
<p><strong>Dealer Group:</strong> <?php echo get_user_meta($curauth->ID, 'dealergroup', true); ?></p>

<h3>Posts by <?php echo $curauth->display_name; ?>:</h3>
<ul>
<!-- The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>
</li>
<?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>
<?php endif; ?>
<!-- End Loop -->
</ul>
                                    
                                    
                                </div>
                
                            </div>
                               
                
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
