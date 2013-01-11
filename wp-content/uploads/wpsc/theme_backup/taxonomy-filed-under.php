<?php get_header(); ?>  
    <div class="leaderboard"></div>
	<div id="container">
    
    <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>


    <h1 class="blue-bg">The Directory - <?php echo $term->name; ?></h1> <?php //call to get_term_by() which uses get_query_var() to determine what Custom Taxonomy term we’re working with. ?>
        
            <div class="separator-arrow"> <p><a href="#">Not listed here, or are your details out of date? Let us know.</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Want to add a logo to your business profile? Click here</a></p></div>

		
        
        <div id="content-wrapper" class="directory" style="float:left;">
   			<div class="directory-menu">
                <ul id="alphabet">
                    <?php wp_list_pages('title_li=&child_of=11'); ?>
                </ul>
            </div> <!--directory menu-->

        <div id="content" role="main" class="directory">
		
		<?php               
            $my_query = $wp_query->query; // new query to display 200 entries
            $my_query['posts_per_page'] = "300"; 
            $my_query['orderby'] = "title"; 
            $my_query['order'] = "ASC"; 
            query_posts($my_query);  
        ?>					
				<?php

				if (have_posts()) : 
            
					
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
                                                <p class="phone"><span class="blue-link"><strong>P</strong>&nbsp;&nbsp;</span><?php echo get_post_meta($post->ID, 'Phone', true); ?></span></p>
                                        <?php } ?>
                                        
                                	</div> <!-- post-footer-wrapper-->
                                
                                </div> <!--end post-footer-->
                                
                            </div><!--end post-wrapper-->
                                
            
                        </div> <!--end post-->
            
                    <?php endwhile; ?>
            
                <?php else : ?>
            
                    <p class="center">There is no business filed under this letter</p>
            
                <?php endif; ?>
			
        </div> <!--end content-->   
        
        </div>    <!--end content-wrapper --> 		
        
		<?php get_sidebar(directory); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>