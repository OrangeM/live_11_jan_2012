<?php 
/* 
Template Name: Home Page
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
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0012/8987.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>


</body>
</html>
