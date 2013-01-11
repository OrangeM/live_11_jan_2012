<?php 
/* 
Template Name: Polls Archive
*/ 
?>

<?php get_header(); ?>  
    <div id="container">
        
        <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
            
            <div id="content" role="main" class="staticp">
    		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content(); ?>
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>
                
                
                    <?php else : ?>
                
                    <?php endif; ?>
                    
                    
                   
                </div> <!--end post wrapper-->
        </div> <!--end content-->   
        
        <?php get_sidebar(polls); ?>     		
        
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
