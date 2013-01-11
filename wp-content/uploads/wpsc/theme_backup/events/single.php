<?php
	global $sp_ecp;
	get_header();
?>	
    <div id="container">
    
	<div id="tec-content" class="upcoming">
		<div id='tec-events-calendar-header' class="clearfix">
			<h2 class="tec-cal-title"><?php sp_events_title(); ?></h2>
    <div class="separator-arrow"> <p><a href='<?php echo sp_get_gridview_link(); ?>'>Go back to the Events home page</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php bloginfo('url')?>/get-your-event-featured-on-adviservoice"> Get your event featured on AdviserVoice</a></p></div>

    <div id="content" class="tec-event widecolumn">
	<?php the_post(); global $post; ?>
			<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
				
                
                
                <div class="event-top-wrapper">
                	
                    <div class="event-header">
                
                    	<div class="event-date">
							<div class="month"><?php echo sp_get_start_date( null, false, 'M'); ?></div>
							<div class="day"><?php echo sp_get_start_date( null, false, 'j'); ?> </div>
						</div>	        
                    
                    <h2 class="entry-title main_heading"><?php the_title() ?></h2>
					</div>
					
					<?php if (sp_get_end_date() > time()  ) { ?><small><?php  _e('This event has passed.', $sp_ecp->pluginDomain) ?></small> <?php } ?>
                    
                        <div id="tec-event-meta">
                        
                            <dl class="column">
                                <dt><strong style="color:#00314F;"><?php _e('Start', $sp_ecp->pluginDomain) ?></strong></dt> 
                                    <dd><?php echo sp_get_start_date(); ?></dd>
                                <?php if (sp_get_start_date() !== sp_get_end_date() ) { ?>
                                    <dt><strong style="color:#00314F;"><?php _e('End', $sp_ecp->pluginDomain) ?></strong></dt>
                                    <dd><?php echo sp_get_end_date();  ?></dd>						
                                <?php } ?>
                                <?php if ( sp_get_cost() ) : ?>
                                    <dt><strong style="color:#c00;"><?php _e('Cost', $sp_ecp->pluginDomain) ?></strong></dt>
                                    <dd><span style="color:#c00"><?php echo sp_get_cost(); ?></span></dd>
                                <?php endif; ?>
                                <?php sp_meta_event_cats(); ?>
                            </dl>
                            
                            <dl class="column second">
                                <?php if(sp_get_venue()) : ?>
                                <dt><strong style="color:#00314F;"><?php _e('Venue', $sp_ecp->pluginDomain) ?></strong></dt> 
                                    <dd><?php echo sp_get_venue(); ?></dd>
                                <?php endif; ?>
                                <?php if(sp_get_phone()) : ?>
                                <dt><strong style="color:#00314F;"><?php _e('Phone', $sp_ecp->pluginDomain) ?></strong></dt> 
                                    <dd><?php echo sp_get_phone(); ?></dd>
                                <?php endif; ?>
                                <?php if( sp_address_exists( $post->ID ) ) : ?>
                                <dt>
                                    <strong style="color:#00314F;"><?php _e('Address', $sp_ecp->pluginDomain) ?></strong><br />
                                </dt>
                                    <dd>
                                    <?php sp_the_full_address( $post->ID ); ?>
                                    </dd>
                                <?php endif; ?>
                            </dl>
                            
                            	<dl class="column-small">
                            	
                                    <?php if( get_post_meta( $post->ID, '_EventShowMapLink', true ) == 'true' ) : ?>
                                        <div class="gmap-icon"><a class="gmap" href="<?php sp_the_map_link() ?>" title="<?php _e('Click to view a Google Map', $sp_ecp->pluginDomain); ?>" target="_blank"><?php _e('View Google Map', $sp_ecp->pluginDomain ); ?></a></div>
                                    <?php endif; ?>
                            	</dl> 
                       
                     </div>
				</div> <!--end event top wrapper-->
				
				<?php if( get_post_meta( $post->ID, '_EventShowMap', true ) == 'true' ) : ?>
					<?php if( sp_address_exists( $post->ID ) ) sp_the_embedded_map(); ?>
				<?php endif; ?>
				
                
                <div class="entry">
					<?php the_content() ?>	
					<?php if (function_exists('sp_get_ticket_form')) { sp_get_ticket_form(); } ?>		
				</div>
				<!--<a class="ical single" href="<?php echo sp_get_single_ical_link(); ?>"><?php _e('iCal Import', $sp_ecp->pluginDomain); ?></a>
				<a href="<?php echo sp_get_add_to_gcal_link() ?>" class="gcal-add" title="<?php _e('Add to Google Calendar', $sp_ecp->pluginDomain); ?>"><?php _e('+ Google Calendar', $sp_ecp->pluginDomain); ?></a>
				<?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?>-->
			</div><!-- post -->

		<?php if(sp_get_option('showComments','no') == 'yes'){ comments_template();} ?>
</div>
</div>
	</div><!-- #content -->
	</div><!--#container-->

<?php
	get_footer();