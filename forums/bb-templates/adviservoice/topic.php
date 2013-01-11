<?php bb_get_header(); ?>
<!-- wrap page -->
 <div id="container">
            
    <h1 class="pageheading">You are in the <div class="bbcrumb"><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a><?php bb_forum_bread_crumb(); ?></div></h1>
		
        <div id="content" role="main" class="staticp">
        		
                <div class="post-wrapper">
                <!-- page wrap -->

<!--<div class="forum-banner"><a href="http://www.adviservoice.com.au/get-heard-on-adviservoice-get-grange-hermitage/" title="Have your say and WIN!"><img src="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/forums/grange_banner.png" width="695" height="140" /></a></div>-->

<h1 class="blue-bg  <?php if($topic->forum_id == BLIND_FORUM) echo "blindheading"; ?>"><?php topic_title(); ?></h1>

<?php do_action('under_title'); ?>

	
	<?php if ($posts) : ?>
		<?php topic_pages( array( 'before' => '<div class="nav">', 'after' => '</div>' ) ); ?>
		<div id="ajax-response"></div>
		<ol id="thread" class="list:post">

			<?php foreach ($posts as $bb_post) : $del_class = post_del_class(); ?>
                <?php
                    $classes = " clearfix";
                    if($topic->forum_id == BLIND_FORUM) $classes .= " blind";
                ?>
                <li id="post-<?php post_id(); ?>"<?php alt_class('post', $del_class. $classes); ?>>
                    <?php bb_post_template(); ?>
                </li>
            <?php endforeach; ?>

		</ol>
        
		<div class="clearit"><br style=" clear: both;" /></div>
		
        <p class="rss-link"><a href="<?php topic_rss_link(); ?>" class="rss-link"><?php _e('Subscribe to the <abbr title="Really Simple Syndication">RSS</abbr> feed for this topic') ?></a></p>

		<?php topic_pages( array( 'before' => '<div class="nav">', 'after' => '</div>' ) ); ?>
	<?php endif; ?>

	
    
	
	<?php if ( topic_is_open( $bb_post->topic_id ) ) : ?> 
		<?php post_form(); ?>
	
	<?php else : ?>
		<h2><?php _e('Topic Closed') ?></h2>
		<p><?php _e('This topic has been closed to new replies.') ?></p>
	<?php endif; ?>



	
	<?php if ( bb_current_user_can( 'delete_topic', get_topic_id() ) || bb_current_user_can( 'close_topic', get_topic_id() ) || bb_current_user_can( 'stick_topic', get_topic_id() ) || bb_current_user_can( 'move_topic', get_topic_id() ) ) : ?>

        <div class="admin"> <?php bb_topic_admin(); ?> </div>

	<?php endif; ?>
    
</div> <!--end post wrapper-->
            
</div> <!--end content-->        		
        
<?php include("sidebar-thread.php"); ?>
    	
</div> <!--end container-->

<?php bb_get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>