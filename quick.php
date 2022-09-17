<?php
//get data from form  
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "support@tasainteriordesigner.com";
$subject = "Quick enquiry";
$txt =" Full Name - ". $name . "\r\n Phone number - " . $phone . "\r\n Email - " . $email . "\r\n Message - " . $message;
$headers = "From: " . $email;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>