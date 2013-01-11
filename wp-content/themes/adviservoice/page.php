<?php get_header(); ?>  
    <div id="container">
            
		        
        <?php if ( is_category( 'Explore' ) || post_is_in_descendant_category( 502 ) ) { ?>
            <h1 class="blue-bg">Explore</h1>
        <?php }
        
        elseif ( is_category( 'Achieve' ) || post_is_in_descendant_category( 503 ) ) { ?>
            <h1 class="blue-bg">Achieve</h1>
        <?php }
        
        else  { ?>     <h1 class="blue-bg"><?php the_title(); ?></h1> 
        <?php } ?>

            

            <div class="separator-arrow"> </div>
            
         <?php if (is_page ('Gurus') ) { ?>   
            <div id="content" role="main" class="staticp fullwidth">
        <?php }
    
		else  { ?> 
        	<div id="content" role="main" class="staticp">
        <?php } ?>
		
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
                
                        <div class="navigation">
                            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                        </div>
                
                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
                
                    <?php endif; ?>
				
                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        <?php 	if ( is_page('2')) {    // #
			get_sidebar(about);}
			
			elseif ( is_page('911')) {    // #
			get_sidebar(advertise);}
		
        	elseif ( is_page('917')) {    // #
			get_sidebar(privacy);}
			
			elseif (is_page('3470')) {
			get_sidebar (lastestv); }
			
			elseif ( is_page('Gurus')) {    // #
			
			
			}
        else get_sidebar(); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
