     <div id="sidebar" class="right dynamic-pages">
        
        <div class="twoh">
			
			<?php  	
				dynamic_sidebar('Recent Comments');
				if ( function_exists('earn_cpd_points_per_category')) : 
					earn_cpd_points_per_category();
				endif;
			?> 



                    <li id="sections" class="widget"> 
    
                        <ul> 
							<?php wp_list_categories('child_of=500&orderby=ID&title_li=<h2 class="blue-bg">' . __('Sections') . '</h2>' ); ?>
						</ul>						
                        
                   </li>

                   
              </li>

            
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