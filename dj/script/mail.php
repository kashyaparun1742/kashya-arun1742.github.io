<?php 

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
ini_set('sendmail_from', 'no-reply@arunkashyap.com');


$data 	=	$_POST;
if(!$data){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Invalid request!</span>
	<?php
	exit();
}
if($data['name']==''){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Please enter your full name!</span>
	<?php
	exit();
}

if($data['email']==''){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Please enter your email address!</span>
	<?php
	exit();
}

if($data['phone']==''){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Please enter your working contact number!</span>
	<?php
	exit();
}

if($data['hear']==''){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Let us know from where you herd about us!</span>
	<?php
	exit();
}

if($data['msg']==''){
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Please leave message for us!</span>
	<?php
	exit();
}


$msg_email = "Hello Admin<br>
You have new contact/enquiry from your website. Please find detail below.<br>
<strong>Name</strong>:".$data['name']."<br>
<strong>Email</strong>:".$data['email']."<br>
<strong>Phone</strong>:".$data['phone']."<br>
<strong>Source</strong>:".$data['hear']."<br>
<strong>Message</strong>:".$data['msg']."<br>
";

$from 	=	'Enquiry<enquiry@thedijje.com>';

$to 	= 'thedijje.ic@gmail.com';

$subject = 'New enquiry message from '.$data['name'];

$headers = "From: " . $from . "\r\n";
//$headers .= "Reply-To: ". $to . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = $msg_email;


$sent = mail($to, $subject, $message, $headers);
if($sent){
	?>
	<span class="text-success"><i class="fa fa-check-circle"></i> Email sent successfully!</span>
	<script>
		$('#name').val();
		$('#phone').val();
		$('#email').val();
		$('#hear').val();
		$('#msg').val();
	</script>
	<?php
}else{
	?>
	<span class="text-danger"><i class="fa fa-times-circle"></i> Error in sending email, please try again soon!</span>
	<?php
}



