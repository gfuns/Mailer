<?php  

require $_SERVER['DOCUMENT_ROOT'].'/mailer/PHPMailer/PHPMailerAutoload.php';

/**
* 
*/
class Mailer extends PHPMailer
{
	 /**
	 *Initializes the mailer, sets the necessary variables
	 *@param string $sendFromEmail 
	 *@param string $sendFromName
	 *@return void
	 */
		public function prepareToSend($sendFromEmail, $sendFromName){

		$this->Mailer = 'smtp';
		$this->IsSMTP(); // enable SMTP
        //$this->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$this->SMTPAuth = true; // authentication enabled
		$this->SMTPSecure = 'ssl';
        $this->Host = 'ssl://smtp.gmail.com';
        $this->Port = 465;
		$this->SMTPOptions = array(
								'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
								));
		$this->IsHTML(true);
		$this->Username = "yourgmail@gmail.com";
		$this->Password = "yourgamil password";
		$this->setFrom($sendFromEmail, $sendFromName);
	}
    /**
    *This function dispatches the mail,
    *@param string $subject ..The subject of the mail
    *@param string $body body of the mail, HTML format supported;
    *@param string $recieverAddress , the recievers address
    *@param string $recieverName, name of the reciever
    *@param string $sendFromEmail 
	*@param string $sendFromName
	*@return boolean 
    */
	public function sendMail($subject, $body, $recieverAddress, $recieverName, $sendFromEmail, $sendFromName)

	{   
		 $ack = false;
		$this->prepareToSend($sendFromEmail, $sendFromName);
		$this->Subject = $subject;
		$this->Body = $body;
		$this->addAddress($recieverAddress,$recieverName);

		if($this->Send()){

			$ack = true;
		}

		return $ack;
	}
}