<?php get_header(); ?>
<!-- ADS -->
<!-- homepage_top_center_728_90 -->
<div class="leaderboard">
<div id='div-gpt-ad-1344212299491-0' style='width:728px; height:90px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344212299491-0'); });
</script>
</div>
</div>
<!-- ADS end -->
	<div id="container">

		<?php if ( is_category( 'Discuss' ) ){ // When the archive page for Category Discuss is being displayed.  ?>
            <h1 class="blue-bg">Discuss</h1>
        <?php }

        elseif ( is_category( 'Explore' ) || post_is_in_descendant_category( 502 ) ) { 
        	/*<h1 class="blue-bg">Explore</h1>*/
        	?>
            <h1 class="blue-bg">Business Administration</h1>
        <?php }

        elseif ( is_category( 'Achieve' ) || post_is_in_descendant_category( 503 ) ) { 
        	/*<h1 class="blue-bg">Achieve</h1>*/
        	?>
            <h1 class="blue-bg"> Tool Box</h1>
        <?php }

        else  { ?> <h1 class="blue-bg"><?php single_cat_title(); ?></h1>
        <?php } ?>

        <div class="separator-arrow"> </div>

        <div id="breadcrumbs">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div> <!--end breadcrumbs-->
		<div id="content" role="main" class="sixh">

		
				<?php if(get_query_var('cat') == 503 ) : ?>
				<div class="calculator-link">
					<div>
					To view a calculator page, please <a href="<?php echo get_page_link(7077); ?>">go here</a>                           
					</div>
				</div>
		
				<?php endif; ?>
				
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

                                        <h2 class="main_heading">
						<a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">
					<?php the_title(); 
					$post_with_quiz = false;
					if(strrpos($post->post_content, 'wpsqt_quiz') != FALSE) 
					{
						//echo ' (Earn CPD Points)';
						$post_with_quiz = true;
					}
					?></a>
					</h2>
					 <p class="author"><?php echo get_the_term_list( $post->ID, 'source', 'From ', '', '' ); // the_author_posts_link(); ?></p>
						
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
					
						<?php 
							if($post_with_quiz)
							{
						?>
								<span class="cpdPoints">
									(Earn CPD Points)
								</span>
						<?php
							}
						?>


       								<?php if (get_post_meta($post->ID, 'visibility', true)) {   ?>
                                    	<span class="members-only">members only</span>

                              		<?php } ?>

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
										<div class="post-gplus">
											<div class="g-plusone" data-size="medium" data-href="<?php echo get_permalink($post->ID); ?>"></div>
                                        </div>
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

					<?php // } endif; ?>
					<!-- G+ code -->
					<script type="text/javascript">(function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
					<!-- ADS -->
					<?php if(++$post_count == 1){ ?>
					<div class="category-ads">
						<!-- Category_secondpost_268_60 -->
						<div id='div-gpt-ad-1344219261300-0' style='width:468px; height:60px;'>
						<script type='text/javascript'>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344219261300-0'); });
						</script>
						</div>
					</div>
					<?php }  ?>
					<!-- ADS end -->
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