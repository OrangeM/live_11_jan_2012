<?php
	/**
	 * Place were all the miscellaneous functionality goes.
	 * 
	 * @author Iain Cambridge
	 */



/**
 * Allows the user to configure the number
 * of items per page aswell as the email were
 * completion notifications get sent. 
 * 
 * @uses pages/admin/misc/options.php
 * @uses wp_roles
 * 
 * @since 1.0
 */

function wpsqt_admin_options_main(){
	
	global $wp_roles;
		
	$fromEmail = get_option('wpsqt_from_email');
	$numberOfItems = get_option('wpsqt_number_of_items');
	$email = get_option('wpsqt_contact_email');
	$emailTemplate = get_option('wpsqt_email_template');
	$emailRole = get_option('wpsqt_email_role');
	$supportUs = get_option('wpsqt_support_us');
	
	if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
	
		wpsqt_nonce_check();
		
		$errorArray = array();
		
		if ( !isset($_POST['items']) || empty($_POST['items']) || !ctype_digit($_POST['items']) ) {
			$errorArray[] = 'Number of Items is required';
		}
		
		if ( !isset($_POST['email']) || empty($_POST['email']) ){
			$errorArray[] = 'Email is required';
		}
		
		if ( !isset($_POST['from_email']) || empty($_POST['from_email']) ){
			$errorArray[] = 'From Email is required';
		} elseif ( !is_email($_POST['from_email']) ){
			$errorArray[] = 'A valid email is required for the From Email';			
		}
		
		if ( empty($errorArray) ){
			
			$numberOfItems = (int)$_POST['items'];
			$email = $_POST['email'];
			$fromEmail = $_POST['from_email'];
			$emailRole = $_POST['email_role'];
			$emailTemplate = (isset($_POST['email_template'])) ? $_POST['email_template'] : '';
			$supportUs = $_POST['support_us'];
			
			update_option('wpsqt_number_of_items',$numberOfItems);
			update_option('wpsqt_contact_email',$email);
			update_option('wpsqt_from_email',$fromEmail);
			update_option('wpsqt_email_template',$emailTemplate);
			update_option('wpsqt_email_role',$emailRole);
			update_option('wpsqt_support_us',$supportUs);
			$successMessage = 'Successfully updated';
		}
		$vars = compact($errorArray);
				
	} 
	
	
	require_once wpsqt_page_display('admin/misc/options.php');
	
}

/**
 * Allows users to send feedback without leaving thier 
 * wordpress install. Purpose is to increase bug reports.
 * 
 * Does simple validation checks ensuring that the email is
 * provided and passes validation using is_email(). With
 * checks on message and the reason with ensuring that reason
 * is actually one of the options we provide in the contact.php
 * 
 * When all checks are done and no errors are returned. We use
 * wp_mail() to send the email and check to see if the sending
 * was successful.
 * 
 * @uses pages/admin/misc/contact.php
 * 
 * @since 1.0
 */

function wpsqt_admin_misc_contact_main(){	
	
	global $wp_version;
	
	if (  $_SERVER["REQUEST_METHOD"] == "POST" ){
	
		wpsqt_nonce_check();
		$errorArray = array();
		if ( !isset($_POST['email']) || empty($_POST['email'])){
			$errorArray[] = 'Email is required';
		} elseif ( !is_email($_POST['email']) ){
			$errorArray[] = 'Invalid from email';
		}
		
		if ( !isset($_POST['name']) || empty($_POST['name']) ){
			$errorArray[] = 'Name is required';
		}
		
		if ( !isset($_POST['message']) || empty($_POST['message']) ){
			$errorArray[] = 'Message is required';
		}
		
		if ( !isset($_POST['reason']) || empty($_POST['reason']) ){
			$errorArray[] = 'Reason is required';
			// Tho this should never be blank or empty!
		} elseif ( $_POST['reason'] != "Bug" && $_POST['reason'] != 'Suggestion' 
		 		&& $_POST['reason'] != 'You guys rock!' && $_POST['reason'] != 'You guys are the suck!'
		 		&& $_POST['reason'] != 'Moving to CatN') {
			$errorArray[] = 'Invalid reason';
			// Definetly something a miss here
		}
		
		if ( empty($errorArray) ){
			$fromEmail = ( get_option('wpsqt_from_email') ) ? get_option('wpsqt_from_email') : get_option('admin_email');
			
   			$headers = 'From: WPSQT Contact Form <'.WPSQT_FROM_EMAIL.'>' . "\r\n";
   			$headers .= 'Reply-To: '.trim($_POST['name']).' <'.$_POST['email'].'>\r\n';
   			$message = 'From: '.trim($_POST['name']).' <'.$fromEmail.'>'.PHP_EOL;
   			$message .= 'WPSQT Version: '.WPSQT_VERSION.PHP_EOL;
   			$message .= 'PHP Version: '.PHP_VERSION.PHP_EOL;
   			$message .= 'WordPress Version: '.$wp_version.PHP_EOL;
   			$message .= 'Message: '.htmlentities($_POST['message']).PHP_EOL;
   			 
			add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
			 
			if ( !wp_mail(WPSQT_CONTACT_EMAIL,$_POST['reason'], $message, $headers) ){
				$errorArray[] = 'Unable to send email, please check wordpress settings';
			} else {
				$successMessage = 'Email sent! Thank you for reponse';
			}		
			
		}
		
	}
	
	require_once wpsqt_page_display('admin/misc/contact.php');
		
}

?>