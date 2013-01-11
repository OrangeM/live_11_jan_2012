<?php
/*
Template Name: Redirect to correct url
*/



/*

Directory

*/

if ( is_page('11')) { //directory
	wp_redirect(get_option('siteurl') . '/connect/the-directory/a', 301); } 


/* Events */

elseif ( is_page('15')) { //events
	wp_redirect(get_option('siteurl') . '/events', 301); } 
	
/* Forums */

elseif ( is_page('28')) { //forums
	wp_redirect(get_option('siteurl') . '/forums', 301); } 
	

?>
