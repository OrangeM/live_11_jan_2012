<?php 
/* 
Template Name:  Members only full width
*/ 
?>

<?php get_header(); ?>  
    <div id="container">
        
        <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
            
            <div id="content" role="main" class="staticp fullwidth">
    		
                <div class="post-wrapper">
        	        
					<?php if (is_user_logged_in()) { ?>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                    
                            <?php the_content(); ?>
                    
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <? } else { ?>
                    
                                	<div class="begin-post"></div>
                                                                   
                                        <h3>We're sorry, but this area is for AdviserVoice members only. </h3>
                                        <p>If you already are a member, please <strong><a href="<?php echo wp_login_url(( $_SERVER['REQUEST_URI'] )); ?>" title="Sign In">login</a></strong> to the site. Otherwise why don't you <strong><a href="<?php bloginfo('url') ?>/registration">join</a></strong> the community?<br /> It's FREE and only takes 60 seconds.</p>
                		
                    <? } ?>
                    

                </div> <!--end post wrapper-->
        </div> <!--end content-->        		
        
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
