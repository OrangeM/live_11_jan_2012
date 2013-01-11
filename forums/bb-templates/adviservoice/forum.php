<?php bb_get_header(); ?>
<!-- wrap page -->
 <div id="container">
            
    <h1 class="pageheading">You are in the <div class="bbcrumb"><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a><?php bb_forum_bread_crumb(); ?></div>
</h1>
		
        <div id="content" role="main" class="staticp">
        		
                <div class="post-wrapper">


                <!-- page wrap -->

<!--<div class="forum-banner"><a href="http://www.adviservoice.com.au/get-heard-on-adviservoice-get-grange-hermitage/" title="Have your say and WIN!"><img src="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/forums/grange_banner.png" width="695" height="140" /></a></div>-->


<h1 class="blue-bg  <?php if($forum_id == BLIND_FORUM) echo "blindheading"; ?>"><?php echo get_forum_name($forum_id) ?></h1>

<div id="discussionheader">
    <span id="lastreplyheading">Last Reply</span>
    <span id="voicesheading">Voices</span>
    <span id="repliesheading">Replies</span>
    <span id="newtopiclink"><?php bb_new_topic_link('Start a new topic'); ?></span>
</div>

<?php if ( $topics || $stickies ) : ?>

<table id="latest" role="main"  cellpadding="0" cellspacing="0">

<?php if ( $stickies ) : foreach ( $stickies as $topic ) : ?>
<tr<?php topic_class('forum_'.$topic->forum_id); ?>>
	<td class="topicname"><span class="topic_labels"><?php bb_topic_labels(); ?></span> <big><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></big><?php topic_page_links(); ?></td>
	<td class="num"><?php topic_posts(); ?></td>
	<td class="num"><?php bb_topic_voices(); ?></td>
    <?php if($topic->forum_id == BLIND_FORUM) : ?>
	<td class="num topicmeta"><a href="<?php topic_last_post_link(); ?>"><?php topic_time(); ?></a></td>
    <?php else: ?>
    <td class="num topicmeta"><?php topic_time(); ?> ago from <?php topic_last_poster();?><br /><a href="<?php topic_last_post_link(); ?>">Go to latest post<?php //topic_last_poster(); ?></a></td>
    <?php endif; ?>
</tr>
<?php endforeach; endif; ?>

<?php if ( $topics ) : foreach ( $topics as $topic ) : ?>
<tr<?php topic_class('forum_'.$topic->forum_id); ?>>
	<td class="topicname"><span class="topic_labels"><?php bb_topic_labels(); ?></span> <a href="<?php topic_link(); ?>"><?php topic_title(); ?></a><?php topic_page_links(); ?></td>
	<td class="num topicscol"><?php topic_posts(); ?></td>
	<td class="num voicescol"><?php bb_topic_voices(); ?></td>
	
	
	<?php if($topic->forum_id == BLIND_FORUM) : ?>
	<td class="num topicmeta"><?php topic_time(); ?> ago<br /><a href="<?php topic_last_post_link(); ?>">Go to latest post</a></td>
    <?php else: ?>
    
    
    <td class="num topicmeta"><?php topic_time(); ?> ago from <?php topic_last_poster();?><br /><a href="<?php topic_last_post_link(); ?>">Go to latest post<?php //topic_last_poster(); ?></a></td>
    <?php endif; ?></tr>
<?php endforeach; endif; ?>
</table>

<div class="clearit"><br style=" clear: both;" /></div>

<p class="rss-link"><a href="<?php bb_forum_posts_rss_link(); ?>" class="rss-link"><?php _e('Subscribe to the <abbr title="Really Simple Syndication">RSS</abbr> feed for this forum'); ?></a></p>

<?php forum_pages( array( 'before' => '<div class="nav">', 'after' => '</div>' ) ); ?>

<?php endif; ?>

<?php post_form(); ?>

</div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        <?php include("sidebar.php"); ?>
    	
    </div> <!--end container-->
    
	<?php bb_get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
