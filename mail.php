<?php


// Specify the Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","frozenfireburn@gmail");

// Specify an SMTP Port - 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

ini_set('sendmail_from', 'frozenfireburn@gmail.com');


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "arizanova@student.mville.edu";
$subject = "Champions VS Zombies Inquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='menu.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";




?>
