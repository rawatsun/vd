<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once('connnection-class.php');

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
if(isset($_SESSION['username-admin']))
{
$user_name = $_SESSION['username-admin'];
}

$user_name	    = "'".$user_name."'";

$firstname = "'".$firstname."'";
$lastname = "'".$lastname. "'";
$email_id= "'" .$email_id."'";
$password= "'" .$password."'";

$arrayofcolumn = array('username');
$arrayofcolumnwhere = array('username' =>$user_name);
$id = $dbconnection -> selectColumn("admin_mail_settings",$arrayofcolumn,$arrayofcolumnwhere);

   if(trim($id) == "1")
       { 

	      $arrayofcolumnupdate = array('firstname' =>$firstname ,
 'lastname' =>$lastname, 'email_id' =>$email_id, 'password' =>$password, 'username' =>$user_name);

$arrayofcolumntoupdatewhere = array('username' =>$user_name);
$result=$dbconnection->updateToTable("admin_mail_settings",$arrayofcolumnupdate,$arrayofcolumntoupdatewhere);

	   }

     else if(trim($id) == "2")
	 {
   $arrayofcolumninsert = array('firstname' =>$firstname, 'lastname' => $lastname
		, 'email_id' => $email_id, 'password' => $password, 'username' =>$user_name);
   $result = $dbconnection -> insertIntoTable("admin_mail_settings",$arrayofcolumninsert);
	}

if (trim($result) == "1"){
echo "1";
}
else{
echo "2";
}
 
?>

