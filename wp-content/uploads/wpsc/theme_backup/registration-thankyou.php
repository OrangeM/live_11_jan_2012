<?php 
/* 
Template Name:  Registration Thankyou
*/ 




?>
<?php get_header(registration); ?>  
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
                                    <?php the_content(''); ?>
                                    
                                    
                                    


<ul id="registrationlinks">
	<li><a href="/about">Find out more about AdviserVoice</a></li> 
    <span>|</span>
    <li><a href="/privacy">Read our Privacy Policy</a></li>     	                               
</ul>

                                </div>
                
                            </div>
                
                        <?php endwhile; ?>

                
                    <?php endif; ?>
				
                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
