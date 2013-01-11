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
        
<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('SHOP Sidebar') ) : ?>
<h2>Рубрики</h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
</ul>
<h2>Архив</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
<ul>
<?php get_links_list(); ?>
<?php endif; ?>
</div>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
