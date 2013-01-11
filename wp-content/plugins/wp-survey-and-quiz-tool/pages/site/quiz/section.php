<?php 
	if ($_SESSION['wpsqt']['current_step'] != -1) :
?>
<a name="test"></a><h1><?php echo $_SESSION['wpsqt'][$quizName]['quiz_sections'][$sectionKey]['name']; ?></h1>
<?php endif; 

$test_form_url = esc_url($_SERVER['REQUEST_URI']); 
$test_form_add_text = "#test";
if(strpos($test_form_url, $test_form_add_text) == FALSE)
{
	$test_form_url .= $test_form_add_text;
}
?>

<form method="post" action="<?php echo $test_form_url ?>"
<?php 
if ($_SESSION['wpsqt']['current_step'] == -1){
	echo ' style="display: inline;"';
}

 ?>
>
	<input type="hidden" name="wpsqt_nonce" value="<?php echo WPSQT_NONCE_CURRENT; ?>" />
	<input type="hidden" name="step" value="<?php echo ( $_SESSION['wpsqt']['current_step']+1); ?>">
<?php 
	if ($_SESSION['wpsqt']['current_step'] != -1) :
?>

	<ul class="wpst_questions">
<?php foreach ($_SESSION['wpsqt'][$quizName]['quiz_sections'][$sectionKey]['questions'] as $question) { ?>
	<li class="wpst_question">
		<?php 
			 echo stripslashes($question['text']);
		
			if ( !empty($question['additional']) ){
			?>
			<p><?php echo stripslashes($question['additional']); ?></p>
			<?php } ?>
		
		<?php if ($question['type'] != 'textarea' && isset($question['answers']) ){?>
			<ul>
			<?php foreach ( $question['answers'] as $answer ){ ?>
				<li>
					<input type="<?php echo ($question['type'] == 'single') ? 'radio' : 'checkbox'; ?>" name="answers[<?php echo $question['id']; ?>][]" value="<?php echo $answer['id']; ?>" id="answer_<?php echo $question['id']; ?>_<?php echo $answer['id'];?>"> <label for="answer_<?php echo $question['id']; ?>_<?php echo $answer['id'];?>"><?php echo stripslashes($answer['text']); ?></label> 
				</li>
			<?php } ?>
			</ul>
		<?php } else { ?>
		<p><textarea rows="6" cols="50" name="answers[<?php echo $question['id']; ?>][]"></textarea></p>
		<?php }?>	
	</li>
<?php } ?>
	</ul>
	<p><input type='submit' value='Next &raquo;' class='button-secondary' /></p>

<?php else: ?><a name="test"></a>
	<input type='submit' value='Start quiz' class='button-secondary' style='margin-left: 10px;' />
<?php endif; ?>

</form>
