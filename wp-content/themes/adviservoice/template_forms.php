<?php 
/* 
Template Name: Forms (events, feedback, directory, calc...)
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
                                    <?php the_content('Read the rest of this entry'); ?>
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>

                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
                
                    <?php endif; ?>

                    <?php if (is_page('957')) { // Get your event on AdviserVoice  ?>
                    
						
                    
                    <?php } 
                    
                  elseif (is_page('954')) {// Feedback & suggestions  ?>
				   
                   
                    <?php } 
                    
                   elseif (is_page('920')) {// Directory Update  ?>

<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

					<script type="text/javascript">
                    var q7x3s5 = new WufooForm();
                    q7x3s5.initialize({
                    'userName':'inqbase', 
                    'formHash':'q7x3s5', 
                    'autoResize':true,
                    'height':'1868'});
                    q7x3s5.display();
                    </script>                    
				<?php } 
					
                  
				   elseif (is_page ('3316')) {// Contact us ?>

						
                    <?php } 
                
				   elseif (is_page ('3344')) {// Suggest a forum ?>
                        
					
					<?php } ?>


                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        <?php

			if (is_page ('3344')) {
			
			get_sidebar(suggestforum);
			
			}
			else {
			get_sidebar(details);}	
			
			
		?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
