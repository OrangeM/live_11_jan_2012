       	<div id="sidebar" class="right">
        
        <div class="archive">
                    
               	 <li id="elsewhere" class="widget"><h2 class="blue-bg">Also on AdviserVoice</h2> 
            
           	 <div class="separator-arrow"></div>
                        <ul> 
                        
						<?php 
                            $recent = new WP_Query(); 
                            $recent -> query('showposts=10&cat=-534'); 
                            while($recent -> have_posts()) : $recent -> the_post(); 
                        ?> 
                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li> 
                        <?php endwhile; ?> 
                        
                        </ul>
                        
                   </li>
                   
                                 
        
        </div> <!-- div class twoh -->

        </div>