<?php get_header(); ?>  
 
	<div id="container">
    <h1 class="blue-bg">The Directory</h1>
    
            <div class="separator-arrow"> <p><a href="http://www.adviservoice.com/the-directory-update">Not listed here, or are your details out of date? Let us know.</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?php bloginfo('url')?>/advertise">Want to add the logo to your business profile? Click here</a></p></div>
	
         <div id="content-wrapper" class="directory" style="float:left;">
   			<div class="directory-menu">
                <ul id="alphabet">
                    <?php wp_list_pages('title_li=&child_of=11'); ?>
                </ul>
            </div> <!--directory menu-->


		<div id="content" role="main" class="directory-single">
        
				<?php if (have_posts()) : ?>
            
                    <?php while (have_posts()) : the_post(); ?>
            
            <div class="post-full-wrapper">
            
                        <div <?php post_class() ?> id="post-full post-<?php the_ID(); ?>">                         
                        	<div class="post-wrapper">
                            	
                                <div class="post-top">
                                    
                                    <div class="post-heading">
                                        <h1 class="directory-h"><?php the_title(); ?></h1>
                                    </div> <!--end post-heading-->
                                    
                           			
                                    <div class="business-details">
										
										<?php if (get_post_meta($post->ID, 'Address', true)) { ?>
                                            <div class="detail address">
                                                <span><?php echo get_post_meta($post->ID, 'Address', true); ?></span>                                        
                                            </div> 
										<?php } ?>  <!--end address-->
                                        
                                        <div class="detail phone-fax">
											<?php if (get_post_meta($post->ID, 'Phone', true)) { ?>
                                                <span class="phone"><span class="dark-blue"><strong>Phone</strong></span>&nbsp;&nbsp;<?php echo get_post_meta($post->ID, 'Phone', true); ?></span>                                        
                                            <?php } ?> 
											
											<?php if (get_post_meta($post->ID, 'Fax', true)) { ?>
                                                <span class="fax"><span class="blue-link"><strong>Fax&nbsp;&nbsp;</strong></span><?php echo get_post_meta($post->ID, 'Fax', true); ?></span>                                        
                                            <?php } ?> 
                                        </div> <!--end phone-fax-->
                                        
                                        
                                        <div class="detail website-email">
                                            
                                            <?php if (get_post_meta($post->ID, 'Website', true)) { 
                                            	$postwww = get_post_meta($post->ID, 'Website', true);
                                            	if(!strstr($postwww,'http://')) $postwww = "http://" . $postwww;
                                            ?>
                                                <span class="website"><a href="<?php echo $postwww; ?>" >Visit Website</a>&nbsp;&nbsp;&nbsp;&nbsp;</span>                                        
                                            <?php } ?> 
                                            
                                            <?php if (get_post_meta($post->ID, 'Email', true)) { ?>
                                                <span class="email"><a href="mailto:<?php echo get_post_meta($post->ID, 'Email', true); ?>">Email Company</a></span>                                        
                                            <?php } ?> 
                                        
                                        </div> <!--end website-email-->
                                        
                                        
                                            
                                        <?php if (get_post_meta($post->ID, 'Since', true)) { ?>
                                            <div class="detail since">
                                                <span class="span-since"><span class="dark-blue"><strong>Since</strong></span>&nbsp;&nbsp;<?php echo get_post_meta($post->ID, 'Since', true); ?></span> 
                                            </div> <!--end since-->                                       
                                        <?php } ?> 
                                            
                                        <?php if (get_post_meta($post->ID, 'Parent Company', true)) { ?>
                                        	<div class="detail parent-company">
                                                <span class="span-parent"><span class="dark-blue"><strong>Parent Company</strong></span>&nbsp;&nbsp;<?php echo get_post_meta($post->ID, 'Parent Company', true); ?></span>                                        
                                        	</div> <!--end parent compant-->
									   <?php } ?> 
                                        


                                    </div> <!--end business details-->
                                
                                </div> <!--end post top-->
                                
                                <div class="business-logo">
									<?php if (get_post_meta($post->ID, business_logo, true)) { ?>
                                            <img src="<?php echo get_post_meta($post->ID, business_logo, true); ?>" height="150" width="150" alt="<?php the_title(); ?>" />
                                    <?php }
                                            else { ?> <img src="<?php bloginfo('template_directory'); ?>/images/directory/business-logo-singlep.png" height="150" width="150" alt="<?php the_title(); ?>" />
                                    <?php } ?> 
                           		</div> <!--end business logo-->
                                
                                <div class="clearB"></div>
                                
                                <div class="separator"></div>
                                <div class="entry">
                           
                                    <?php the_content('continue reading'); ?>
                                </div>
                                

                            </div> <!-- end post-wrapper -->
                            
                                <div id="prev-next-entry" class="clearB">
                        
                                    <div class="prev-entry"><?php previous_post_link_plus( array('order_by' => 'post_title', 'before' => '') ); //calls the ambrosite post link plus plugin ?></div>
                                    <div class="next-entry"><?php next_post_link_plus( array('order_by' => 'post_title', 'after' => '') ); //calls the ambrosite post link plus plugin ?></div>
                                
                                </div> <!--prev=next-entry-->
                            
                                <div class="post-footer">
                                	
                                    <div class="post-footer-wrapper">
                                    
                                        <div class="post-category">
                                            <p class="filed-under"><?php echo get_the_term_list( $post->ID, 'filed-under', 'Filed under&nbsp;&nbsp;', '&nbsp;&nbsp;&nbsp; ', '' ); ?> </p>                                       
                                        </div> <!--end category-->

                                        
                                    </div> <!-- post-footer-wrapper-->
                                    
                                    
                                    <div class="post-footer-wrapper">
                                        
                                        <div class="post-print">
                                        	<p class="print"> <a href="javascript:window.print()">Print <?php the_title(); ?> listing </a></p>
                                        </div> <!--end category-->
                        			
                                    </div> <!--end post-footer-wrapper-->
                                
                                </div> <!--end post footer-->
                        
               </div> <!--end post full wrapper-->
               
                  <?php endwhile; ?>
                                
            
                <?php else : ?>
            
            
                <?php endif; ?>
                
                <div class="clearB"></div>  
	
</div>
		
        
        </div> <!--end content-->        		
        </div> <!--content-wrapper-->
		<?php get_sidebar(directory); ?>
    	
    </div> <!--end container-->
    	
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>