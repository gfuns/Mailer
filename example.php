<?php 

require 'mailer.php';


$mail = new Mailer;
$subject = "Testing mailer";
$body    = '<h1> Hello</h1>';
$reciever = "oriebizline@gmail.com";
$reciver_name = "orie chinedu";
$sendFromEmail = "oriechinedu@gmail.com";
$sendFromName  = "orient";

if ($mail->sendMail("$subject", $body, $reciever, $reciver_name, $sendFromEmail, $sendFromName) == true){
	echo "sent";
}
else{
echo "mail not sent";
}

 ?>