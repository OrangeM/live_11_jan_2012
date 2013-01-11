		<div id="position-<?php post_position(); ?>" class="threadwrap clearfix">
			<span class="postposition"><?php post_position(); ?></span>
            <?php if($topic->forum_id != BLIND_FORUM) : ?>
            
            <div class="threadauthor">
				<?php post_author_avatar_link(); ?>
			</div>
			<?php else: ?>
            <div class="threadauthor">
				<img style="height: 48px; width: 48px;" class="photo avatar avatar-48" src="http://www.gravatar.com/avatar/d1e1b52f871131c9ffacfd3854fc55b5?s=48&amp;d=http%3A%2F%2Fwww.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D48&amp;r=g" alt="">			</div>
           	<?php endif; ?>
            
            <div class="threadpost ">
            <a name="<?php post_anchor_link(); ?>"></a>
            	
             <?php if($topic->forum_id != BLIND_FORUM) : ?>    
                <div class="authormeta"><?php post_author_link(); ?> on <?php
$bb_post = bb_get_post( get_post_id( $args['id'] ) );
$offset = $bb->gmt_offset;
$time = date('j F Y', strtotime($bb_post->post_time.'+'.$offset.'hours'));
 printf( __('%s'), $time); ?></div>			

                <!--<div class="authormeta"><?php post_author_link(); ?> on <?php printf( __('%s'), bb_get_post_time('d/m/Y \a\t g:i a') ); ?></div>-->
            <?php else: ?>    
             	
             	<div class="authormeta">Posted on <?php printf( __('%s'), bb_get_post_time('j F Y') ); ?></div>                   
<!--                <div class="authormeta">Posted on <?php printf( __('%s'), bb_get_post_time('d/m/Y \a\t g:i a') ); ?></div>   
-->                
                
			<?php endif; ?>
                
                
                <div class="post"><?php post_text(); ?></div>
				<div class="poststuff"> <?php bb_post_admin(); ?></div>
			</div>
		</div>