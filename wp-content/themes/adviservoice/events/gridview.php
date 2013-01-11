<?php
	global $sp_ecp;
	get_header();
?>	
<div id="container">
	<div id="tec-content" class="grid">
		<div id='tec-events-calendar-header' class="clearfix">
			<h2 class="tec-cal-title blue-bg"><?php sp_events_title(); ?></h2>
           
           
               <div class="separator-arrow"> <p><a href="<?php bloginfo('url')?>/get-your-event-featured-on-adviservoice"> Get your event featured on AdviserVoice</a></p></div>

           <div id="events-nav">
			 
                <span class='tec-prev-month'>
					<a href='<?php echo sp_get_previous_month_link(); ?>'> <img src="<?php bloginfo('template_directory'); ?>/images/events/arrow-prev.png"  /> </a>
				</span>
<div class="floatR">

                <span class='tec-calendar-buttons'> 
                    <a class='tec-button-off' href='<?php echo sp_get_listview_link(); ?>'><?php _e('Event List', $sp_ecp->pluginDomain)?></a>
                    <a class='tec-button-on' href='<?php echo sp_get_gridview_link(); ?>'><?php _e('Calendar', $sp_ecp->pluginDomain)?></a>
                </span>
            
				<span class='tec-next-month'>
					<a href='<?php echo sp_get_next_month_link(); ?>'>	<img src="<?php bloginfo('template_directory'); ?>/images/events/arrow-next.png"  /></a>
				</span>
           		</div>	

				<span class="current-view">
					<?php echo sp_get_current_month_text(); ?>&nbsp;<?php echo sp_get_current_year_text(); ?>
    			</span> <!--current view-->
                
               
           
          </div> <!--events-nav-->  

		</div><!-- tec-events-calendar-header -->
		<?php sp_calendar_grid(); // See the views/table.php template for customization ?>
		
	</div>
</div> <!--end container-->

<?php
	get_footer();