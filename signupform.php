<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email']; 
$address = $_POST['address'];
$headers = "From: $_email";
$to = "zacharydbutts@gmail.com";
$subject = 'Poker Run Preliminary Registraion';
$form = "
Name: $name \n
Phone: $phone \n
Email: $email \n
Address: $address \n";

mail($to, $subject, $form, $headers);
header("Location: http://lakeallatoonapokerrun.com/success.html");

?>
