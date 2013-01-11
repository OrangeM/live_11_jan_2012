<?php 
/* 
Template Name:  The Directory
*/ 
?>

<?php get_header(); ?>  
 
	<div id="container">
    <h1 class="blue-bg"><?php the_title(); ?></h1>
		
       	 <?php include(TEMPLATEPATH . '/directory-menu.php'); ?>

		<div id="content" role="main" class="directory">
    				
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
						//'category_name' => 'practice-success',
         				'paged'=>$paged,
        				));
					
        

				if (have_posts()) : ?>
            
                    <?php query_posts( 'post_type=the_directory&orderby=title&order=asc');
					
					while (have_posts()) : the_post(); ?>
                    
            		
                    
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                        	<div class="post-wrapper">
                                     
                            	<div class="directory_logo"> 
                                       
									<?php if (get_post_meta($post->ID, business_logo, true)) { ?>
                                            <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, business_logo, true); ?>" height="150" width="150" style="padding:5px 5px 0;" alt="<?php the_title(); ?>" /></a>
                                    <?php } 
                                            else { ?> <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/directory/business-logo.png" height="155" width="160" alt="<?php the_title(); ?>" /></a>
                                    <?php } ?> 
								
                                </div> <!--end directory logo-->
                            	
                                
                                <div class="post-footer">
                                	
                                    <div class="post-footer-wrapper">
                                        <p class="business-name"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                        <?php if (get_post_meta($post->ID, 'Phone', true)) { ?>
                                                <p class="phone"><span class="blue-link"><strong>P</strong>&nbsp;&nbsp;</span><?php echo get_post_meta($post->ID, 'Phone', true); ?></span>
                                        <?php } ?>
                                	</div> <!-- post-footer-wrapper-->
                                
                                </div> <!--end post-footer-->
                                
                            </div><!--end post-wrapper-->
                                
            
                        </div> <!--end post-->
            
                    <?php endwhile; ?>
            
            
                <?php else : ?>
            
                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
            
                <?php endif; ?>
			
        </div> <!--end content-->        		
        
		<?php get_sidebar(directory); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>