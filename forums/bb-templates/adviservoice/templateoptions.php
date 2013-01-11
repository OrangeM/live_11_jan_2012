<?php
define("BLIND_FORUM", "15");
define("BLIND_FORUM_CLASS", "blind");

add_filter( 'get_topic_posts', 'av_get_topic_posts' );


function av_get_topic_posts( $posts, $topic_id=0 ) {
	return sprintf("%d", $posts);
}

?>