<?php
require 'PHPMailer/class.phpmailer.php';

function authSendEmail($from, $namefrom, $to, $nameto, $subject, $message, $attachment){

	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.recognite.co.uk';  // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'homefinder@recognite.co.uk';                            // SMTP username
	$mail->Password = 'Nitrox26@';                           // SMTP password
	$mail->Port = 25;


	$mail->SetFrom($from, $namefrom);
	$mail->FromName = $namefrom;
	$mail->AddAddress($to, $nameto);  // Add a recipient
	$mail->AddReplyTo($from, $namefrom);

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->IsHTML(true);                                  // Set email format to HTML
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	if($attachment !=false){
		$mail->AddAttachment($attachment);      // attachment
	}

	$mail->Subject = $subject;
	$mail->Body    = $message;

	if(!$mail->Send()) {
		return $mail->ErrorInfo;
	}else{

		return 1;
	}

}
?>
