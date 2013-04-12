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
$dob =  strip_tags($_REQUEST['element_3']);
}

if (isset($_REQUEST['element_4'])){
$address =  strip_tags($_REQUEST['element_4']);
}

if (isset($_REQUEST['element_5'])){
$phone =  strip_tags($_REQUEST['element_5']);
}

if (isset($_REQUEST['element_6'])){
$country =  strip_tags($_REQUEST['element_6']);
}
if (isset($_REQUEST['element_7'])){
$email = strip_tags( $_REQUEST['element_7']);
}

?>
<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
$username = "";
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
$username	    = "'".$username."'";

	$firstname = "'".$firstname."'";
$lastname = "'".$lastname. "'";
$email= "'" .$email."'";
$address= "'" .$address."'";
$phone= "'".$phone. "'";
$dob= "'".$dob. "'";
$country = "'" .$country."'";



$arrayofcolumnupdate = array('first_name' =>$firstname , 'last_name' =>$lastname ,
 'phone' =>$phone, 'address' =>$address, 'date_of_birth' =>$dob, 'country' =>$country, 'email_id' =>$email);
$arrayofcolumnupdatewhere = array('user_name' =>$username);
$result = $dbconnection->updateToTable("users",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);

$user_name = "'".$_SESSION['username']."'";

$arrayofcolumn = array('user_id');
 $arrayofcolumnwhere = array('user_name' =>$user_name);
 $user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

date_default_timezone_set('Asia/Kolkata');
$profile_update_time=date('m/d/Y h:i:s a', time());
$profile_update_time = "'" .$profile_update_time ."'";
//echo $profile_update_time;

$arrayofcolumninsert = array('last_profile_updated' =>$profile_update_time, 'user_id' =>$user_id);
$a= $dbconnection -> insertIntoTable("profile_details",$arrayofcolumninsert);
//echo $a;

if ($result == "1"){
echo "1";
}
else{
echo "2";
}

 
  ?>
