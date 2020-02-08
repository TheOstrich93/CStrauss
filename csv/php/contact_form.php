<?php 
	$emailTo = "aaron.cuddeback@outlook.com"; // Enter your email for feedbacks here 	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: {$name} <{$email}>" . "\r\n";
	
	if (!isset($subject)) {
		$subject = "Contact from online CSV"; // Enter your subject here
	}
		
	$body = "";
	reset($_POST);
	$body .= "<p><strong>Name:</strong> $name</p>";
	$body .= "<p><strong>Email:</strong> $email</p>";
	$body .= "<p><strong>Subject:</strong> $subject</p>";
	$body .= "<p><strong>Message:</strong><br/> $message</p>";
	
	$result = mail($emailTo, $subject, $body, $headers); //This method sends the mail.
	echo "Your email was sent successfully, I look forward to contacting you!"; // Success message
?>