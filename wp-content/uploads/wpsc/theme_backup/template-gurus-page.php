<?php 
/* 
Template Name: Guru Author Page
*/ 
?>

<?php get_header(); ?>  
    <div id="container">
        
        <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
            
            <div id="content" role="main" class="staticp fullwidth guru-page">
    		
                <div class="post-wrapper">
                
                
                   <?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class('guru-intro') ?> id="post-<?php the_ID(); ?>">
                            
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content(); ?>
                                </div>
                                    
                
                            </div>
                
                        <?php endwhile; ?>
                
                
                    <?php else : ?>
                
                    <?php endif; ?>


                <?php rewind_posts(); ?>
    
                   <?php query_posts('posts_per_page=20&cat=747'); 
					
					if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class('guru-profile') ?> id="post-<?php the_ID(); ?>">
                            
                
                                <div class="entry">
                                	
                                    <div class="guru-top">
                                        <div class="guru-pic">
                                        
                                        	<?php if (get_post_meta($post->ID, 'Guru anchor tag', true)) { ?>
                                            <a name="<?php echo get_post_meta($post->ID, 'Guru anchor tag', true); ?>"></a>
                                            
                                            <?php }
											
											else { ?>
                                            <!--do nothing-->
                                            <?php } ?>
                                        
                                        
                                        
                                            <?php if (get_post_meta($post->ID, 'Guru profile picture', true)) { ?>
                                            <img src="<?php echo get_post_meta($post->ID, 'Guru profile picture', true); ?>" class="guru-profile-pic" alt="Image" width="80" height="80" />
                                            
                                            <?php }
                                            
                                            else { ?>
                                            
                                            <img src="<?php bloginfo('template_directory') ?>/images/gurus/gurus-default-pic.png" width="90" height="90" />
                                            
                                            <?php } ?>
                                        </div> <!--end guru pic-->
                                        
                                        <div class="guru-details">
                                            <h2 class="guru-name"><?php the_title(); ?></h2>
                                            
                                            <?php if (get_post_meta($post->ID, 'Guru qualifications', true)) { ?>
                                                <span class="guru-qualifications"><?php echo get_post_meta($post->ID, 'Guru qualifications', true); ?></span><br />
                                            <?php } ?>
                                        
                                            
                                            <?php if (get_post_meta($post->ID, 'Guru title', true)) { ?>
                                                <span class="guru-title"><?php echo get_post_meta($post->ID, 'Guru title', true); ?></span><br />
                                            <?php } ?>

                                            <?php if (get_post_meta($post->ID, 'Guru article-list link', true)) { ?>
                                                <span class="guru-link"><a href="<?php echo get_post_meta($post->ID, 'Guru article-list link', true); ?>" title="View all articles from <?php the_title() ?>">Read articles</a></span>
                                            <?php } ?>
                                        

                                        </div> <!--end guru details-->
                                    
                                    </div> <!--end guru top--> 
                                    
                                    <div class="guru-bio">
										<?php the_content(); ?>
                                    </div> <!--end guru bio-->
                                    
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>
                
                
                    <?php else : ?>
                
                    <?php endif; ?>
                    
                    
                    


                </div> <!--end post wrapper-->
        </div> <!--end content-->        		
        
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
