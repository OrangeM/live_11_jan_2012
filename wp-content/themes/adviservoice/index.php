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
<div class="google_ads_banner">
<!-- hp_midpage_468_60 -->
<div id='div-gpt-ad-1344209494585-0' style='width:468px; height:60px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344209494585-0'); });
</script>
</div>
</div>

<!-- ADS end -->


    <!--practice success-->
   
        
        <h1 class="blue-bg">Practice Success</h1>
        	<div class="ps-icons">
                <ul>
				<?php $ps_icons = wp_nav_menu(array('menu' => 'Practice success', 'echo' => false)); //echo = false because $ps_icons will use in forward php
					echo $ps_icons;

			 	?>
					<?php //wp_list_categories('title_li=&orderby=ID&include=19,20,21,29,535,1377'); ?> <?php //wp_list_categories('title_li=&child_of=502&orderby=ID'); ?> 
            	</ul>
            </div>
		<?php	//output link to last post in categories

			$regex  = '/<a.+>(?P<name>.+)<\/a>/i'; 
			preg_match_all($regex, $ps_icons, $matches);
			if(is_array($matches))
			{
				$matched_categories = $matches['name'];
				foreach($matched_categories as $key => $matched_category_name)
				{	
					$matched_category_name = str_replace('&#038;', '&amp;', $matched_category_name);
					$cat_id = get_cat_id($matched_category_name);
					$pm_query = new WP_Query(array('cat' => $cat_id, 'posts_per_page'=>1));
					while ($pm_query->have_posts()) : $pm_query->the_post(); ?>
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
                                    
			                </div> 
            <?php endwhile; 
				}
			}					

			

		?>


	    <ul class="home-small-links">
        	<div class="small-arrow-home"></div>
        	<li><a href="<?php bloginfo('url')?>/section/business-administration/">View Other Resources</a></li>
        </ul>   
        
<!-- ADS -->
<!-- HP_bottom_468_60 -->
<div id='div-gpt-ad-1344209713945-0' style='width:468px; height:60px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344209713945-0'); });
</script>
</div>
<!-- ADS end -->

        </div> <!--end content-->        		
        
		<?php get_sidebar(homep); ?>
    	
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