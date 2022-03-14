<?php 

$myemail = 'info@detoxemmunity.com';

$email = $_POST['email'];


$to = $myemail;
$email_subject = "A New subscribe Awaits: $subject";
$email_body = "You have received a new message. Details are given below.\n Name: $name \n Email: $email \n Subject: $subject \n Message: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
header("location:index.php");

?>