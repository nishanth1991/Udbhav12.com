<?php
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['subject'];
$contact_message = $_POST['message'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "query@udbhav12.com.com";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	
	$email_body = "Name: $contact_name \nEmail: $sender \n\nSubject: $contact_subject \n\nMessage: \n\n$contact_message \n\nIP: $client_ip \n\n";
	$email_body_auto_reply = "Hello $contact_name, \nThis is the auto reply message. Thank you. \n\nAdmin - http://www.udbhav12.com";
	
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	$extra_auto_reply = "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	
	mail( $sender, "Auto Reply - Re: $contact_subject", $email_body_auto_reply, $extra_auto_reply );	// auto reply mail to sender

	if( mail( $receiver, "udbhav12.com Contact Form - $contact_subject", $email_body, $extra ) )
	{
		echo "success=yes";
	}
	else
	{
		echo "success=no";
	}
}
?>