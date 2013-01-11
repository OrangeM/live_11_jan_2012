<?php
	global $sp_ecp;
	
	get_header();
?>
<div id="container">
	<div id="tec-content" class="upcoming">
		<div id='tec-events-calendar-header' class="clearfix">
			<h2 class="tec-cal-title"><?php sp_events_title(); ?></h2>
               <div class="separator-arrow"> <p><a href="<?php bloginfo('url')?>/get-your-event-featured-on-adviservoice"> Get your event featured on AdviserVoice</a></p></div>
           
           <div id="events-nav"><span class="current-view">&nbsp;&nbsp;Event List</span> <!--current view-->

                
                <div class="floatR">

                <span class='tec-calendar-buttons'> 
                    <a class='tec-button-off' href='<?php echo sp_get_listview_link(); ?>'><?php _e('Event List', $sp_ecp->pluginDomain)?></a>
                    <a class='tec-button-on' href='<?php echo sp_get_gridview_link(); ?>'><?php _e('Calendar', $sp_ecp->pluginDomain)?></a>
                </span>
            
           		</div>
           
          </div> <!--events-nav-->  
  

		</div><!--#tec-events-calendar-header-->
		
        
        <div style="clear:both; height:10px;"></div>
        <div id="tec-events-loop" class="tec-events post-list clearfix">
		
		<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID() ?>" <?php post_class('tec-event clearfix event-wrapper') ?>>
                	
                    <div class="event-left">	
                        
					<div class="event-top">
						<?php if ( sp_is_new_event_day() ) : ?>
                       	
                        <div class="event-date">
							<div class="month"><?php echo sp_get_start_date( null, false, 'M'); ?></div>
							<div class="day"><?php echo sp_get_start_date( null, false, 'j'); ?> </div>
						</div>	        
						
                        			
						<?php endif; ?>
                        
                        <div class="event-heading">
							<?php the_title('<h2 class="entry-title main_heading"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
						</div>
                        
                    </div> <!-- event-top -->	
                    
                    
                            <div class="entry-content tec-event-entry">
								<?php the_content(); ?>
							</div> <!-- End tec-event-entry -->
					</div> <!--end left-->
                    
                    <div class="event-right">
                            <div class="tec-event-list-meta">
                              <table cellspacing="0">
                                  <tr>
                                    <td class="tec-event-meta-desc"><?php _e('Start', $sp_ecp->pluginDomain) ?></td>
                                    <td class="tec-event-meta-value"><?php echo sp_get_start_date(); ?></td>
                                  </tr>
                                  <tr>
                                    <td class="tec-event-meta-desc"><?php _e('End', $sp_ecp->pluginDomain) ?></td>
                                    <td class="tec-event-meta-value"><?php echo sp_get_end_date(); ?></td>
                                  </tr>
                                  <?php
                                    $venue = sp_get_venue();
                                    if ( !empty( $venue ) ) :
                                  ?>
                                  <tr>
                                    <td class="tec-event-meta-desc"><?php _e('Venue', $sp_ecp->pluginDomain) ?></td>
                                    <td class="tec-event-meta-value"><?php echo $venue; ?></td>
                                  </tr>
                                  <?php endif; ?>
                                  <?php
                                    $phone = sp_get_phone();
                                    if ( !empty( $phone ) ) :
                                  ?>
                                  <tr class="phone">
                                    <td class="tec-event-meta-desc"><?php _e('Phone', $sp_ecp->pluginDomain) ?></td>
                                    <td class="tec-event-meta-value"><?php echo $phone; ?></td>
                                  </tr>
                                  <?php endif; ?>
                                  <?php if (sp_address_exists( $post->ID ) ) : ?>
                                  <tr class="address">
                                    <td class="tec-event-meta-desc"><?php _e('Address', $sp_ecp->pluginDomain); ?></td>
                                    <td class="tec-event-meta-value"><?php sp_the_full_address( $post->ID ); ?></td>
                                  </tr>
                                  <?php endif; ?>
                                  <?php
                                    $cost = sp_get_cost();
                                    if ( !empty( $cost ) ) :
                                  ?>
                                  <tr>
                                    <td class="tec-event-meta-desc cost"><?php _e('Cost', $sp_ecp->pluginDomain) ?></td>
                                    <td class="tec-event-meta-value cost"><?php echo $cost; ?></td>
                                 </tr>
                                  <?php endif; ?>
                              </table>
                              
                            </div>
                          </div> <!--end right-->
                        </div> <!-- End post -->
		<?php endwhile; // posts ?>



		</div><!-- #tec-events-loop -->
		<div id="tec-nav-below" class="tec-nav clearfix">

			<div class="tec-nav-previous"><?php 
			// Display Previous Page Navigation
			if( sp_is_upcoming() && get_previous_posts_link( ) ) : ?>
				<?php previous_posts_link( '<span>Previous Events</span>' ); ?>
			<?php elseif( sp_is_upcoming() && !get_previous_posts_link( ) ) : ?>
				<a href='<?php echo sp_get_past_link(); ?>'><span><?php _e('Previous Events', $sp_ecp->pluginDomain ); ?></span></a>
			<?php elseif( sp_is_past() && get_next_posts_link( ) ) : ?>
				<?php next_posts_link( '<span>Previous Events</span>' ); ?>
			<?php endif; ?>
			</div>

			<div class="tec-nav-next"><?php
			// Display Next Page Navigation
			if( sp_is_upcoming() && get_next_posts_link( ) ) : ?>
				<?php next_posts_link( '<span>Next Events</span>' ); ?>
			<?php elseif( sp_is_past() && get_previous_posts_link( ) ) : ?>
				<?php previous_posts_link( '<span>Next Events</span>' ); // a little confusing but in 'past view' to see newer events you want the previous page ?>
			<?php elseif( sp_is_past() && !get_previous_posts_link( ) ) : ?>
				<a href='<?php echo sp_get_upcoming_link(); ?>'><span><?php _e('Next Events', $sp_ecp->pluginDomain); ?></span></a>
			<?php endif; ?>
			</div>

		</div>
	</div>

</div> <!--end container-->
<?php
get_footer();
