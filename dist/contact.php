<?php
	// Message Vars
	$msg = array();
	//$msg = '';
	$msgClass = '';

	// Check For Submit
	//if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
		


		// Check Required Fields
		 // && !empty($checkin) && !empty($checkout) 
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg['msgSuccess'] = '';
				$msg['msg'] = 'Please use a valid email';
				//$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'info@dvplumbingandheating.ca';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<p><strong>Name:</strong> '.$name.' </p>
					<p><strong>Email:</strong> '.$email.' </p>					
					<p><strong>Message:</strong></p>
					<p>'.$message.'</p>
					<small>This message is from demo site</small>

				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$_POST=array();
					$msg['msgSuccess'] = 111;
					$msg['msg'] = 'Thank you. We’ll get in touch with you soon.';
					//$msgClass = 'alert-success';
				} else {
					// Failed
					$msg['msgSuccess'] = '';
					$msg['msg'] = 'Your email was not sent';
					//$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg['msgSuccess'] = '';
			$msg['msg'] = 'Please fill in all fields';
			//$msgClass = 'alert-danger';
		}
		echo json_encode($msg);
	//}
?>