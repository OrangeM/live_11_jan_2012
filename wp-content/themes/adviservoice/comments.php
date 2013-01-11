<?php

global $current_user;
get_currentuserinfo();

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) {
		echo 'This post is password protected. Enter the password to view comments.';
		return;
	}
	?>


	<?php 
	$commentcount = 1; // number of first comment

	if ( have_comments() ) : ?>
		<h3 class="blue-bg" id="comments"><?php comments_number('0 comments', '1 comment', '% comments' );?></h3>
		 
			<ul class="commentlist">
			<?php wp_list_comments('type=comment&avatar_size=40&reply_text=Reply to this Entry&callback=mytheme_comment'); //this calls the custom function in functions.php ?>
			</ul>
		 
		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link() ?></div>
			<div class="alignright"><?php next_comments_link() ?></div>
		</div>
		
	<? endif; 
	
	if($current_user->ID > 0)
	{
	
		?>
			
			
			
			<?php if ($post->comment_status == 'open') : ?>
				<p class="comments-status">Add your comment below</p>
			
			<?php else : ?>
			
				<?php if (get_post_meta($post->ID, 'Link to forum', true)) { ?>
					<div class="link_to_forum">
						<a href="<?php echo get_post_meta($post->ID, 'Link to forum', true); ?>"> Follow this discussion on the forums </a>
					</div>
				<?php } ?> 
	
			<?php endif; ?>
			
	
		<?php 
			comment_form(array(
			'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="70" rows="12" aria-required="true"></textarea></p>',
			'comment_notes_before'=>'<p class="comment-notes">'.'Please provide the details below - if you are not a member - to post your comment.'. '<span style="color:#c00;"> Fields marked in red are required.</span>'. '<br />'.'<strong>Note</strong> Your email address will not be published. '. '<a href="http://www.adviservoice.com/join">Not a Member? Join AdviserVoice</a>'.'</p>',
				'comment_notes_after'  => '',
		));

	}
	else
	{
		printf(__('<p class="logged-in-as">You must be <a href="%s" title="Log in">logged in</a> to post or view comments.</p>', 'thematic'),	get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() );
	}

?>


