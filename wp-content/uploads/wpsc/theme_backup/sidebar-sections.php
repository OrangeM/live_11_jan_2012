       	<div id="sidebar" class="right">
        
        <div class="twoh">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
                    
                    <li id="sections" class="widget"> 
    
                        <ul> 
						<?php if ( in_category( 'Practice Success' )) {
                        		wp_list_categories('child_of=18&title_li=<h2 class="blue-bg">' . __('Sections') . '</h2>' ); ?>
                        
						<?php elseif ( in_category( 'Achieve' )) {
                        		wp_list_categories('child_of=40&title_li=<h2 class="blue-bg">' . __('Sections') . '</h2>' ); ?>
                        </ul>
                        
                   </li>
                   
            
            <?php endif; ?> 
                     
        
        </div> <!-- div class twoh -->

		<div class="advertising">
                
                <div class="skyscraper">
                    
                    <img src="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/global/advertising/skyscraper.png" alt="advertising"  />
                </div>
                <div class="skyscraper">
                    
                    <img src="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/global/advertising/skyscraper.png" alt="advertising"  />
                </div>
        
        </div> <!--end advertising-->
        </div>