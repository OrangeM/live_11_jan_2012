       	<div id="sidebar" class="right">
        
        <div class="page">
			<?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
                    
                   
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
<?php
            		if (is_page ('8654') && is_user_logged_in() && !is_feed())	//calculator page
			{
				if ( ! dynamic_sidebar( 'Calculator Member Only Sidebar' ) ) : endif;
			}	

?>
            <?php //endif; ?> 
                     
        
        </div> <!-- div class page -->
        </div>