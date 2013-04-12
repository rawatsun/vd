<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
 ?>

<?php 
if (isset($_REQUEST['element_1'])){
$firstname =  strip_tags($_REQUEST['element_1']);
}

if (isset($_REQUEST['element_2'])){
$lastname =  strip_tags($_REQUEST['element_2']);
}

if (isset($_REQUEST['element_3'])){
$email_id =  strip_tags($_REQUEST['element_3']);
}

if (isset($_REQUEST['element_4'])){
$password =  strip_tags($_REQUEST['element_4']);
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

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$firstname = "'".$firstname."'";
$lastname = "'".$lastname. "'";
$email_id= "'" .$email_id."'";
$password= "'" .$password."'";


$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$id = $dbconnection -> selectColumn("user_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);
   if(trim($id) == "1")
       { 
	      $arrayofcolumnupdate = array('firstname' =>$firstname ,
 'lastname' =>$lastname, 'email_id' =>$email_id, 'password' =>$password);
$arrayofcolumnupdatewhere = array('user_id' =>$user_id);
$result=$dbconnection->updateToTable("user_mail_settings",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);
	   }

     else if(trim($id) == "2")
	 {
   $arrayofcolumninsert = array('user_id'=>$user_id,'firstname' =>$firstname, 'lastname' => $lastname
		, 'email_id' => $email_id, 'password' => $password);
   $result = $dbconnection -> insertIntoTable("user_mail_settings",$arrayofcolumninsert);
	}

if (trim($result) == "1"){
echo "1";
}
else{
echo "2";
}
 
?>

