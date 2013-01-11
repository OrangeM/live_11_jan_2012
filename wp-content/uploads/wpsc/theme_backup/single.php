<?php
	$post = $wp_query->post;
	//if (  in_category( array( 7,9,10,11 ) )  ) {
	
	if ( in_category( 'Discuss' ) || post_is_in_descendant_category( 500 ) ){
	include(TEMPLATEPATH . '/single-generic.php');
	}
	
	elseif ( in_category( 'Explore' ) || post_is_in_descendant_category( 502 ) ) {
	include(TEMPLATEPATH . '/single-generic.php');
	}
	
	elseif ( in_category( 'Achieve' ) || post_is_in_descendant_category( 503 ) ) {
	include(TEMPLATEPATH . '/single-generic.php');
	}	
	
	elseif (  'post_type=the_directory' ) { //i can't believe this is actually working!!!!
	include (TEMPLATEPATH . '/single-directory.php');
	}
	
	
	else {
	include (TEMPLATEPATH . '/single-default.php');
	}
?>
