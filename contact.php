<?php
//get data from form  
$name = $_POST['Name'];
$email = $_POST['Email'];
$email = $_POST['Number'];
$message = $_POST['Message'];
$to = "joyinlaskar@mail.com";
$subject = "Mail From website";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n  Number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@ukpschool.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
