<?php get_header(); ?>  
    
<!-- homepage_top_center_728_90 -->
<div class="leaderboard">
<div id='div-gpt-ad-1344212299491-0' style='width:728px; height:90px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344212299491-0'); });
</script>
</div>
</div>
	
    <div id="container">
    <h1 class="blue-bg"> Article list</h1>
    

            <div class="separator-arrow"><p>Everything <?php echo get_the_term_list( $post->ID, 'source', 'from ', '', '' ); ?> </p></div>
		
        <div id="content" role="main" class="sixh">
        
                

				<?php if (have_posts()) : ?>
            
                    <?php while (have_posts()) : the_post(); ?>
                    
            		
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                        	<div class="post-wrapper">
                            	
                                <div class="post-top">
                            
                                    <div class="post-date">
                                        <div class="day"><?php the_time('d') ?></div>
                                        <div class="month"><?php the_time('M') ?></div>
                                         <div class="year"><?php the_time('Y') ?></div>
                                    </div>
                                    
                                    <div class="post-heading">
			
                                        <h2 class="main_heading"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                        <p class="author"><?php echo get_the_term_list( $post->ID, 'source', 'From ', '', '' ); ?></p>

                                    </div>
                                    
                                    <div class="post-icon">
                                        <?php //displays icons next to posts, function defined in functions.php
                                            $the_categories = get_the_category();
                                            get_cat_icon($the_categories);
                                        ?>
                                    </div><!--end post-icon-->
                                
                                </div> <!--end post-top-->
                           
                           
                                <div class="entry">
                           			<?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">continue reading</a>
                              </div>
                                
                            </div> <!-- end post-wrapper -->
                                
                                <div class="post-footer">
                                	<div class="post-footer-wrapper">
                                    
                                        <div class="post-number-comments"><p><a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comment', '% comments'); ?> </a></p></div>
                                        <div class="post-twitter">                    
                                            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="adviservoice" data-text="<?php the_title(); ?>" data-related="" data-count="horizontal">Tweet</a>
                                        
                                        </div>
                                        <div class="post-facebook">
                                        	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=135&amp;action=recommend&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:135px; height:21px;" allowTransparency="true"></iframe>
                                        </div>    <!--end facebook-->
                                        
                                        <div class="post-category">
                                        	<!--<p class="filed-under"> filed under <?php the_category(', ') ?></p>-->
                                            
                                            <?php
											// Display all categories apart from the State of Play
												foreach((get_the_category()) as $category) {
   												if ($category->cat_name != 'State of play') {
    												echo '<p class="filed-under">Filed under <br /><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p>';
												}
											}
?>
                                        </div> <!--end category-->
                                        
                                    </div> <!-- post-footer-wrapper-->
                                
                                </div>
                                
            
                        </div>
            
                    <?php endwhile; ?>
            
                    <div class="navigation">
                    	<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
                    </div>
            
                <?php else : ?>
            
                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
            
                <?php endif; ?>
			
        </div> <!--end content-->        		
        
        <?php get_sidebar(source); ?>
		
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>