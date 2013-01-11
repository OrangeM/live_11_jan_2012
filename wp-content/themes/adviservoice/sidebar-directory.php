       	<div id="sidebar" class="right">
        
        <div class="directory">
			<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
            		
        		<img src="<?php bloginfo('template_directory') ?>/images/global/advertising/tile250.png" style="margin-bottom:10px;"  /> 
                    
                    <li id="sections" class="widget"> 
    
                        <ul> 
                        	<h2 class="blue-bg">Categories</h2>
                        							<?php 
                            //list terms in a given taxonomy using wp_list_categories
                            
                            $taxonomy     = 'filed-under';
                            $orderby      = 'name'; 
                            $show_count   = 0;      // 1 for yes, 0 for no
                            $pad_counts   = 0;      // 1 for yes, 0 for no
                            $hierarchical = 1;      // 1 for yes, 0 for no
                            $title        = '';
                            
                            $args = array(
                              'taxonomy'     => $taxonomy,
                              'orderby'      => $orderby,
                              'show_count'   => $show_count,
                              'pad_counts'   => $pad_counts,
                              'hierarchical' => $hierarchical,
                              'title_li'     => $title
                            );
                            ?>
                            
                            <ul>
                            <?php wp_list_categories( $args ); ?>
                            </ul>
                        </ul>
                        
                   </li>
                   
            
            <?php // endif; ?> 
                     
        
        </div> <!-- end directory -->

        </div>