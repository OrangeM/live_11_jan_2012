<?php 
/* 
Template Name:  The Directory Alphabet
*/ 
?>

<?php get_header(); ?>  
 
	<div id="container">
    <h1 class="blue-bg">The Directory</h1>
        
            <div class="separator-arrow"> <p><a href="<?php bloginfo('url')?>/the-directory-update">Not listed here, or are your details out of date? Let us know.</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?php bloginfo('url')?>/the-directory-update">Want to add the logo to your business profile? Click here</a></p></div>

		
        
        <div id="content-wrapper" class="directory" style="float:left;">
   			<div class="directory-menu">
                <ul id="alphabet">
                    <?php wp_list_pages('title_li=&child_of=11'); ?>
                </ul>
            </div> <!--directory menu-->

        <div id="content" role="main" class="directory">
               
			   <?php //query post to determin which page we are on and displaying the relevant category posts

				if ( is_page('215')) {    // #
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=number&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('a')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=a&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('b')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=b&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('c')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=c&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('d')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=d&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('e')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=e&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('f')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=f&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('g')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=g&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('h')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=h&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('i')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=i&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('j')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=j&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('k')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=k&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('l')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=l&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('m')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=m&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('n')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=n&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('o')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=o&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('p')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=p&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('q')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=q&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('r')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=r&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('s')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=s&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('t')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=t&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('u')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=u&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('v')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=v&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('w')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=w&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('y')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=y&orderby=title&order=asc&posts_per_page=100' ); }
				
				elseif ( is_page('z')) {	
					query_posts( 'post_type=the_directory&taxonomy=first-letter&term=z&orderby=title&order=asc&posts_per_page=100' ); }
				
				?>

<?php
$debut = 0; //The first article to be displayed
?>

					
				<?php 

				if (have_posts()) : 
            
					
					while (have_posts()) : the_post(); ?>
                    
            		
                    
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                        	<div class="post-wrapper">
                                     
                            	<div class="directory_logo"> 
                                       
									<?php if (get_post_meta($post->ID, business_logo, true)) { ?>
                                            <a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, business_logo, true); ?>" height="150" width="150" style="padding:5px 5px 0;" alt="<?php the_title(); ?>" /></a>
                                    <?php } 
                                            else { ?> <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/directory/business-logo.png" height="155" width="160" alt="<?php the_title(); ?>" /></a>
                                    <?php } ?> 
								
                                </div> <!--end directory logo-->
                            	
                                
                                <div class="post-footer">
                                	
                                    <div class="post-footer-wrapper">
                                        <p class="business-name"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                        <?php if (get_post_meta($post->ID, 'Phone', true)) { ?>
                                                <p class="phone"><span class="blue-link"><strong>P</strong>&nbsp;&nbsp;</span><?php echo get_post_meta($post->ID, 'Phone', true); ?></span></p>
                                        <?php } ?>
                                        
                                	</div> <!-- post-footer-wrapper-->
                                
                                </div> <!--end post-footer-->
                                
                            </div><!--end post-wrapper-->
                                
            
                        </div> <!--end post-->
            
                    <?php endwhile; ?>
            
                <?php else : ?>
            
                    <p class="center">There are no businesses filed under this letter.</p>
            
                <?php endif; ?>
                
			
        </div> <!--end content-->   
        
        </div>    <!--end content-wrapper --> 		
        
		<?php get_sidebar(directory); ?>
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>