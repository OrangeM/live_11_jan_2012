<?php 
/* 
Template Name: Blending tools
*/ 
?>
<?php get_header(); ?>  
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#blending-refs p').click(function(){		
		jQuery('.tool-content').each(function(){
			jQuery(this).hide(0);
		})
		jQuery('#blending-refs p').each(function(){
			jQuery(this).removeClass('active');
		})
		var id = jQuery(this).attr('id') + '_content';
		jQuery('#' + id).show(0);		
		jQuery(this).addClass('active');
		return false;
	})
});
</script>
    <div id="container">
            
    <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
		
        <div id="content" role="main" class="staticp fullwidth blending">
        		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content('Read the rest of this entry'); ?>
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

    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
