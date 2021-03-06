<?php
/*
Plugin Name: Ambrosite Next/Previous Post Link Plus
Plugin URI: http://www.ambrosite.com/plugins
Description: Upgrades the next/previous post link template tags to reorder or loop adjacent post navigation links, return multiple links, truncate link titles, and display post thumbnails. IMPORTANT: If you are upgrading from plugin version 1.1, you will need to update your templates (refer to the <a href="http://www.ambrosite.com/plugins/next-previous-post-link-plus-for-wordpress">documentation</a> on configuring parameters).
Version: 2.1
Author: J. Michael Ambrosio
Author URI: http://www.ambrosite.com
License: GPL2
*/

/**
 * Retrieve adjacent post link.
 *
 * Can either be next or previous post link.
 *
 * Based on get_adjacent_post() from wp-includes/link-template.php
 *
 * @param array $r Arguments.
 * @param bool $previous Optional. Whether to retrieve previous post.
 * @return array of post objects.
 */
function get_adjacent_post_plus($r, $previous = true ) {
	global $post, $wpdb;

	extract( $r, EXTR_SKIP );

	if ( empty( $post ) )
		return null;

//	Sanitize $order_by, since we are going to use it in the SQL query. Default to 'post_date'.
	if ( in_array($order_by, array('post_date', 'post_title', 'post_excerpt', 'post_name', 'post_modified')) ) {
		$order_format = '%s';
	} elseif ( in_array($order_by, array('ID', 'post_author', 'post_parent', 'menu_order', 'comment_count')) ) {
		$order_format = '%d';
	} elseif ( $order_by == 'custom' && $meta_key ) { // Don't allow a custom sort if meta_key is empty.
		$order_format = '%s';
	} else {
		$order_by = 'post_date';
		$order_format = '%s';
	}
	
//	Sanitize $order_2nd. Only columns containing unique values are allowed here. Default to 'post_date'.
	if ( in_array($order_2nd, array('post_date', 'post_title', 'post_modified')) ) {
		$order_format2 = '%s';
	} elseif ( in_array($order_2nd, array('ID')) ) {
		$order_format2 = '%d';
	} else {
		$order_2nd = 'post_date';
		$order_format2 = '%s';
	}
	
//	Sanitize num_results (non-integer or negative values trigger SQL errors)
	$num_results = intval($num_results);
	if ( $num_results < 0 )
		$num_results = 1;

//	Sorting on custom fields requires an extra table join
	if ( $order_by == 'custom' ) {
		$current_post = get_post_meta($post->ID, $meta_key, TRUE);
		$order_by = 'm.meta_value';
		$meta_join = " INNER JOIN $wpdb->postmeta AS m ON p.ID = m.post_id AND m.meta_key = \"$meta_key\"";
	} else {
		$current_post = $post->$order_by;
		$order_by = 'p.' . $order_by;
		$meta_join = '';
	}

//	Get the current post value for the second sort column
	$current_post2 = $post->$order_2nd;
	$order_2nd = 'p.' . $order_2nd;

//	Get the list of hierarchical taxonomies, including customs (don't assume taxonomy = 'category')
	$taxonomies = array_filter( get_post_taxonomies($post->ID), "is_taxonomy_hierarchical" );

//	Put this section in a do-while loop to enable the loop-to-first-post option
	do {
		$join = $meta_join . '';
		$posts_in_ex_cats_sql = '';
		$excluded_categories = $ex_cats;

		if ( $in_same_cat || !empty($excluded_categories) ) {
			$join .= " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";

			if ( $in_same_cat ) {
				$cat_array = wp_get_object_terms($post->ID, $taxonomies, array('fields' => 'ids'));
				$join .= " AND tt.taxonomy IN (\"" . implode('", "', $taxonomies) . "\") AND tt.term_id IN (" . implode(',', $cat_array) . ")";
			}

			$posts_in_ex_cats_sql = "AND tt.taxonomy IN (\"" . implode('", "', $taxonomies) . "\")";
			if ( !empty($excluded_categories) ) {
				$excluded_categories = array_map('intval', explode(' and ', $excluded_categories));
				if ( !empty($cat_array) ) {
					$excluded_categories = array_diff($excluded_categories, $cat_array);
					$posts_in_ex_cats_sql = '';
				}

				if ( !empty($excluded_categories) ) {
					$posts_in_ex_cats_sql = " AND tt.taxonomy IN (\"" . implode('", "', $taxonomies) . "\") AND tt.term_id NOT IN (" . implode($excluded_categories, ',') . ')';
				}
			}
		}

		$adjacent = $previous ? 'previous' : 'next';
		$order = $previous ? 'DESC' : 'ASC';
		$op = $previous ? '<' : '>';

//		If there is no next/previous post, loop back around to the first/last post.		
		if ( $loop && isset($result) ) {
			$op = $previous ? '>=' : '<=';
			$loop = false; // prevent an infinite loop if no first/last post is found
		}
		
		$join  = apply_filters( "get_{$adjacent}_post_join", $join, $in_same_cat, $excluded_categories );

//		In case the value in the $order_by column is not unique, select posts based on the $order_2nd column as well.
//		This prevents posts from being skipped when they have, for example, the same menu_order.
		$where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare("WHERE ( {$order_by} $op {$order_format} OR {$order_2nd} $op {$order_format2} AND {$order_by} = {$order_format} ) AND p.post_type = %s AND p.post_status = 'publish' $posts_in_ex_cats_sql", $current_post, $current_post2, $current_post, $post->post_type), $in_same_cat, $excluded_categories );

		$sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY {$order_by} $order, {$order_2nd} $order LIMIT {$num_results}" );

		$query = "SELECT DISTINCT p.* FROM $wpdb->posts AS p $join $where $sort";
		$query_key = 'adjacent_post_' . md5($query);
		$result = wp_cache_get($query_key);
		if ( false !== $result )
			return $result;

//		echo $query . '<br />';

//		Use get_results instead of get_row, in order to retrieve multiple adjacent posts (when $num_results > 1)
//		Add DISTINCT keyword to prevent posts in multiple categories from appearing more than once
		$result = $wpdb->get_results("SELECT DISTINCT p.* FROM $wpdb->posts AS p $join $where $sort");
		if ( null === $result )
			$result = '';

	} while ( !$result && $loop );

	wp_cache_set($query_key, $result);
	return $result;
}

/**
 * Display previous post link that is adjacent to the current post.
 *
 * Based on previous_post_link() from wp-includes/link-template.php
 *
 * @param array|string $args Optional. Override default arguments.
 * @return bool True if previous post link is found, otherwise false.
 */
function previous_post_link_plus($args = '') {
	return adjacent_post_link_plus($args, '&laquo; %link', true);
}

/**
 * Display next post link that is adjacent to the current post.
 *
 * Based on next_post_link() from wp-includes/link-template.php
 *
 * @param array|string $args Optional. Override default arguments.
 * @return bool True if next post link is found, otherwise false.
 */
function next_post_link_plus($args = '') {
	return adjacent_post_link_plus($args, '%link &raquo;', false);
}

/**
 * Display adjacent post link.
 *
 * Can be either next post link or previous.
 *
 * Based on adjacent_post_link() from wp-includes/link-template.php
 *
 * @param array|string $args Optional. Override default arguments.
 * @param bool $previous Optional, default is true. Whether display link to previous post.
 * @return bool True if next/previous post is found, otherwise false.
 */
function adjacent_post_link_plus($args = '', $format = '%link &raquo;', $previous = true) {
	$defaults = array(
		'order_by' => 'post_date', 'order_2nd' => 'post_date', 'meta_key' => '',
		'loop' => false, 'thumb' => false, 'max_length' => 9999,
		'format' => '', 'link' => '%title',
		'before' => '', 'after' => '',
		'in_same_cat' => false, 'ex_cats' => '',
		'num_results' => 1, 'echo' => true
	);

	$r = wp_parse_args( $args, $defaults );
	if ( !$r['format'] )
		$r['format'] = $format;

	if ( $previous && is_attachment() )
		$posts = & get_post($GLOBALS['post']->post_parent);
	else
		$posts = get_adjacent_post_plus($r, $previous);

//	If there is no next/previous post, return false so themes may conditionally display inactive link text.
	if ( !$posts ) {
		return false;
//	If echo is false, don't display anything. Themes can test the return value to see whether a link was found.
	} elseif ( !$r['echo'] ) {
		return true;
	}

	echo $r['before'];
	
//	When num_results > 1, multiple adjacent posts may be returned. Use foreach to display each adjacent post.
//	If sorting by date, display posts in reverse chronological order. Otherwise display in alpha/numeric order.
	if ( ($previous && $r['order_by'] != 'post_date') || (!$previous && $r['order_by'] == 'post_date') )
		$posts = array_reverse( $posts, true );
	foreach ( $posts as $post ) {
		$title = $post->post_title;
		if ( empty($post->post_title) )
			$title = $previous ? __('Previous Post') : __('Next Post');

		$title = apply_filters('the_title', $title, $post->ID);
	
//		Truncate the link title to nearest whole word under the length specified.
//		Preserve long title for use as anchor title attribute.
		$long_title = esc_attr($title);
		$max_length = intval($r['max_length']);
		if ( $max_length <= 0 )
			$max_length = 9999;
		if ( strlen($title) > $max_length )
			$title = substr( $title, 0, strrpos(substr($title, 0, $max_length), ' ') ) . '...';
	
		$date = mysql2date(get_option('date_format'), $post->post_date);
		$rel = $previous ? 'prev' : 'next';

		$string = '<a href="'.get_permalink($post).'" rel="'.$rel.'" title="'.$long_title.'">';
		$link = str_replace('%title', $title, $r['link']);
		$link = str_replace('%date', $date, $link);
		$link = $string . $link . '</a>';
	
		$format = str_replace('%link', $link, $r['format']);
		$format = str_replace('%date', $date, $format);
		
//		Output the category list, including custom taxonomies.
//		Don't do all of this unless the %category variable has been used.
		if ( strpos($format, '%category') !== false ) {
			$term_list = '';
			$taxonomies = array_filter( get_post_taxonomies($post->ID), "is_taxonomy_hierarchical" );
			foreach ( $taxonomies as &$taxonomy ) {
//				No, this is not a mistake. Yes, we are testing the result of the assignment ( = ).
//				We are doing it this way to stop it from appending a comma when there is no next term.
				if ( $next_term = get_the_term_list( $post->ID, $taxonomy, '', ', ', '') ) {
					$term_list .= $next_term;
					if ( current($taxonomies) ) $term_list .= ', ';
				}
			}
			$format = str_replace('%category', $term_list, $format);
		}
//		For those not using custom taxonomies, this code is a faster way of getting the categories
//		$format = str_replace('%category', get_the_category_list( ', ', '', $post->ID ), $format);

//		Optionally add the post thumbnail to the link. Wrap the link in a span to aid CSS styling.
		if ( $r['thumb'] && has_post_thumbnail($post->ID) ) {
			if ( $r['thumb'] === true ) // use 'post-thumbnail' as the default size
				$r['thumb'] = 'post-thumbnail';
			$thumbnail = '<a class="post-thumbnail" href="'.get_permalink($post).'" rel="'.$rel.'" title="'.$long_title.'">' . get_the_post_thumbnail( $post->ID, $r['thumb'] ) . '</a>';
			$format = $thumbnail . '<span class="post-link">' . $format . '</span>';
		}

//		If more than one link is returned, wrap them in <li> tags		
		if ( intval($r['num_results']) > 1 ) {
			$format = '<li>' . $format . '</li>';
		}
		
		$adjacent = $previous ? 'previous' : 'next';
		echo apply_filters( "{$adjacent}_post_link", $format, $link );
	}

	echo $r['after'];

	return true;
}
?>