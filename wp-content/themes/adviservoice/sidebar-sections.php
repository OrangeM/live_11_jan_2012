       	<div id="sidebar" class="right">
        
        <div class="twoh">
			<?php 
				
			dynamic_sidebar( 'Recent Comments' ); 
			
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
                    
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
                
               <!-- sidebar_skyscraper_120_600 -->
			<div id='div-gpt-ad-1344214265017-0' style='width:120px; height:600px;'>
			<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344214265017-0'); });
			</script>
			</div>
        
        </div> <!--end advertising-->
        </div>