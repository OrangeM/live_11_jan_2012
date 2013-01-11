       	<div id="sidebar" class="right homep">
        
        <div class="twoh">
            <?php av_latest_voices(); ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


            <?php endif; ?>
            
                     

        </div> <!-- div class twoh -->

		<div class="advertising homep">
        
<!-- ADS -->
<!-- sidebar_top_250_250 -->
<div id='div-gpt-ad-1344210257055-0' style='width:250px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344210257055-0'); });
</script>
</div>
<!-- ADS end -->

        <div class="forum-feeds">
           <h2 class="blue-bg forum-feed">latest voices</h2>

				<?php if(function_exists('fetch_feed')) { // source: http://digwp.com/2009/11/import-and-display-feeds-in-wordpress/

                    include_once(ABSPATH . WPINC . '/feed.php');               // include the required file
                    $feed = fetch_feed('http://www.adviservoice.com.au/forums/rss'); // specify the source feed

                    $limit = $feed->get_item_quantity(4); // specify number of items
                    $items = $feed->get_items(0, $limit); // create an array of items

                }
                if ($limit == 0) echo '<div>The feed is either empty or unavailable.</div>';
                else foreach ($items as $item) : ?>

                <div class="av-feed">
                    <div>
                        <a href="<?php echo $item->get_permalink(); ?>"
                          title="<?php echo $item->get_title(); ?>">
                            <?php echo $item->get_title(); ?>
                        </a>
                    </div>
                    <div>
                        <?php echo substr($item->get_description(), 0, 140); ?>
                        <span>...</span>
                    </div>
                    <div class="forum-feed-timestamp"><?php
			$date_format = 'j M Y, g:i a';
			$str_date = $item->get_date();
			//echo $str_date;
			$offset = 10 * 3600;
			$time = strtotime($str_date) + $offset;//.'+10 hours'

			echo date($date_format, $time); 
			?></div>
                </div> <!--end av feed-->

                <?php endforeach; ?>

	    <ul class="home-small-links forums-link">
        	<div class="small-arrow-home"></div>
        	<li><a href="http://www.adviservoice.com.au/forums">Go to the Forums</a></li>
        </ul>
</div> <!--end forum-feeds-->


                
<!--                           <?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
                        <li class="polls">
                           <h2 class="blue-bg">Poll</h2>
                           <ul>
                              <li><?php get_poll();?></li>
                           </ul>
                           <?php //display_polls_archive_link(); ?>
                        </li>
                        <?php endif; ?>
-->

<!-- ADS -->
<!-- SideBar_bottom_250_250 -->
<div id='div-gpt-ad-1344210137887-0' style='width:250px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344210137887-0'); });
</script>
</div>
<!-- ADS end -->



        
        </div> <!--end advertising homep-->
        </div>