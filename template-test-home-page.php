<?php 
/* 
Template Name: Test Home Page
*/ 
?>
<?php get_header(); ?>
<!-- ADS -->
<?php
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 1), array('before' => '<div class="leaderboard">', 'after' => '</div>'));
?>
<!-- ADS end -->
    <div id="container">
    <div id="featured-posts" class="clearB">
    
    	<div id="featured-header">
        	<h2>State of Play</h2>
        	<ul>
                <li><a href="<?php bloginfo('url'); ?>/section/news-outlook">Read more articles</a></li>
            </ul>
        </div> <!--end featured header-->
        
        <div id="featured-gallery">
        
        
			<?php $my_query = new WP_Query(array('posts_per_page' => 4, 'caller_get_posts' => 1, 'post__in'=>get_option('sticky_posts'))); ?>
    
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                <div class="featured-container" id="post-<?php the_ID(); ?>">
                    
                    <h4 class="feature-heading"><a href="<?php the_permalink() ?>"><?php title_trimmer(get_the_title() , 52); ?></a></h4>

                
                	<?php if (get_post_meta($post->ID, 'State of Play image', true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, 'State of Play image', true); ?>" alt="<?php the_title(); ?>" width="175" height="100" /></a>
                    
                    <?php }
					
					else { ?>
                    
                    <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('url') ?>/dev/images/home/state-play-bg.jpg" /></a>
					
                    <?php } ?>
                    
                
                </div>
            <?php endwhile; ?>
		</div> <!--end featured-gallery-->
    
    </div>       
		
        <div id="content" role="main" class="homep">
        
        <h1 class="blue-bg light" style="margin-top:0;">Managers Corner</h1>
   		
        <div class="slider1">
			<?php if ( function_exists( 'get_smooth_slider' )) { 
               get_smooth_slider('1'); 
            } ?>
        </div> <!--end slider1-->
        
        <ul class="home-small-links man-corner">
        	<li><a href="<?php bloginfo('url')?>/section/news-outlook/managers-corner/">View more</a></li>
        </ul>    
   
   
<!-- ADS -->
<?php
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 6), array('before' => '<div class="google_ads_banner">', 'after' => '</div>'));
?><!-- ADS end -->


   <!--practice success-->
   
        
        <h1 class="blue-bg">Practice Success</h1>
        	<div class="ps-icons">
                <ul>
					<?php wp_list_categories('title_li=&orderby=ID&include=19,20,21,29,535,1377'); ?> <?php //wp_list_categories('title_li=&child_of=502&orderby=ID'); ?> 
            	</ul>
            </div>
        
			<?php $pm_query = new WP_Query('cat=19&posts_per_page=1'); ?>

    
            <?php while ($pm_query->have_posts()) : $pm_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>
 
 			
	<!--thought leadership-->		
			<?php $tl_query = new WP_Query('cat=20&posts_per_page=1'); // thought leadership?>
            
            <?php while ($tl_query->have_posts()) : $tl_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>
           
	<!--system & technology-->		
			<?php $st_query = new WP_Query('cat=21&posts_per_page=1'); // thought leadership?>
            
            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>

	<!-- Business Growth -->		
			<?php $jb_query = new WP_Query('cat=29&posts_per_page=1'); // Business Growth?>
            
            <?php while ($jb_query->have_posts()) : $jb_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>



	<!--job board-->		
			<?php $jb_query = new WP_Query('cat=535&posts_per_page=1'); // job board?>
            
            <?php while ($jb_query->have_posts()) : $jb_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>

	<!--Client Insights-->		
			<?php $eb_query = new WP_Query('cat=1377&posts_per_page=1'); // Client Insights?>
            
            <?php while ($eb_query->have_posts()) : $eb_query->the_post(); ?>
                <div class="practice_success" id="post-<?php the_ID(); ?>">
                
                	<div class="category-icon">
						<?php //displays icons next to posts, function defined in functions.php
                            $the_categories = get_the_category();
                            get_cat_icon_homep($the_categories);
                        ?>
                    </div> 
                    <div class="ps_wrapper">
                    
                    	<div style="float:left; width:370px;">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="date"><?php the_time('d M y') ?></div>
                   		</div>
                   		
                       <div class="go-to"> <a href="<?php the_permalink() ?>"></a></div>
                   
                   </div>
                
                	<?php if (get_post_meta($post->ID, featured, true)) { ?>
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, featured, true); ?>" alt="Image" /></a>
                    
                    <?php } ?> 
                                    
                </div> <!--end .practice success-->
            <?php endwhile; ?>



	    <ul class="home-small-links">
        	<div class="small-arrow-home"></div>
        	<li><a href="<?php bloginfo('url')?>/section/business-administration/">View Other Resources</a></li>
        </ul>   
        
<!-- ADS -->
<?php
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 7), array('before' => '<div class="google_ads_banner">', 'after' => '</div>'));
?><!-- ADS end -->

        </div> <!--end content-->        		
        
		<?php get_sidebar(homep); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>