       	<div id="sidebar" class="right dynamic-pages">
        
        <div class="twoh">
			<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
                    
                    <li id="sections" class="widget"> 
    
                        <ul> 
							<?php wp_list_categories('child_of=503&orderby=ID&title_li=<h2 class="blue-bg">' . __('Sections') . '</h2>' ); ?>
                        </ul>
                   </li>
                   
            
            <?php //endif; ?> 
                     
        
        </div> <!-- div class twoh -->

		<div class="advertising">
                
<!-- ADS -->
<?php
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 9), array('before' => '<div class="skyscraper">', 'after' => '</div>'));
?><!-- ADS end -->
        
        </div> <!--end advertising-->
        </div>