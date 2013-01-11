<?php bb_get_header(); ?>
<!-- wrap page -->
 <div id="container">
            
    <h1 class="pageheading">You are in the AdviserVoice Forums</h1>
		
        <div id="content" role="main" class="staticp">
        		
                <div class="post-wrapper">
                <!-- page wrap -->
<?php if ( $forums ) : ?>

<!--<div class="forum-banner"><a href="http://www.adviservoice.com.au/get-heard-on-adviservoice-get-grange-hermitage/" title="Have your say and WIN!"><img src="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/forums/grange_banner.png" width="695" height="140" /></a></div>-->


<h1 class="blue-bg">Recent Topics</h1>
<div id="discussionheader">
    <span id="lastreplyheading">Last Reply</span>
    <span id="voicesheading">Voices</span>
    <span id="repliesheading">Replies</span>
    <span id="newtopiclink"><?php bb_new_topic_link('Start a new topic'); ?></span>
</div>
<div id="discussions">
<?php if ( $topics || $super_stickies ) : ?>



<table id="latest" cellpadding="0" cellspacing="0">
<?php if ( $super_stickies ) : foreach ( $super_stickies as $topic ) : ?>
<tr<?php topic_class(); ?>>
	<td class="topicname"><span class="topic_labels"><?php bb_topic_labels(); ?></span> <big><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a></big><?php topic_page_links(); ?></td>
	<td class="num topicscol"><?php topic_posts(); ?></td>
	<td class="num voicescol"><?php bb_topic_voices(); ?></td>
	<td class="num topicmeta"><?php topic_time(); ?><br /><a href="<?php topic_last_post_link(); ?>"><?php topic_last_poster(); ?></a></td>
</tr>
<?php endforeach; endif; // $super_stickies ?>

<?php if ( $topics ) : foreach ( $topics as $topic ) : ?>
<tr<?php topic_class('forum_'.$topic->forum_id); ?>>
	<td class="topicname"><span class="topic_labels"><?php bb_topic_labels(); ?></span> <a href="<?php topic_link(); ?>"><?php topic_title(); ?></a><?php topic_page_links(); ?></td>
	<td class="num topicscol"><?php topic_posts(); ?></td>
	<td class="num voicescol"><?php bb_topic_voices(); ?></td> 
    <?php if($topic->forum_id == BLIND_FORUM) : ?>
	<td class="num topicmeta"><?php topic_time(); ?> ago<br /><a href="<?php topic_last_post_link(); ?>">Go to latest post</a></td>
    <?php else: ?>
    <td class="num topicmeta"><?php topic_time(); ?> ago from <?php topic_last_poster();?><br /><a href="<?php topic_last_post_link(); ?>">Go to latest post<?php //topic_last_poster(); ?></a></td>
    <?php endif; ?>
</tr>
<?php endforeach; endif; // $topics ?>
</table>
<?php bb_latest_topics_pages( array( 'before' => '<div class="nav">', 'after' => '</div>' ) ); ?>
<?php endif; // $topics or $super_stickies ?>

</div>

<?php else : // $forums ?>

<div class="bbcrumb"><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Add New Topic'); ?></div>

<?php post_form(); endif; // $forums ?>


</div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        <?php include("sidebar.php"); ?>
    	
    </div> <!--end container-->
    
	<?php bb_get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>