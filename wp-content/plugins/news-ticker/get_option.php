<?php

function get_option( $option, $default = false ) 
{
//	echo 'hello from get_option.php';
	global $bbdb;
	
	$row = $bbdb->get_row( $bbdb->prepare( "SELECT option_value FROM wp_options WHERE option_name = %s LIMIT 1", $option ) );
	if ( is_object($row))
{
		$value = $row->option_value;
}
	else
{
		return $default;
}
	return $value;
}
function update_option($option, $newvalue)
{
	$result = false;
}

function wp_get_post_categories( $post_id = 0, $args = array() ) {
	return array();
}

function get_posts($args = null) {
	global $bbdb;
	        $defaults = array(
	                'numberposts' => 5, 'offset' => 0,
	                'category' => 0, 'orderby' => 'post_date',
	                'order' => 'DESC', 'include' => array(),
	                'exclude' => array(), 'meta_key' => '',
	                'meta_value' =>'', 'post_type' => 'post',
	                'suppress_filters' => true
	        );
	        $r = wp_parse_args( $args, $defaults );
	        if ( empty( $r['post_status'] ) )
	                $r['post_status'] = ( 'attachment' == $r['post_type'] ) ? 'inherit' : 'publish';
	        if ( ! empty($r['numberposts']) && empty($r['posts_per_page']) )
	                $r['posts_per_page'] = $r['numberposts'];
	        if ( ! empty($r['category']) )
	                $r['cat'] = $r['category'];
	        if ( ! empty($r['include']) ) {
	                $incposts = wp_parse_id_list( $r['include'] );
	                $r['posts_per_page'] = count($incposts);  // only the number of posts included
	                $r['post__in'] = $incposts;
	        } elseif ( ! empty($r['exclude']) )
	                $r['post__not_in'] = wp_parse_id_list( $r['exclude'] );
	
	        $r['ignore_sticky_posts'] = true;
	        $r['no_found_rows'] = true;
	
	     //   $get_posts = new WP_Query;
	     //   return $get_posts->query($r);
                
               $where = " WHERE post_status = '".$r['post_status'] ."' AND post_type= '".$r['post_type']."' ";
               if (isset($r['post__in']))
			$where .= " AND ID in (" . $r['post__in']. ") ";
 		 $orderby = " Order By ".$r['orderby']." ".$r['order'];
		 $limit = " LIMIT ".$r['offset']." , ";
		 if ($r['posts_per_page'] != TICKER_MAX_INT)
			$limit .= $r['posts_per_page'];
		else 
			$limit .= '5';
		
		 $query = "SELECT * FROM wp_posts ".$where.$orderby.$limit;
		 $result = $bbdb->get_results($query);
		 //echo $query;
		 //print_r($result);
		return $result;
//		return array();	
	}
?>