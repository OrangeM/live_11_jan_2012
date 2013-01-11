       	<div id="sidebar" class="right">
        
        <div class="twoh">
			<?php // if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
                    
                    <li id="sections" class="widget"> 
    
                        <ul> 
                        <?php wp_list_categories('child_of=500&orderby=ID&title_li=<h2 class="blue-bg">' . __('Sections') . '</h2>' ); ?>
							
							<?php
                            foreach((get_the_category()) as $childcat) {
                            if (cat_is_ancestor_of(20, $childcat)) {
                            echo '<a href="'.get_category_link($childcat->cat_ID).'">';
                             echo $childcat->cat_name . '</a>';
                            }} ?>
                        

                   </li>
                   
                   <li id="out-of-office" class="widget">
                   
                        <h2 class="blue-bg">Out of Office</h2>
                        
                        <ul> 
                        
                        <?php rewind_posts(); ?>
                            <?php query_posts('category_name=out-of-office&posts_per_page=6'); 
    
                                if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                        
                        
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                                                      
                               
                                    <div class="entry">
                                        <?php the_excerpt(); ?>
                                    </div>
                            
                        <?php endwhile; ?>
                        <?php endif; ?>
    
    
                        </ul>             
                   </li>
                   
                   <li id="twitter" class="widget">
                   
                        <h2 class="blue-bg">Twitter</h2>
                            <p class="follow"> <a href="http://twitter.com/inqbase">Follow us</a> </p>
                        <ul>
							<?php
								$feedURL = "http://twitter.com/statuses/user_timeline/65293429.rss"; // change to your feed URL
								$doc = new DOMDocument();
								$doc->load($feedURL);
								$arrFeeds = array();
								foreach ($doc->getElementsByTagName('item') as $node) {
									$itemRSS = array ( 
										'title' => $node->getElementsByTagName('title')->item(0)->nodeValue
										);
									array_push($arrFeeds, $itemRSS);
								}
								$limit = 5;
								for($x=0;$x<$limit;$x++) {
									$title = str_replace('bavotasan: ', '', $arrFeeds[$x]['title']);
									$str = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\">\\0</a>", $title); 
									$pattern = '/[#|@][^\s]*/';
									preg_match_all($pattern, $str, $matches);	
								 
									foreach($matches[0] as $keyword) {
										$keyword = str_replace(")","",$keyword);
										$link = str_replace("#","%23",$keyword);
										$link = str_replace("@","",$keyword);
										if(strstr($keyword,"@")) {
											$search = "<a href=\"http://twitter.com/$link\">$keyword</a>";
										} else {
											$link = urlencode($link);
											$search = "<a href=\"http://twitter.com/#search?q=$link\" class=\"grey\">$keyword</a>";
										}
										$str = str_replace($keyword, $search, $str);
									}
									echo '<li class="twitter-entry">'.$str.'</li>';
									
								}
                            ?>

                        </ul>                        
                   </li>

            
            <?php //endif; ?> 
                     
        
        </div> <!-- div class twoh -->

		<div class="advertising">
fsdgfdghfdgsdfgdsdgsdfgsdg
        
        </div> <!--end advertising-->
        </div>