<?php
/**
 * Contains all the function logic required
 * 
 * @author Iain Cambridge
 */


/**
 * Shows form to allow user to create a new quiz or
 * just edit an old one. Does simple validation to 
 * ensure required fields are provided and if are 
 * select input area ensure that they are the correct
 * value.
 * 
 * @param boolean $edit Tells us if it's an quiz being edited or created.
 * 
 * @uses pages/admin/quiz/create.php
 * @uses wpdb
 * 
 * @since 1.0
 */
function wpsqt_admin_quiz_form($edit = false){
	
	global $wpdb;	
		
	$errorArray = array();	
	
	if (  $_SERVER["REQUEST_METHOD"] == "POST"  ){
	
		wpsqt_nonce_check();
		
		// Check quiz name
		if ( !isset($_POST['quiz_name']) || empty($_POST['quiz_name']) ){
			$errorArray[] = 'Quiz name can\'t be empty.';		
		}
		
		// Check status
		if ( !isset($_POST['status']) || empty($_POST['status']) ){
			$errorArray[] = 'Status can\'t be empty';
		}
		elseif ( $_POST['status'] != 'enabled' && $_POST['status'] != 'disabled'){
			$errorArray = 'Status isn\'t an acceptable value';
		}
		
		// Check notification type
		if ( !isset($_POST['notification_type']) || empty($_POST['notification_type']) ){
			$errorArray[] = 'Notification type can\'t be empty';
		}
		elseif ( $_POST['notification_type'] != 'none' &&  $_POST['notification_type'] != 'instant' 
			 &&  $_POST['notification_type'] != 'instant-100' &&  $_POST['notification_type'] != 'instant-75'  
			 &&  $_POST['notification_type'] != 'instant-50'
			 &&  $_POST['notification_type'] != 'daily' &&  $_POST['notification_type'] != 'hourly' ){
			$errorArray[] = 'Notification type isn\'t an acceptable value';
		}
				
		// Check display result
		if ( !isset($_POST['display_result']) || empty($_POST['display_result']) ){
			$errorArray[] = 'Display result on completetion can\'t be empty';
		}
		elseif ( $_POST['display_result'] != 'yes' && $_POST['display_result'] != 'no' ){
			$errorArray[] = 'Display result isn\'t an acceptable value';
		}
				
		// Check display result
		if ( !isset($_POST['display_review']) || empty($_POST['display_review']) ){
			$errorArray[] = 'Display result on completetion can\'t be empty';
		}
		elseif ( $_POST['display_review'] != 'yes' && $_POST['display_review'] != 'no' ){
			$errorArray[] = 'Display review isn\'t an acceptable value';
		}
	
		// Check display result
		if ( !isset($_POST['take_details']) || empty($_POST['take_details']) ){
				$errorArray[] = 'Take details can\'t be empty';
		}
		elseif ( $_POST['take_details'] != 'yes' && $_POST['take_details'] != 'no' ){
			$errorArray[] = 'Take details isn\'t an acceptable value';
		}
		
		if ( !isset($_POST['limit_one']) || empty($_POST['limit_one']) ){
			$errorArray[] = 'Take details can\'t be empty';
		}
		elseif ( $_POST['limit_one'] != 'yes' && $_POST['limit_one'] != 'no' ){
			$errorArray[] = 'Take details isn\'t an acceptable value';
		}	
		
		// Check display result
		if ( !isset($_POST['use_wp_user']) || empty($_POST['use_wp_user']) ){
			$errorArray[] = 'Use Wordpress User Details can\'t be empty';
		}
		elseif ( $_POST['use_wp_user'] != 'yes' && $_POST['use_wp_user'] != 'no' ){
			$errorArray[] = 'Use Wordpress User Details isn\'t an acceptable value';
		}
				
	}
	
	if ( !empty($_POST) && empty($errorArray) ){
		if ( $edit == false ){			
			$wpdb->query($wpdb->prepare('INSERT INTO '.WPSQT_QUIZ_TABLE.' (name,display_result,display_review,status,notification_type,take_details,use_wp_user,email_template,limit_one)  VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)',
									  array($_POST['quiz_name'],$_POST['display_result'],$_POST['display_review'],$_POST['status'],$_POST['notification_type'],$_POST['take_details'],$_POST['use_wp_user'], $_POST['email_template'], $_POST['limit_one'] )));

			$quizId = $wpdb->insert_id;
			$successMessage = 'Quiz inserted! Next step is to add some sections. <a href="'.WPSQT_URL_MAIN.'&type=quiz&action=sections&id='.$quizId.'">Click here</a> to move onto that step.';
		} else{			
			
			
			$query = "UPDATE ".WPSQT_QUIZ_TABLE." SET name='%s',display_result='%s',display_review='%s',status='%s',notification_type='%s',take_details='%s',use_wp_user='%s',email_template='%s',limit_one='%s' WHERE id='%d'";
			$query_data = array($_POST['quiz_name'], $_POST['display_result'], $_POST['display_review'], $_POST['status'], $_POST['notification_type'], $_POST['take_details'], $_POST['use_wp_user'], $_POST['email_template'], $_POST['limit_one'], $_GET['id']);
			$wpdb->query(vsprintf($query, $query_data));
			
			//$wpdb->query("UPDATE ".WPSQT_QUIZ_TABLE." SET name='".$_POST['quiz_name']."',display_result='".$_POST['display_result']."',display_review='".$_POST['display_review']."',status='".$_POST['status']."',notification_type='".$_POST['notification_type']."',take_details='".$_POST['take_details']."',use_wp_user='".$_POST['use_wp_user']."',email_template='".$_POST['email_template']."',limit_one='".$_POST['limit_one']."' WHERE id='".$_GET['id']."'");
									
			$successMessage = 'Quiz updated';
		}
		
		if ( $_POST['notification_type'] != 'instant' ){			
			$functionName = ( $_POST['notification_type'] == 'hourly' ) ? 'hourly_mail' : 'daily_mail' ;			
			wp_schedule_event(time(), $_POST['notification_type'] , $functionName);
		}
	}	
	
	if ( $edit == true && ctype_digit($_GET['id']) ){
		$quizId = (int) $_GET['id'];
		$quizDetails = $wpdb->get_row('SELECT name,display_result,display_review,status,notification_type,take_details,use_wp_user,email_template,limit_one FROM '.WPSQT_QUIZ_TABLE.' WHERE id = '.$quizId, ARRAY_A);
	}

	require_once wpsqt_page_display('admin/quiz/create.php');
	return;								  
}

/**
 * Displays a list of quiz/survey's in the system.
 * With links to configure, edit questions and 
 * delete. Display's the quiz/survey's status and
 * type (if it's a quiz or a survey).
 * 
 * @uses pages/admin/quiz/index.php
 * @uses includes/functions.php
 * 
 * @since 1.0
 */

function wpsqt_admin_quiz_list(){
	
	global $wpdb;
	
	require_once WPSQT_DIR.'/includes/functions.php';
	
	$itemsPerPage = get_option('wpsqt_number_of_items');
	$currentPage = wpsqt_functions_pagenation_pagenumber();	
	$startNumber = ( ($currentPage - 1) * $itemsPerPage );	
	
	$rawQuizList = $wpdb->get_results( 'SELECT id,name,status FROM '.WPSQT_QUIZ_TABLE.' ORDER BY id' , ARRAY_A );
	$quizList = array_slice($rawQuizList , $startNumber , $itemsPerPage );
	$numberOfItems = sizeof($rawQuizList);
	$numberOfPages = wpsqt_functions_pagenation_pagecount($numberOfItems, $itemsPerPage);

	require_once wpsqt_page_display('admin/quiz/index.php');
}

/**
 * Shows form to allow users to create and manage sections.
 * Requires $_GET['quizid'] if not present or valid datatype
 * redirects to quiz list. Also processes data ensuring valid
 * and correct datatype. On inserting to the database, it 1st
 * deletes all previous entries and then inserts all the new 
 * ones. (Proably a better way of doing that)
 * 
 * @uses wpdb
 * @uses pages/admin/quiz/sections.php
 * @uses includes/functions.php
 * 
 * @since 1.0
 */

function wpsqt_admin_quiz_sections(){
	
	global $wpdb;
	
	// Ensure we have a quiz id otherwise return to quiz list.
	if ( !isset($_GET['id']) || !ctype_digit($_GET['id']) ){	
		require_once WPSQT_DIR.'/includes/functions.php';
		$redirectUrl = wpsqt_functions_generate_uri( array('page','action') );
		$redirectUrl .= '&page='.WPSQT_PAGE_QUIZ; 
	}
	else {		
		if (  $_SERVER["REQUEST_METHOD"] == "POST"  ){		
	
			wpsqt_nonce_check();	
			
			$validData = array();
		    
			for ( $i = 0; $i < sizeof($_POST['section_name']); $i++ ){
				// Bye Bye massive IF statement, hello bunch of small IF statements.
		    	if (
		    	  // Make sure we have all the data required. 
		    	  // Which now is just the name.
		    		 !isset($_POST['section_name'][$i]) || empty($_POST['section_name'][$i])		    	  
		    	 ){
		    	  	$status = 'delete';
		    	 } else {
		    	 	$status = 'input';
		    	 }
		    	 
		    	 $orderBy[$i] = (isset($_POST['order'][$i])) && !empty($_POST['order'][$i]) ? $_POST['order'][$i] : 'ASC';
		    	 $number[$i] = (isset($_POST['number'][$i]) && !empty($_POST['number'][$i])) ? $_POST['number'][$i] : 0;
		    	 $sectionType[$i] = (isset($_POST['type'][$i]) && !empty($_POST['type'][$i])) ? $_POST['type'][$i] : 'multiple';
		    	 $difficulty[$i] = (isset($_POST['difficulty'][$i]) && !empty($_POST['difficulty'][$i])) ? $_POST['difficulty'][$i] : 'medium';
		    	 
		    	 $sectionId = (isset($_POST['sectionid'][$i])) ? intval($_POST['sectionid'][$i]) : NULL;
		    	 // All that, just for this...
		    	 $validData[] = array( 'name'       => $_POST['section_name'][$i],
		    	 					   'difficulty' => $difficulty[$i],
		    	 					   'number'     => $number[$i],
		    	 					   'type'       => $sectionType[$i],
		    	 					   'order'      => $orderBy[$i],
		    						   'id'         => $sectionId,
		    	 					   'status'     => $status );
		    }
		    
			if ( !empty($validData) ){
				
		    	// Generate SQL query
			    $insertSql = 'INSERT INTO `'.WPSQT_SECTION_TABLE.'` (`quizid`,`name`,`type`,`number`,`difficulty`,`orderby`) VALUES ';
			    $insertSqlParts = array();
			    $insert = false;	
			    
				foreach ($validData as $key => $data) {
					
				    if ( $data['status'] == 'input' ){
				    	// OMG so hacky! :'(
				    	
				    	if ( isset($data['id']) && !empty($data['id']) ){
				    		// Updates as is a current secton
				    		$wpdb->query( $wpdb->prepare('UPDATE '.WPSQT_SECTION_TABLE.'
				    									  SET name=%s,
				    									  type=%s,
				    									  number=%d,
				    									  difficulty=%s,
				    									  orderby=%s 
				    									  WHERE id = %d',
				    		array($data['name'],$data['type'],$data['number'],$data['difficulty'],$data['order'],$data['id'])) );
				    		continue;
				    	} 
				    	// New section therefore insert
				    	// turns the insert flag to true.
				    	$insert = true;	
					    $insertSqlParts[] = "(". $wpdb->escape($_GET['id']) .",'".
					    						 $wpdb->escape($data['name']) ."','".
					    					     $wpdb->escape($data['type']) ."','".
					    					     $wpdb->escape($data['number']) ."','".
					    					     $wpdb->escape($data['difficulty']) ."','".
					    					     $wpdb->escape($data['order']) ."')";
				    } else {
				    	// Delete it and questions related to it.
				    	if ( isset($data['id']) ){			    		
				    		$wpdb->query('DELETE FROM '.WPSQT_SECTION_TABLE.' WHERE id = '.$data['id']);
				    		$wpdb->query('DELETE FROM '.WPSQT_QUESTION_TABLE.' WHERE sectionid = '.$data['id']);			    		
				    	}
			   		}						
			    } 
			
			    if ( $insert == true ){
			    	$insertSql .= implode(',',$insertSqlParts);
			    	$wpdb->query($insertSql);
			    }

			    $successMessage = 'Sections updated!';
		    }
		    	    
		}	
			
		$validData = $wpdb->get_results('SELECT id,name,type,number,difficulty,orderby
										 FROM '.WPSQT_SECTION_TABLE.'
										 WHERE quizid = '.$wpdb->escape($_GET['id'])
										 , ARRAY_A );

		if ( isset($successMessage) && empty($validData) ){			
			    $successMessage = 'Sections deleted!';
		}								 
	}

	require_once wpsqt_page_display('admin/quiz/sections.php');
	
}


/**
 * Deletes a quiz from the database, including
 * all related sections and questions. 
 * 
 * @uses pages/admin/quiz/delete.php
 * @uses pages/general/message.php
 * @uses pages/general/error.php
 * @uses wpdb
 * 
 * @since 1.0
 */

function wpsqt_admin_quiz_delete(){
	
	global $wpdb;

	if ( !isset($_GET['id']) || !ctype_digit($_GET['id']) ){
		require_once wpsqt_page_display('general/error.php');
		return;
	}
	$quizId = (int) $_GET['id'];
	
	if (  $_SERVER["REQUEST_METHOD"] !== "POST"  ){
		// Make sure they mean it.
		$quizName = $wpdb->get_var('SELECT name FROM '.WPSQT_QUIZ_TABLE.' WHERE id = '.$quizId);
		require_once wpsqt_page_display('admin/quiz/delete.php');
		return;	
	}
	elseif ( isset($_POST['confirm']) && $_POST['confirm'] == 'Yes' ){
			
		wpsqt_nonce_check();
		
		$wpdb->query('DELETE FROM '.WPSQT_QUIZ_TABLE.' WHERE id = '.$quizId);
		$wpdb->query('DELETE FROM '.WPSQT_QUESTION_TABLE.' WHERE quizid = '.$quizId);
		$wpdb->query('DELETE FROM '.WPSQT_SECTION_TABLE.' WHERE quizid = '.$quizId);
		
		$message = 'Quiz deleted successfully!';
		require_once wpsqt_page_display('general/message.php');
	}
	else {		
		require_once wpsqt_page_display('general/error.php');
	}
	
}

/**
 * Handles the adding of new questions. If post is not empty it 
 * sanatizes the question text and answer texts if the question
 * is not a textarea question. Checks to see if it has the correct
 * number of questions are inputted. 
 * 
 * @uses pages/admin/questions/form.php
 * @uses wpdb
 * 
 * @since 1.0
 */

function wpsqt_admin_questions_addnew(){
	
	global $wpdb;
	
	if ( !isset($_GET['id']) || !ctype_digit($_GET['id']) ){
		$message = 'No quizid provided.';
		require_once wpsqt_page_display('general/message.php');
		return;
	}
	
	//
	$questionText  = '';
	$questionHint  = '';
	$questionValue = 1;
	$questionAdditional = '';
	$questionDifficulty = 'medium';
	$quizId = (int) $_GET['id'];
	
	$sections = $wpdb->get_results('SELECT id,name FROM '.WPSQT_SECTION_TABLE.' WHERE quizid = '.$quizId,ARRAY_A);
		
	if (  $_SERVER["REQUEST_METHOD"] == "POST" ){ // Get request so no processing required.	
		
		$questionText       = trim( stripslashes($_POST['question']) );
		$questionType       = trim( stripslashes($_POST['type']) );
		$questionAdditional = trim( stripslashes($_POST['additional'])) ;
		$questionHint       = trim( stripslashes($_POST['hint']) );
		$questionDifficulty = trim( stripslashes($_POST['difficulty']) );
		$questionValue      = (double) $_POST['points'];
		$quizId             = (int) $_GET['id'];
		$sectionId          = (isset($_POST['section'])) ? intval($_POST['section']) : 0;
		$errrorArray = array();
		
		if ( empty($questionText) ){
			$errorArray[] = 'Need a question to ask';
		}	
			
		if ( empty($sectionId) || $sectionId == 0 ){				
			$errorArray[] = 'A question has to be assigned to a section!';			
		}
		
		$correctCount = 0;
		$sectionType = 'textarea';
		// Run though multiple choice answers
		if ($questionType == "single" || $questionType == "multiple"){	
			$answers = array();
			$sectionType = 'multiple';
			
			if ( sizeof($_POST['answer']) == 0){
				$errorArray[] = 'Need at least one answer';
			}
			else{
				// Actual answers to process
				for ( $i = 0; $i < sizeof($_POST['answer']); $i++){	
					$answerText = trim($_POST['answer'][$i]);	
					$answerCorrect = trim($_POST['correct'][$i]);					
					if ( !empty($answerText) && !empty($answerCorrect) ){
						$answers[] = array('text'    => $answerText,
											'correct' => $answerCorrect );
						if ($_POST['correct'][$i] == 'yes'){
							$correctCount++;
						}	
					}
				}
			}
			
			if ( $questionValue < 0.25 || $questionValue > 5 ){
				$errorArray[] = 'Question value is incorrect';				
			}
		
			if ( $correctCount == 0 ){
				$errorArray[] = 'Need at least one correct answer';
			}
			
			if ( $correctCount > 1 && $questionType == "single"){
				$errorArray[] = 'Can only have one valid answer for this type of question';
			}

		}
		
		if ( empty($errorArray) ){			
			
			if ($_REQUEST['action'] == 'question-add'){
				$wpdb->query( $wpdb->prepare('INSERT INTO '.WPSQT_QUESTION_TABLE.' (text,type,additional,value,quizid,hint,difficulty,section_type,sectionid) VALUES (%s, %s, %s, %f,%d,%s,%s,%s,%d)', 
											 array($questionText,$questionType,$questionAdditional,$questionValue,$quizId,$questionHint,$questionDifficulty,$sectionType,$sectionId)) );
				$questionId = $wpdb->insert_id;				
				$successMessage = 'Successfully added question!';	
			 	// Nasty quick hack. :( My bad
				$questionText  = '';
				$questionHint  = '';
				$questionValue = 1;
				$questionAdditional = '';
				$questionDifficulty = 'medium';
				$quizId = (int) $_GET['id'];	
			}
			elseif ( $_REQUEST['action'] == 'question-edit' ) {
				// To get here it must have been called via fptest_questions_edit() 
				// where a check on $_GET['id'] would have been done already.
				$questionId = (int) $_GET['questionid'];	
				
			 	$wpdb->query( $wpdb->prepare('UPDATE '.WPSQT_QUESTION_TABLE.' SET text=%s,type=%s,value=%f,hint=%s,difficulty=%s,additional=%s,sectionid=%d WHERE id = %d',
			 								 array($questionText,$questionType,$questionValue,$questionHint,$questionDifficulty,$questionAdditional,$sectionId,$questionId) ) );
			 								 
				$wpdb->query( 'DELETE FROM '.WPSQT_ANSWER_TABLE.' WHERE questionid = '.$questionId );
				
			 	$successMessage = 'Successfully edited question!';
			}
			
			$successMessage .= ' <a href="'.WPSQT_URL_MAIN.'&type=quiz&action=questions&id='.$quizId.'">Go back to question list</a>';
				
			// use post type since for new questions $questionType is unset already.
			if ($_POST['type'] == "single" || $_POST['type'] == "multiple"){
				// Both add and edit use this.			
				$insertAnswersSql = 'INSERT INTO '.WPSQT_ANSWER_TABLE.' (questionid,text,correct) VALUES ';
				if ( $correctCount != 0){
					$escapedQueries = array();		
					foreach ($answers as $answer){			
						$escapedQueries[] = "(".$questionId.",'".$wpdb->escape($answer['text'])."','".$wpdb->escape($answer['correct'])."')";			
					}		
				}			
				$insertAnswersSql .= implode(',',$escapedQueries);
				
				$wpdb->query($insertAnswersSql);
			}
			// Clean out the variables if it's a new question
			if ($_REQUEST['action'] == 'addnew'){
				$questionText = '';
				$questionType = '';
				unset($answers);
			}
		}
		
	}	
	require_once wpsqt_page_display('admin/questions/form.php');
	return;	
}

/**
 * Lists out the questions that are in the database. With links
 * to edit and delete questions.
 * 
 * @uses pages/admin/questions/index.php
 * @uses includes/functions.php
 * 
 * @since 1.0
 */
function wpsqt_admin_questions_show_list(){
	
	global $wpdb;
	
	require_once WPSQT_DIR.'/includes/functions.php';
	
	$itemsPerPage = get_option('wpsqt_number_of_items');
	$currentPage = wpsqt_functions_pagenation_pagenumber();	
	$startNumber = ( ($currentPage - 1) * $itemsPerPage );	
	if ( !isset($_GET['id']) || !ctype_digit($_GET['id']) ){
		$rawQuestions = $wpdb->get_results('SELECT id,text,type,quizid FROM '.WPSQT_QUESTION_TABLE.' ORDER BY id ASC', ARRAY_A);
	} else {
		$rawQuestions = $wpdb->get_results('SELECT id,text,type,quizid FROM '.WPSQT_QUESTION_TABLE.' WHERE quizid = '.$wpdb->escape($_GET['id']).' ORDER BY id ASC', ARRAY_A);
	}
	$questions = array_slice($rawQuestions , $startNumber , $itemsPerPage );
	$numberOfItems = sizeof($rawQuestions);
	$numberOfPages = wpsqt_functions_pagenation_pagecount($numberOfItems, $itemsPerPage);

	require_once wpsqt_page_display('admin/questions/index.php');
	return;	
	
}

/**
 * Handles the editing of questions. Offloads the processing
 * of form data to wpsqt_admin_questions_addnew().
 * 
 * @uses pages/admin/questions/form.php
 * @uses wpdb
 * 
 * @since 1.0
 */

function wpsqt_admin_questions_edit(){
	
	global $wpdb;
	
	if ( !isset($_GET['questionid']) || !ctype_digit($_GET['questionid']) ){
		require_once wpsqt_page_display('general/error.php');
		return;
	}
	
	// A bit redunant but worth it incase ctype_digit gives a false postive.
	$questionId = (int) $_GET['questionid'];	
		
	if (  $_SERVER["REQUEST_METHOD"] == "POST"  ){
		// Code reuse.
		wpsqt_admin_questions_addnew();
		return;
	}
	else {
		
		list($questionText,$questionType,$questionHint,$questionDifficulty,$questionValue,$quizId,$sectionId,$questionAdditional) = $wpdb->get_row('SELECT text,type,hint,difficulty,value,quizid,sectionid,additional FROM '.WPSQT_QUESTION_TABLE.' WHERE id = '.$questionId, ARRAY_N);
		
		// $quizId comes from the database field which is a integer so no need to prepare a statement
		$sections = $wpdb->get_results('SELECT id,name FROM '.WPSQT_SECTION_TABLE.' WHERE quizid = '.$quizId,ARRAY_A);
		
		if ($questionType != 'textarea'){	
			$answers = $wpdb->get_results('SELECT text,correct FROM '.WPSQT_ANSWER_TABLE.' WHERE questionid = '.$questionId, ARRAY_A);
			$rowCount = sizeof($answers);
		}
		else{ 
			$rowCount = 1;
		}
	
	}

	require_once wpsqt_page_display('admin/questions/form.php');
	return;	
}

/** 
 * Handles the deleting of questions. Shows simple confirm
 * page and then a success page if confirmed or returns to
 * list if not confirmed.
 * 
 * @uses pages/admin/questions/delete.php
 * @uses pages/general/message.php
 * @uses pages/general/error.php
 * @uses wpdb
 * 
 * @since 1.0
 */

function wpsqt_admin_questions_delete(){

	global $wpdb;
	
	if ( !isset($_GET['questionid']) || !ctype_digit($_GET['questionid']) ){
		require_once wpsqt_page_display('general/error.php');
		return;
	}
	
	$questionId = (int) $_GET['questionid'];
	
	if ( $_SERVER["REQUEST_METHOD"] !== "POST" ){
		// Make sure they mean it.
		$questionText = $wpdb->get_var('SELECT text FROM '.WPSQT_QUESTION_TABLE.' WHERE id = '.$questionId);
		require_once wpsqt_page_display('admin/questions/delete.php');
		return;	
	}
	elseif ( $_POST['confirm'] == 'No' ){
		$message = 'Question not deleted';
		require_once wpsqt_page_display('general/message.php');
	}
	elseif ( $_POST['confirm'] == 'Yes' ){		
		$wpdb->query('DELETE FROM '.WPSQT_QUESTION_TABLE.' WHERE id = '.$questionId);
		$wpdb->query('DELETE FROM '.WPSQT_ANSWER_TABLE.' WHERE questionid = '.$questionId);
		$message = 'Question succesfully deleted';
		require_once wpsqt_page_display('general/message.php');
		return;	
	}
}

?>