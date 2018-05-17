<?php include("ProcessQuery.php"); ?>
<?php 
//////////////////////////
//Specify default values//
//////////////////////////

//Your E-mail
$your_email = 'pay@proelearn.com';
$your_email = 'support@proelearn.com';

//Default Subject if 'subject' field not specified
$default_subject = 'New registration came';

//Message if 'name' field not specified
$name_not_specified = 'Please type a valid name';

//Message if e-mail sent successfully
$email_was_sent = 'Thanks for the registration. You will recieve confirmation mail by our team after review.';

//Message if e-mail not sent (server not configured)
$server_not_configured = 'Sorry, can\'t send the mail right now try again later.';


///////////////////////////
//Contact Form Processing//
///////////////////////////
$errors = array();

//"name" field required by this PHP script even if 
// there are no 'aria-required="true"' or 'required' 
// attributes on this HTML input field
if(isset($_POST['fname'])) {
    
	if(!empty($_POST['fname']))
		$first_name  = stripslashes(strip_tags(trim($_POST['fname'])));
	
	if(!empty($_POST['lname']))
		$last_name  = stripslashes(strip_tags(trim($_POST['lname'])));
		
	if(!empty($_POST['phone']))
		$phone      = stripslashes(strip_tags(trim($_POST['phone'])));
	
	if(!empty($_POST['email']))
		$sender_email = stripslashes(strip_tags(trim($_POST['email'])));
		
	if(!empty($_POST['address']))
		$address = stripslashes(strip_tags(trim($_POST['address'])));
		
		
	if(!empty($_POST['course_id']))
		$course_id = stripslashes(strip_tags(trim($_POST['course_id'])));
			
	$message = "New registration has came from ".$first_name." email id ".$sender_email.". Please, follow up the lead.";
	
	//Message if no sender name was specified
	if(empty($first_name)) {
		$errors[] = $name_not_specified;
	}

	$from = "MIME-Version: 1.0" . "\r\n" ;
	$from .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
	$from .= (!empty($sender_email)) ? 'From: '.$sender_email : '';

	$subject = "New Registration from ".$sender_name;


	//sending message if no errors
	if(empty($errors)) {
		//duplicating email meta (from and subject) to email message body
		$message_meta = '';
			//From name and email
		$message_meta .= 'From: '. $first_name.' '. $last_name . ' ' . $sender_email . "<br>";
			//Subject or default subject
		$message_meta .= 'Subject: '. ( $subject ? $subject : $default_subject ) . "<br>";

		//adding another CUSTOM contact form fields that added by user to email message body
		foreach ($_POST as $key => $value) {
			//checking for standard fields 
			if ($key == 'fname' || $key == 'phone' || $key == 'email'  ) {
				continue;
			}
			//adding key-value pare to email message body
			$message_meta .= stripslashes(strip_tags(trim($key))) . ': ' . stripslashes(strip_tags(trim($value))) . "<br>";
		}

		$message = $message_meta . "<br>" . 'Message:' . "<br>" . $message;
		$message = wordwrap($message, 70);
	
		if (mail($your_email, $subject, $message, $from)) {
		    
		    $processQuery = new ProcessQuery();
		    $values[][] = array();
		    
		    $values[0]['col']='f_name';
		    $values[0]['val']=$first_name;
		    $values[0]['type']='char';
		    
		    $values[1]['col']='l_name';
		    $values[1]['val']=$last_name;
		    $values[1]['type']='char';
		    
		    $values[2]['col']='phone';
		    $values[2]['val']=$phone;
		    $values[2]['type']='char';
		    
		    $values[3]['col']='email';
		    $values[3]['val']=$sender_email;
		    $values[3]['type']='char';
		    
		    $values[4]['col']='address';
		    $values[4]['val']=$address;
		    $values[4]['type']='char';
		    
		    $values[5]['col']='course_id';
		    $values[5]['val']=$course_id;
		    $values[5]['type']='int';
		    
		    
		    
		    $processQuery->insertInto('registration', $values);
		    
			echo $email_was_sent;
		} else {
			$errors[] = $server_not_configured;
			echo '<span class="form-errors">' . implode('<br>', $errors ) . '</span>';
		}
	} else {
		echo '<span class="form-errors">' . implode('<br>', $errors ) . '</span>';
	}
} else {
	// if "name" var not send ('name' attribute of contact form input field was changed or missing)
	echo '"name" variable were not received by server. Please check "name" attributes for your input fields';
}
?>