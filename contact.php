<?php 

$name = $_POST['NAME'];
$email = $_POST['EMAIL'];
$message = $_POST['MESSAGE'];
$formcontent="From: $name \n Message: $message";
$recipient = "hello@thefun.place";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
