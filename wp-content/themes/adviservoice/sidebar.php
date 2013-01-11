       	<div id="sidebar" class="right">

        <div class="archive">
		
			<?php  
				
				dynamic_sidebar( 'Recent Comments' ); 
				
				if ( function_exists('kjgrc_create_recent_comments')) : 
					kjgrc_create_recent_comments();
				endif;
				
				
				if ( function_exists('earn_cpd_points_per_category')) : 
					earn_cpd_points_per_category();
				endif;
			?> 
               	 <li id="elsewhere" class="widget"><h2 class="blue-bg">Also on AdviserVoice</h2>

           	 <div class="separator-arrow"></div>
                        <ul>

						<?php 
							$args = array( 'numberposts' => '30', 'category' => '-534', 'post_status' => 'publish' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
						?>
							<li><a href="<?php echo get_permalink($recent["ID"]); ?>" title="<?php echo $recent["post_title"]; ?>"><?php echo $recent["post_title"]; ?></a></li>
						<?php								
							}						
						?>
						</ul>

                   </li>



        </div> <!-- div class twoh -->

        </div>