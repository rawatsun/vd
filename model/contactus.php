<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<?php session_start();
	include_once('../model/connnection-class.php');
	require_once(PHP_MAILER);
 ?>

<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

if (isset($_REQUEST['contact_name']) && isset($_REQUEST['contact_email']) && isset($_REQUEST['contact_suggestion']))
{

$contact_name		 = $_REQUEST['contact_name'];
$contact_email  		 = $_REQUEST['contact_email'];
$contact_suggestion  		 = $_REQUEST['contact_suggestion'];
$contact_name	     = "'".$contact_name."'";
$contact_email	     = "'".$contact_email."'";
$contact_suggestion	     = "'".$contact_suggestion."'";
}

$arrayofcolumninsert = array('contact_name' =>$contact_name, 'contact_email' => $contact_email,'contact_suggestion'=>$contact_suggestion);
$result = $dbconnection -> insertIntoTable("contact_us",$arrayofcolumninsert);
				if($result == "registered")
				{
				    echo "1";
				}
			else
				{
				    echo "2";
				}
		if($result == "registered")
		{

$mail             = new PHPMailer();

$body             = "query : " . $contact_suggestion .  "<br>". "by email : ".$contact_email   . "<br>Name ".$contact_name;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "visiondart23@gmail.com";  // GMAIL username
$mail->Password   = "visiondart123";            // GMAIL password

$mail->SetFrom($contact_email,$contact_name);

$mail->AddReplyTo("visiondart23@gmail.com","test");

$mail->Subject    = "hello";

$mail->AltBody    = MAIL_BODY; // optional, comment out and test

$mail->MsgHTML($body);
$err=0;
//$address1 = "suraj.singh@osscube.com";
$mail->AddAddress("visiondart23@gmail.com");

//$mail->AddAttachment("index.php");      // attachment
//echo $err;
if(!($mail->Send())) {
  echo MAIL_NOT_SENT;
} else {
  echo MAIL_SENT;

}



}
$dbconnection ->closeConnection();
?>
