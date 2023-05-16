<?php
//get data from form  

$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$comments= $_POST['comments'];
$to = "sree.kettavan1993@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Phone = ".$phone."\r\n Email = " . $email . "\r\n Comments =" . $comments;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>