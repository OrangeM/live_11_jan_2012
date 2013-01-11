<?php if ( !bb_is_topic() ) :
	$title_max_char = 50;
?>
<script language="javascript" type="text/javascript">

	jQuery(function()
	{
		var topic = jQuery('#topic')[0];
		var titleChars = jQuery('#title-chars-left')[0];
		limitText(topic, titleChars);
		jQuery('#topic').keydown(function(){limitText(topic, titleChars);});
		jQuery('#topic').keypress(function(){limitText(topic, titleChars);});
		jQuery('#topic').keyup(function(){limitText(topic, titleChars);});

	});
	function limitText(limitField, limitCount) {
		limitCount.innerHTML = <?php echo $title_max_char ?>- limitField.value.length;
	}

</script>

<p id="post-form-title-container">
	<label for="topic"><?php _e('Topic Title&nbsp;&nbsp;'); ?>
		<input name="topic" type="text" id="topic" size="80" maxlength="50" tabindex="1" />
	</label>
</p>
<p>Title should be not more than <?php echo $title_max_char ?> characters<br>
Left: <span id="title-chars-left"><?php echo $title_max_char ?></span></p>
</p>
<?php endif; do_action( 'post_form_pre_post' ); ?>
<p id="post-form-post-container">
	<label for="post_content"><?php // _e('Reply to this discussion'); ?>
		<textarea name="post_content" cols="86" rows="8" id="post_content" tabindex="3"></textarea>
	</label>
</p>

<?php if ( bb_is_tag() || bb_is_front() ) : ?>
<p id="post-form-forum-container">
	<label for="forum-id"><?php _e('Forum'); ?>
		<?php bb_new_topic_forum_dropdown(); ?>
	</label>
</p>
<?php endif; ?>
<p id="post-form-submit-container" class="submit">
  <input type="submit" id="postformsub" name="Submit" value="<?php echo esc_attr__( 'Post' ); ?>" tabindex="4" />
</p>