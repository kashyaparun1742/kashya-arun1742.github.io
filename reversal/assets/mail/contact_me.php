<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to 						= 'kashyap.arun.1742@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject	= "Website Contact Form:  $name";
$email_body		= "You have received a new message from your website contact form.\n\n"."Here are the details:<br>Name: $name<br>Email: $email_address<br>Phone: $phone<br>Message:\n$message";
$headers				= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: enquiry@arunkashyap.com";
mail($to,$email_subject,$email_body,$headers);
return true;			
