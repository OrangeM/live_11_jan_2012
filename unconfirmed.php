<?php
//Include wordpress api
(require_once('./wp-blog-header.php')) or die('Can not use wordpress api.');

//Config
$email = array(
	//Multiple recipients may be specified using an array or a comma-separated string
	'to' 		=> 'susie.newham@adviservoice.com.au, editor@adviservoice.com.au', //get_option('admin_email')
	//The subject of the message
	'subject'	=> 'List of unconfirmed subscribers',
	//Message content
	'message'	=> null,
	//Mail headers to send with the message
	'headers'	=> array(
					'From' 		=> "From: " . get_option('blogname') . " <editor@adviservoice.com.au>",
					'Reply-To' 	=> "Reply-To: " . get_option('admin_email'),
					'Bcc'		=> "Bcc: editor@adviservoice.com.au"
				)
);

//Get list of unconfirmed subscribers
$users = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."sabre_table WHERE status<>'ok' ORDER BY first_mod DESC");

//Stop script execution if no unconfirmed subscribers
if(empty($users))
	die('There are no unconfirmed subscribers');

$exclude = array();	
	
$email['message']  = '<h3>Users</h3>';

foreach($users as $user)
{
	if(!in_array($user->user_id, $exclude))
	{
		$email['message'] .= sprintf(__('User id: %s', 'sabre'), $user->user_id) . "<br/>";
		$email['message'] .= sprintf(__('User email: %s', 'sabre'), $user->email) . "<br/>";
		$email['message'] .= sprintf(__('Subscribed: %s', 'sabre'), date('j F Y H.iA', strtotime($user->first_mod))) . "<br/><br/>";
	}
	$exclude[] = $user->user_id;
}

//Send as html
add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

//Send email with list of unconfirmed subscribers
wp_mail($email['to'], $email['subject'], $email['message'], $email['headers']);

header('HTTP/1.0 200 OK');
?>