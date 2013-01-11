<?php 
/* 
Template Name:  Members only single article
*/ 
?>

<?php get_header(); ?>  

            <div class="leaderboard"><a href="http://www.fidelity.com.au/advantage/" title="Fidelity" target="_blank" ><img src="<?php bloginfo('url')?>/wp-content/uploads/ads/fidelity.gif" alt="Fidelity"  /></a></div>
	<div id="container">
    
	<h1 class="blue-bg"><?php the_category() ?></h1>
	
    <div class="separator-arrow"></div>
    
    <div id="breadcrumbs">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div> <!--end breadcrumbs-->
    


		<div id="content" role="main" class="sixh">
<?php
if (have_posts()) :
     while (have_posts()) : the_post(); ?>
       
       
       <?php if (get_post_meta($post->ID, 'visibility', true)) {
	   	 
		 			 
				 if (is_user_logged_in())  {?>

            <div class="post-full-wrapper">
            
                        <div <?php post_class() ?> id="post-full post-<?php the_ID(); ?>">  
                        
                        <div class="extra-wrapper">                       
                        	<div class="post-wrapper">
                            	
                                <div class="post-top">
                                	
                                    <div class="post-top-wrapper">
                                
                                        <div class="post-date">
                                            <div class="day"><?php the_time('d') ?></div>
                                            <div class="month"><?php the_time('M') ?></div>
                                        </div>
                                        
                                        <div class="post-heading">
                
                                            <h1 class="main_heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                            

											<?php  echo get_the_term_list( $post->ID, 'source', '<cite class="source">From ', '', '</cite>' ); ?>
											

                                            <?php if (get_post_meta($post->ID, 'From the Source - Source', true)) { ?>
                                                <cite class="source">From <?php echo get_post_meta($post->ID, 'From the Source - Source', true); ?></cite>                                        	
											<?php } ?>
                                            
                                        </div>
                                        
                                    <div class="post-icon">
										<?php //displays icons next to posts, function defined in functions.php
                                            $the_categories = get_the_category();
                                            get_cat_icon($the_categories);
                                        ?>
                                    </div>

                                    </div> <!--end post-top-wrapper-->
                                </div> <!--end post-top-->
                           
                           
                                <div class="entry">
                                	<div class="begin-post"></div>
                           
                                    <?php the_content('continue reading'); ?>
                                </div>
                                
                            </div> <!-- end post-wrapper -->
           					 
                        <?php if (get_post_meta($post->ID, 'Job banner', true)) { ?>
                            <div class="job-banner"><img src="<?php echo get_post_meta($post->ID, 'Job banner', true); ?>" /></div>                                        	
                        <?php } ?>


                             
                             </div> <!--end extra wrapper-->
	               <div class="separator_line"></div>

                         
                                <div class="post-footer">
                                	
                                    <div class="post-footer-wrapper">
                                    
                                        <div class="post-number-comments"><p><?php comments_number('0 comments', '1 comment', '% comments'); ?> </p></div>
                                        <div class="post-twitter">                    
                                            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="adviservoice" data-text="<?php the_title(); ?>" data-related="" data-count="horizontal">Tweet</a>
                                        
                                        </div>
                                        <div class="post-facebook">
                                        	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=135&amp;action=recommend&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:135px; height:21px;" allowTransparency="true"></iframe>
                                        </div>    <!--end facebook-->
                                        
                                        <div class="post-print">
                                        	<p class="print"> <a href="javascript:window.print()">Print</a></p>
                                        </div> <!--end category-->
                                        
                                        <div class="email-post">
                                        
											<p><?php echo direct_email(); ?></p>

                                        </div> <!--end email-post-->
                                        
                                    </div> <!-- post-footer-wrapper-->
                                    
                                    
                                    
                                    <div class="post-footer-wrapper">
                                    
                                        
                                        <div class="post-tags">
                                        	<p class="tags"><?php the_tags( 'tags &nbsp;&nbsp;&nbsp;&nbsp;',' &nbsp;&nbsp; '); ?> </p>
                                        </div> <!--end category-->
                                        
                                    </div> <!-- post-footer-wrapper-->
                        </div>
                        
               </div> <!--end post full wrapper-->
               
               <div class="separator_line"></div>
               
               </div>

         			<?php }
		 
		 		
				else { ?>

                    <h3>You must be logged in to view this content.</h3>
                    
                    <p>We're sorry, but this area is only for logged in users. If you are a registered user, please use the link below to <a href="<?php echo wp_login_url(( $_SERVER['REQUEST_URI'] )); ?>" title="Sign In">login</a> to the site. If you are not a member yet, please <a href="<?php bloginfo('url') ?>/registration">click here to join</a> AdviserVoice. It's FREE and only takes 60 seconds.</p>
                		
 
 
				<?php }
     
	 } 
	 
	 else { ?>
     
            <div class="post-full-wrapper">
            
                        <div <?php post_class() ?> id="post-full post-<?php the_ID(); ?>">  
                        
                        <div class="extra-wrapper">                       
                        	<div class="post-wrapper">
                            	
                                <div class="post-top">
                                	
                                    <div class="post-top-wrapper">
                                
                                        <div class="post-date">
                                            <div class="day"><?php the_time('d') ?></div>
                                            <div class="month"><?php the_time('M') ?></div>
                                        </div>
                                        
                                        <div class="post-heading">
                
                                            <h1 class="main_heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                            

											<?php  echo get_the_term_list( $post->ID, 'source', '<cite class="source">From ', '', '</cite>' ); ?>
											

                                            <?php if (get_post_meta($post->ID, 'From the Source - Source', true)) { ?>
                                                <cite class="source">From <?php echo get_post_meta($post->ID, 'From the Source - Source', true); ?></cite>                                        	
											<?php } ?>
                                            
                                        </div>
                                        
                                    <div class="post-icon">
										<?php //displays icons next to posts, function defined in functions.php
                                            $the_categories = get_the_category();
                                            get_cat_icon($the_categories);
                                        ?>
                                    </div>

                                    </div> <!--end post-top-wrapper-->
                                </div> <!--end post-top-->
                           
                           
                                <div class="entry">
                                	<div class="begin-post"></div>
                           
                                    <?php the_content('continue reading'); ?>
                                </div>
                                
                            </div> <!-- end post-wrapper -->
           					 
                        <?php if (get_post_meta($post->ID, 'Job banner', true)) { ?>
                            <div class="job-banner"><img src="<?php echo get_post_meta($post->ID, 'Job banner', true); ?>" /></div>                                        	
                        <?php } ?>


                             
                             </div> <!--end extra wrapper-->
	               <div class="separator_line"></div>

                         
                                <div class="post-footer">
                                	
                                    <div class="post-footer-wrapper">
                                    
                                        <div class="post-number-comments"><p><?php comments_number('0 comments', '1 comment', '% comments'); ?> </p></div>
                                        <div class="post-twitter">                    
                                            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="adviservoice" data-text="<?php the_title(); ?>" data-related="" data-count="horizontal">Tweet</a>
                                        
                                        </div>
                                        <div class="post-facebook">
                                        	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=135&amp;action=recommend&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:135px; height:21px;" allowTransparency="true"></iframe>
                                        </div>    <!--end facebook-->
                                        
                                        <div class="post-print">
                                        	<p class="print"> <a href="javascript:window.print()">Print</a></p>
                                        </div> <!--end category-->
                                        
                                        <div class="email-post">
                                        
											<p><?php echo direct_email(); ?></p>

                                        </div> <!--end email-post-->
                                        
                                    </div> <!-- post-footer-wrapper-->
                                    
                                    
                                    
                                    <div class="post-footer-wrapper">
                                    
                                        
                                        <div class="post-tags">
                                        	<p class="tags"><?php the_tags( 'tags &nbsp;&nbsp;&nbsp;&nbsp;',' &nbsp;&nbsp; '); ?> </p>
                                        </div> <!--end category-->
                                        
                                    </div> <!-- post-footer-wrapper-->
                        </div>
                        
               </div> <!--end post full wrapper-->
               
               <div class="separator_line"></div>
               
               </div>        
        
    <?php }
	 
	 
	 endwhile;
endif;
?>               
               
        </div> <!--end content-->        		
        
        <?php
			$post = $wp_query->post;
			
			if ( in_category( 'Discuss' ) || post_is_in_descendant_category( 500 ) ) {
			get_sidebar(discuss);	}
			
			elseif ( in_category( 'Explore' ) || post_is_in_descendant_category( 502 ) ) {
			get_sidebar(explore);
			}
			
			elseif ( in_category( 'Achieve' ) || post_is_in_descendant_category( 503 ) ) {
			get_sidebar(achieve);
			}
			
			else {
			get_sidebar();	}
		?>
    	
    </div> <!--end container-->
    	
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
