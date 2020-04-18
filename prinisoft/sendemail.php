<?php


   use PHPMailer\PHPMailer\PHPMailer;
   require 'vendor/autoload.php';
   // require 'phpmailer/autoload.php';
    $mail = new PHPMailer;

    $message='';
	$senderemail=$_POST['email'];

	$sender_name=$_POST['name'];
	$message=$_POST['message'];


		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		// $mail->IsHTML(true);
		$mail->Username = "ahmedsu868@gmail.com";
		$mail->Password = "uwnzxxzbwszletre";

	$mail->setFrom($senderemail);
    $mail->addAddress('Shashi.Gowda@GTRtek.com');
    $mail->Subject  = 'Enquiry';
    $mail->Body     = $message.' from '.$senderemail;
		if(!$mail->send()) {
				echo 0;


		} else {
			  echo 1;

}

?>
