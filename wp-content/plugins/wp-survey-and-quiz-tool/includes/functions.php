<?php
	/**
	 * Here is where I've put all the general random
	 * functions that don't belong anywhere else.
	 * 
	 * @author Iain Cambridge
	 */

/**
 * Sends a batched email about new results.
 * Only data being used currently is the person's
 * name and their ip address.
 * 
 * @param $results
 * 
 * @since 1.0
 */

function wpsqt_functions_send_mail( array $results ){
	
	$emailMessage  = 'There are '.sizeof($results).' new results to be marked'.PHP_EOL.PHP_EOL;
	foreach ( $results as $result ){
		$emailMessage .= $result['person_name'].' - '.$result['ipaddress'].PHP_EOL;
	}
	
	$emailAddress = get_option('wpsqt_contact_email');
	if (!is_email($emailAddress)){
		return false;
	}
	
	$headers = 'From: AdviserVoice <'.WPSQT_FROM_EMAIL.'>' . "\r\n";
	$headers = array(
			'From' 		=> 'From: AdviserVoice <'.WPSQT_FROM_EMAIL.'>',
			'Reply-To' 	=> "Reply-To: " . get_option('admin_email'),
			'Bcc'		=> "Bcc: dennis@empaustralia.com.au, editor@adviservoice.com.au"
	);
	
	add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
	
   	wp_mail($emailAddress,'CPD Notification',$emailMessage,$headers);
   	
   	return;
}


/**
 * Returns the number of pages that would 
 * be required to show a number of items. 
 * 
 * @param integer $numberOfItems the number of items
 * @param integer $itemsPerPage number of items per page
 * 
 * @return integer number of pages in the current section
 * 
 * @since 1.0
 */

function wpsqt_functions_pagenation_pagecount($numberOfItems, $itemsPerPage){
	
	if ( $numberOfItems > 0 ){
		$numberOfPages = intval( $numberOfItems / $itemsPerPage );
		
		if ( $numberOfItems % $itemsPerPage ){
			$numberOfPages++;
		}
	} else {
		$numberOfPages = 0;
	}
	
	return $numberOfPages;
	
}

/**
 * Simple function that merely returns the
 * current page number. Created soley to
 * comply with DRY.
 * 
 * @return integer current page number
 * 
 * @since 1.0
 */

function wpsqt_functions_pagenation_pagenumber(){
	
	if ( isset($_GET['pageno']) && ctype_digit($_GET['pageno']) ){
		$pageNumber = (int)$_GET['pageno'];
	}
	else{
		$pageNumber = 1;
	}
	
	return $pageNumber;
	
}

/**
 *  Generates the HTML for the pagination.
 *  
 * @param integer $currentPage the current page number
 * @param integer $numberOfPages The total number of pages
 * 
 * @since 1.0
 */
function wpsqt_functions_pagenation_display($currentPage,$numberOfPages){
	
	$returnString = '';
	$pageUri = wpsqt_functions_generate_uri( array('pageno') );
	
	$startNumber = $currentPage -3;
	if ($startNumber < 1 ){
		$startNumber = 1;
	}
	
	if ( $currentPage != 1 && $startNumber > 3 ){
		$startNumber = ($currentPage - 2);		
	}
	$endNumber = ($startNumber+5);
	
	if ( $startNumber != 1 ){
		$returnString .= '<a href="'.$pageUri.'&pageno=1 " class="page-numbers">1</a>';
	}
	
	for ( $i = $startNumber; $i <= $endNumber; $i++ ){
		
		if ( $i > $numberOfPages ){
			break;
		}
		
		$returnString .= ($i == $currentPage) ? '<span class="page-numbers current">' : ' <a href="'.$pageUri.'&pageno='.$i.'" class="page-numbers">';
		$returnString .= $i;
		$returnString .= ($i == $currentPage) ? '</span>' : '</a> ';
	}
	
	if ( $endNumber != $numberOfPages && $numberOfPages > ($startNumber+5) ){
		$returnString .= '<a href="'.$pageUri.'&pageno='.$numberOfPages.' " class="page-numbers">'.$numberOfPages.'</a> ';		
	}

	return $returnString;
	
}

/**
 * Simple function to generate an uri from the current page.
 * 
 * @param array $exclude Current get var name's to be excluded from the new uri.
 * 
 * @since 1.0
 */

function wpsqt_functions_generate_uri( array $exclude = array() ){
	
	/*$returnString = $_SERVER['PHP_SELF'].'?';
	if ( !empty($_GET) ){
		foreach ( $_GET as $varName => $varValue ){
			if ( !in_array($varName, $exclude) ){
				$returnString .= $varName.'='.$varValue.'&';
			}	
		}	
	}	
	
	return $returnString;
*/
	$returnString = WPSQT_RESULT_URL;
	if($returnString == "WPSQT_RESULT_URL")
	{
		$returnString = $_SERVER['PHP_SELF'].'?';
		if ( !empty($_GET) ){
		foreach ( $_GET as $varName => $varValue ){
			if ( !in_array($varName, $exclude) ){
				$returnString .= $varName.'='.$varValue.'&';
			}	
		}	
	}		
	}
	else if ( !empty($_GET) ){
		foreach ( $_GET as $varName => $varValue ){
			if ( !in_array($varName, $exclude) && $varName == 'pageno' && !strrpos(WPSQT_RESULT_URL, $varName)){
				$returnString .= '&'.$varName.'='.$varValue;
			}	
			if ( $varName == 'status' && !strrpos(WPSQT_RESULT_URL, $varName)){
				$returnString .= '&'.$varName.'='.$varValue;
			}	
		}	
	}	
	
	return $returnString;
}

function wpsqt_functions_calculate_marks($result)
{
	$currentPoints = 0; 
	$totalPoints = 0;
	$hardPoints = 0; 
	echo print_r($result);
	foreach ( $result['sections'] as $section )
	{ 
		return 'before sections';
		if (!isset($section['questions']))
			 	continue;
		return 'inside sections';
		foreach ($section['questions'] as $questionKey => $questionArray)
		{ 
			if ($questionArray['section_type'] == 'multiple')
			{
				if ( isset($section['answers'][$questionKey]['mark']) && $section['answers'][$questionKey]['mark'] == 'correct' ){
					$currentPoints++;
					$hardPoints++;
				}
				$totalPoints++;	
			} 
			else 
			{ 			
				foreach ($questionArray['answers'] as $answer)
				{
					for( $i = 0; $i <= $questionArray['value']; $i++ )
					{ 
						if ( $i != 0) 
						{ 
							$totalPoints++; 
						}
						if ( isset($questionArray['mark']) && $questionArray['mark'] == $i )
						{
							if ($i != 0){ $currentPoints++; }
						}
					}
				}
			}
		}
	}
		
	//Total Points $currentPoints; out of $totalPoints"; 
	return $currentPoints . " out of " . $totalPoints;
	//$hardPoints; 
	//$currentPoints; 
	//$totalPoints; 

}

