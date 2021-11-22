<?php
include "scripts/sendMail.php";
echo('ok2');
$email = $_POST["email"];
$replyemail= $_POST["replyemail"];
$site = $_POST["site"];
$message= $_POST["message"];
$subject= $_POST["subject"];


$message = $message;


     
        $to=$email;
		$from = $replyemail ;
		$namefrom = $site;
		$nameto = $email;
		


$result = authSendEmail($from, $namefrom, $to, $nameto, $subject, $message,false);

echo $result;


?>
