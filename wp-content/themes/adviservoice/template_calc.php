<?php 
/* 
Template Name: Calculator template
*/ 
?>
<?php get_header(); ?>  
    <div id="container">
            
    <h1 class="blue-bg"><?php the_title(); ?></h1> 
            <div class="separator-arrow"> </div>
		
        <div id="content" role="main" class="staticp">
        		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    <?php the_content('Read the rest of this entry'); ?>
                                </div>
                
                            </div>
                
                        <?php endwhile; ?>

                    <?php else : ?>
                
                        <h2 class="center">Not Found</h2>
                        <p class="center">Sorry, but you are looking for something that isn't here.</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
                
                    <?php endif; ?>

                    <?php if (is_page('957')) { // Get your event on AdviserVoice  ?>
                    
						<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>
                        
                        <script type="text/javascript">
                        var m7x3p9 = new WufooForm();
                        m7x3p9.initialize({
                        'userName':'inqbase', 
                        'formHash':'m7x3p9', 
                        'autoResize':true,
                        'height':'1367'});
                        m7x3p9.display();
                        </script>				
                    
                    <?php } 
                    
                  elseif (is_page('954')) {// Feedback & suggestions  ?>
				   
						<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

						<script type="text/javascript">
                        var z7x4a3 = new WufooForm();
                        z7x4a3.initialize({
                        'userName':'inqbase', 
                        'formHash':'z7x4a3', 
                        'autoResize':true,
                        'height':'810'});
                        z7x4a3.display();
                        </script>
				   
                   
                    <?php } 
                    
                   elseif (is_page('920')) {// Directory Update  ?>

<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>

					<script type="text/javascript">
                    var q7x3s5 = new WufooForm();
                    q7x3s5.initialize({
                    'userName':'inqbase', 
                    'formHash':'q7x3s5', 
                    'autoResize':true,
                    'height':'1868'});
                    q7x3s5.display();
                    </script>                    
				<?php } 
					
                  
				   elseif (is_page ('3316')) {// Contact us ?>

						<script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>
                        
                        <script type="text/javascript">
                        var r7x3q1 = new WufooForm();
                        r7x3q1.initialize({
                        'userName':'inqbase', 
                        'formHash':'r7x3q1', 
                        'autoResize':true,
                        'height':'574'});
                        r7x3q1.display();
                        </script>
                    <?php } 
                
				   elseif (is_page ('3344')) {// Suggest a forum ?>
                        
                        <script type="text/javascript">var host = (("https:" == document.location.protocol) ? "https://secure." : "http://");document.write(unescape("%3Cscript src='" + host + "wufoo.com/scripts/embed/form.js' type='text/javascript'%3E%3C/script%3E"));</script>
                        
                        <script type="text/javascript">
                        var w7x2x3 = new WufooForm();
                        w7x2x3.initialize({
                        'userName':'inqbase', 
                        'formHash':'w7x2x3', 
                        'autoResize':true,
                        'height':'574'});
                        w7x2x3.display();
                        </script>                    
					
					<?php } ?>


                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        <!-- sidebar -->
        <div id="sidebar" class="right">
        
        <div class="page">
			<?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 

<?php
            		if (is_user_logged_in() && !is_feed() && !is_page('7077'))	//not a main calculator page
			{
				if ( ! dynamic_sidebar( 'Calculator Member Only Sidebar' ) ) : endif;
			}	

?>                    
                   
                   <li id="contact" class="widget">
                   		<h2 class="blue-bg">Our details</h2>
                        
                        <ul id="contact-details">
                        
                            <li class="details" id="email"><a href="mailto:editor@adviservoice.com.au">editor@adviservoice.com.au</a></li>
		            <li class="details" id="email"><a href="mailto:advertise@adviservoice.com.au">advertise@adviservoice.com.au</a></li>
                            <!--<li class="details" id="support"><a href="mailto:support@adviservoice.com.au">support@adviservoice.com.au</a></li>-->
                            	<li class="details sm"> <ul id="social">
                          				<li class="details" id="fb"><a href="http://www.facebook.com/adviservoice">facebook</a> </li><li class="details" id="twitter"><a href="http://www.twitter.com/AdviserVoice">twitter</a></li></ul></li>
                            <li class="details" id="joinAV"><a href="http://www.adviservoice.com.au/registration/">Join AdviserVoice</a></li>
                   
						</ul>
                        
                   </li>

            <?php //endif; ?> 
                     
        
        </div> <!-- end div class page -->
        </div> <!-- end sidebar -->
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
