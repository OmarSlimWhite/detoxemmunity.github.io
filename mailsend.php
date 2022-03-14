<?php 

$myemail = 'info@detoxemmunity.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "A New Message Awaits: $subject";
$email_body = "You have received a new message. Details are given below.\n Name: $name \n Email: $email \n Subject: $subject \n Message: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
header("location:index.php");

?>