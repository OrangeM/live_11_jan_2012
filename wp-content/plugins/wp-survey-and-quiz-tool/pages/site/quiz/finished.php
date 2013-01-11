<a name="test"></a><h2>Exam Finished</h2>
<?php if ($_SESSION['wpsqt'][$quizName]['quiz_details']['display_result'] == 'no' && $_SESSION['wpsqt'][$quizName]['quiz_details']['display_review'] == 'no' ) { ?>
Review the article before trying again. All answers must be correct to pass.
<?php } elseif ($canAutoMark !== true) { ?>
Can't auto mark this.
<?php } elseif ($_SESSION['wpsqt'][$quizName]['quiz_details']['display_result'] == 'yes') { 
	if ($_SESSION['wpsqt'][$quizName]['quiz_details']['success']) {?> 
You got <?php echo $correctAnswers; ?> points out of a total <?php echo $totalPoints; ?>. Congratulations you have passed. Your CPD points will be emailed to you.
<?php 
	} else {?>
		You got <?php echo $correctAnswers; ?> points out of a total <?php echo $totalPoints; ?>. Please try again to pass the quiz.
		<?php 		
	}
} elseif ($_SESSION['wpsqt'][$quizName]['quiz_details']['display_review'] == 'yes'){ 
	require_once wpsqt_page_display('site/quiz/review.php');	
} ?>