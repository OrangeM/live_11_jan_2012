<?php 
/* 
Template Name: Home Page LV
*/ 
?>

<?php get_header(homep); ?>  
 
	<div id="container">
		<div id="content" role="main">
				<?php if (have_posts()) : ?>
            
                    <?php while (have_posts()) : the_post(); ?>
            
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <h1 class="main_heading"><?php the_title(); ?></h1>
            
                            <div class="entry">
                                <?php the_content('Read the rest of this entry'); ?>
                            </div>
                            
                            <?php av_latest_voices(); ?>
            
                        </div>
            
                    <?php endwhile; ?>
            
                    <div class="navigation">
                        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                    </div>
            
                <?php else : ?>
            
                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
            
                <?php endif; ?>
			
        </div> <!--end content-->        		
        
		<?php get_sidebar(); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
