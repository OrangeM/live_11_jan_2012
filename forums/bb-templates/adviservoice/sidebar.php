<div id="sidebar" class="left">
        
	<div id="notmoderated"><p>These forums are not moderated</p></div>
        
    <div class="page">

		<?php if ( bb_forums() ) : ?>
            <h2 class="blue-bg" <?php if(bb_is_forum()) { echo " style=\"margin-top: 0px;\""; } ?>   ><?php _e('Forums'); ?></h2>
            <img class="break" src="<?php echo bb_get_option('uri'); ?>/bb-templates/adviservoice/images/break-up.jpg" width="250" height="24" />
            <table id="forumlist">
                <?php while ( bb_forum() ) : ?>
                <?php if (bb_get_forum_is_category()) : ?>
                    <tr<?php bb_forum_class('sbb-category'); ?>>
                        <td><?php bb_forum_pad( '<div class="nest">' ); ?><a href="<?php forum_link(); ?>"><?php forum_name(); ?></a><?php forum_description( array( 'before' => '<small>', 'after' => '</small>' ) ); ?><?php bb_forum_pad( '</div>' ); ?></td>
                    </tr>
                <?php continue; endif; ?>
                    <tr<?php bb_forum_class('forum_'.get_forum_id()); ?>>
                        <td><?php bb_forum_pad( '<div class="nest">' ); ?><a href="<?php forum_link(); ?>"><?php forum_name(); ?></a><?php forum_description( array( 'before' => '<small>', 'after' => '</small>' ) ); ?><?php bb_forum_pad( '</div>' ); ?></td>
                    </tr>
                    
                    <tr>
                        <td><div <?php bb_forum_class('forumbreak forum_'.get_forum_id()); ?>></div></td>
                    </tr>
                    
                <?php endwhile; ?>
          
            </table>
            <?php endif; // bb_forums() ?>
        
        <img class="break" src="<?php echo bb_get_option('uri'); ?>/bb-templates/adviservoice/images/break-down.jpg" width="250" height="24" />
        
        <a href="/suggest-a-forum/" id="suggest-forum" title="">Suggest a new forum</a>
    
    </div>



	<div class="google_ads_tile">
		<!-- ADS -->
		<!-- SideBar_bottom_250_250 -->
		<div id='div-gpt-ad-1344210137887-0' style='width:250px; height:250px;'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344210137887-0'); });
		</script>
		</div>
		<!-- ADS end -->
    </div>


    </div>