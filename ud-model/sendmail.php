<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
	require_once(PHP_MAILER);
 ?>

<?php 
if (isset($_REQUEST['element_1'])){
$to =  strip_tags($_REQUEST['element_1']);
}

if (isset($_REQUEST['element_2'])){
$subject =  strip_tags($_REQUEST['element_2']);
}

if (isset($_REQUEST['element_3'])){
$message =  strip_tags($_REQUEST['element_3']);
}

?>

<?php 
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
$user_name = "";
if(isset($_SESSION['username']))
{
	$user_name = $_SESSION['username'];
}
$user_name	    = "'".$user_name."'";
$email_id=$password="";
$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('firstname');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$firstname = $dbconnection -> selectFromTable("user_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('lastname');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$lastname = $dbconnection -> selectFromTable("user_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('email_id');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$email_id = $dbconnection -> selectFromTable("user_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('password');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$password = $dbconnection -> selectFromTable("user_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);



$mail             = new PHPMailer();

$body             = $message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = $email_id;  // GMAIL username
$mail->Password   = $password;            // GMAIL password

$mail->SetFrom($email_id, $firstname . $lastname);

$mail->AddReplyTo($email_id,$firstname . $lastname);

$mail->Subject    = $subject;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$err=0;
//$address1 = "suraj.singh@osscube.com";
$sender = explode(",",$to);
$reg = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
for($i=0;$i<count($sender);$i++)
{

if (preg_match($reg, $sender[$i])) {
$mail->AddAddress($sender[$i]);
		$err=0;
} else { 
$err=1;
}

/*echo "chealsdkhna" .filter_var($sender[$i],FILTER_VALIDATE_EMAIL);
	if(!(filter_var($sender[$i],FILTER_VALIDATE_EMAIL)))
	{


		
	}
	else
	{
		
	}*/

}

//$mail->AddAttachment("index.php");      // attachment
if ($err==0){
//echo $err;
if(!($mail->Send())) {
  echo "Message not sent";
} else {
  echo "Message sent!";
}

}
else{
	echo "Invalid email Adress";
}





?>