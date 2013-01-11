<?php 
/* 
Template Name: homep test no slider
*/ 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 

<title>AdviserVoice <?php wp_title(); ?></title> 

<link rel="stylesheet" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="print" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/print.css" />
<link rel="apple-touch-icon" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/global/apple_touch.png" type="image/png" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.adviservoice.com.au/feed/" /> 
<link rel="shortcut icon" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/favicon.ico" />



<style type="text/css">

	<?php
		$image = get_post_meta($post->ID, 'background', true);
	?>
	
	#featured-gallery .featured-container {
		background:url(<?php echo get_post_meta($post->ID, 'background', true); ?>) no-repeat #ccc;
	}

</style>
<?php wp_head(); ?>    
    
</head>

<body class="homepage">
<!--[if lte IE 6]><script src="<?php bloginfo('template_directory'); ?>/ie6/warning.js"></script><script>window.onload=function(){e("<?php bloginfo('template_directory'); ?>/ie6/")}</script><![endif]-->

<div id="wrapper">
	<div id="header">
    	
        <div id="masthead">
        
        
        	<div id="branding"><a href="<?php bloginfo('url') ?>"></a></div> <!--end branding-->
            
            <div class="floatR">
            
                <div id="small-menu"> 
                	<ul>
                    	<li class="first homelink"><a href="<?php bloginfo('url') ?>">home</a></li>
                        <li><a href="<?php bloginfo('url') ?>/about">about us</a></li>
                       <!-- <li><a href="<?php bloginfo('url') ?>/forums">Forums</a></li>-->
                       	<li><a href="<?php bloginfo('url') ?>/advertise">advertise</a></li>
						<li><a href="<?php bloginfo('url') ?>/connect/gurus/">gurus</a></li>
						<li class="first forumlink"><a href="<?php bloginfo('url') ;?>/forums">forums</a></li>
						
						<li class="first fb"><a href="<?php bloginfo('url') ;?>/">&nbsp;</a></li>
						<li class="first twitter"><a href="<?php bloginfo('url') ;?>/">&nbsp;</a></li>
						<li class="first rss"><a href="<?php bloginfo('url') ;?>/">&nbsp;</a></li>
                        
                    </ul>
                
                </div> <!--end small menu-->
                
                <div id="search"> <a href="<?php bloginfo('url') ?>/search" title="Search on AdviserVoice"></a></div> <!--end search-->
				
				<?php
					if ( is_user_logged_in() ) {?>
                		<a href="<?php echo wp_logout_url(( $_SERVER['REQUEST_URI'])); ?>" title="Logout"><div id="logout"> </div> </a><!--end sign in-->
					
                <?php
				    } else { ?>
                    	
                        <div id="join"> <a href="<?php bloginfo('url') ?>/registration"></div><!--end join-->
                		<a href="<?php echo wp_login_url(( $_SERVER['REQUEST_URI'] )); ?>" class="button" title="Sign In"><div id="sign-in"> </div> </a><!--end sign in-->
					<?php };
				?>
        
        	</div> <!--end div floatR-->
        
        </div> <!--end masthead-->
			            
            <div id="access" role="navigation">
            
            	<ul id="main-menu">
					<?php wp_list_pages('include=3226,5,8,11,15,3131&title_li=&depth=2'); ?> 
                    <?php wp_list_categories('exclude=499,3,1&title_li=&depth=2&orderby=ID&order=ASC'); ?>
                </ul>
            
            
            </div> <!--end access-->
            

	</div> <!--end header-->

	<div id="container">
    <div id="featured-posts" class="clearB">
    
    	<div id="featured-header">
        	<h2>State of Play</h2>
        	<ul>
                <li><a href="<?php bloginfo('url'); ?>/section/discuss">Read more articles</a></li>
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
                    
                    <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('url') ?>/images/home/state-play-bg.jpg" /></a>
					
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
        	<li><a href="<?php bloginfo('url')?>/section/explore/managers-corner/">View more</a></li>
        </ul>    
   
   
   <!--adviservoice banner -->
        <!--<div class="av-banner banner"><a href="http://www.adviservoice.com.au/forums"></a></div>-->
		
        <div class="google_ads_banner">
			<script type="text/javascript"><!--
                google_ad_client = "ca-pub-2234335271484134";
                /* text_banner */
                google_ad_slot = "7274491301";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
		</div> <!--end google ads banner-->
  
   <!--practice success-->
   
        
        <h1 class="blue-bg">Practice Success</h1>
        	<div class="ps-icons">
                <ul>
					<?php wp_list_categories('title_li=&orderby=ID&include=19,20,21,27,535'); ?> <?php //wp_list_categories('title_li=&orderby=ID&include=19,20,21,23,61,62'); (original one)?> 
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

	<!--education-->		
			<?php $ed_query = new WP_Query('cat=27&posts_per_page=1'); // education?>
            
            <?php while ($ed_query->have_posts()) : $ed_query->the_post(); ?>
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
        	<li><a href="<?php bloginfo('url')?>/section/explore">View Other Resources</a></li>
        </ul>   
        
        
		<div class="google_ads_banner">
			<script type="text/javascript"><!--
                google_ad_client = "ca-pub-2234335271484134";
                /* text_banner */
                google_ad_slot = "7274491301";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
		</div> <!--end google ads banner-->


        </div> <!--end content-->        		
        
		<?php get_sidebar(homep); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>