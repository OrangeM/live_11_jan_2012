<?php 
/* 
Template Name:  Sitemap
*/ 
?>

<?php get_header(); ?>  
    <div id="container">
        
        <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
            
            <div id="content" role="main" class="staticp fullwidth">
    		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content(); ?>
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>
                
                
                    <?php else : ?>
                
                    <?php endif; ?>
                    
                    
                    
                    <div class="map-sections division">
                    	<h2 class="sitemap">Sections</h2>
                        
                        <div class="map-col first">
                        	<ul>
                                <li><a href="http://www.adviservoice.com.au/connect" class="parent">Connect</a></li>
                                <?php wp_list_pages('child_of=5&title_li=&depth=1'); ?>                         
                        	</ul>
                        </div>
                        
                        <div class="map-col">
                        	<ul>	
                                <li><a href="http://www.adviservoice.com.au/section/discuss" class="parent">Discuss</a></li>
                                <?php wp_list_categories('child_of=500&title_li=&depth=2&orderby=ID&order=ASC'); ?>
							</ul>
                        </div>

                        <div class="map-col">
                            <ul>
                                <li><a href="http://www.adviservoice.com.au/section/explore" class="parent">Explore</a></li>
                                <?php wp_list_categories('child_of=502&title_li=&depth=2&orderby=ID&order=ASC'); ?>
							</ul>
                        </div>

                        <div class="map-col">
                            <ul>
                                <li><a href="http://www.adviservoice.com.au/section/achieve" class="parent">Achieve</a></li>
                                <?php wp_list_categories('child_of=503&title_li=&depth=2&orderby=ID&order=ASC'); ?>
							</ul>
                        </div>


                   	</div> <!--end map-section-->
                    
                    <div class="map-av division">
                    	<h2 class="sitemap">AdviserVoice</h2>
                        
                        <div class="map-col first">
                        	<ul>
                            	<li><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
                        		<li><a href="<?php bloginfo('url'); ?>/about" title="About us / Contact">About us / Contact</a></li>
                                
                            </ul>
                        </div>
                        
                        <div class="map-col">
                        	
                            <ul>
                            	<li><a href="<?php bloginfo('url'); ?>/advertise" title="Advertise">Advertise</a></li>
                        		<li><a href="<?php bloginfo('url'); ?>/privacy" title="Privacy policy">Privacy policy</a></li>
                                
                            </ul>

                        </div>
                        
                    
                        <div class="map-col">
                        	
                            <ul>
                            	<li><a href="<?php bloginfo('url'); ?>/sitemap" title="Site map">Site map</a></li>
                        		<li><a href="<?php bloginfo('url'); ?>/feedback-suggestions" title="Feedback and Suggestion" class="feedback">Feedback and Suggestion</a></li>
                                
                            </ul>

                        </div>

                    </div> <!--end map-av-->
                    
<!--                    <div class="map-forums division">
                    	<h2 class="sitemap">Forums</h2>
                    
                        <div class="map-col first">
                        	<ul>
                            	<li><a href="http://www.adviservoice.com.au/forums/forum/adviservoice-site-support" title="AdviserVoice Site Support">AdviserVoice Site Support</a></li>
                        		<li><a href="" title="Legislation and Regulation">Legislation and Regulation</a></li>
                        		<li><a href="" title="Investor Satisfaction">Investor Satisfaction</a></li>
                            </ul>
                        </div>
                        
                        <div class="map-col">
                        	
                            <ul>
                            	<li><a href="" title="Sales, Marketing and Practice Management">Sales, Marketing and Practice Management</a></li>
                        		<li><a href="" title="Longevity &amp; Retirement Savings Sufficiency">Longevity &amp; Retirement Savings Sufficiency</a></li>
                        		<li><a href="" title="Risk and Insurance">Risk and Insurance</a></li>
                            </ul>

                        </div>
                        
                    
                        <div class="map-col">
                        	
                            <ul>
                            	<li><a href="" title="Investment Management">Investment Management</a></li>
                        		<li><a href="" title="Portfolio Construction and Management">Portfolio Construction and Management</a></li>
                        		<li><a href="" title="The Economy">The Economy</a></li>
                            </ul>

                        </div>
                    
                    
                        <div class="map-col">
                        	
                            <ul>
                            	<li><a href="" title="Education and Training">Education and Training</a></li>
                        		<li><a href="" title="Off Topic">Off Topic</a></li>
                            </ul>

                        </div>
                    
                    
                    </div>--> <!--end forums-->


                </div> <!--end post wrapper-->
        </div> <!--end content-->        		
        
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
