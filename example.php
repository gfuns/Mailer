<?php 

require 'mailer.php';


$mail = new Mailer;
$subject = "Testing mailer";
$body    = '<h1> Hello</h1>';
$reciever = "reciver@gmail.com";
$reciver_name = "Reciever Name";
$sendFromEmail = "yourgmail@gmail.com";
$sendFromName  = "yourName";

if ($mail->sendMail("$subject", $body, $reciever, $reciver_name, $sendFromEmail, $sendFromName) == true){
	echo "sent";
}
else{
echo "mail not sent";
}

 ?>