<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<?php session_start();
	include_once('../model/connnection-class.php');
 ?>

<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);


if (isset($_REQUEST['user_name']) && isset($_REQUEST['password']))
{

$user_name		 = $_REQUEST['user_name'];
$password  		 = $_REQUEST['password'];
$user_name	     = "'".$user_name."'";
$password	     = "'".$password."'";
}

$arrayofcolumn = array('username');

$arrayofcolumnwhere = array('username' =>$user_name,'password'=>$password);
$result = $dbconnection -> selectFromTable("admin_login",$arrayofcolumn,$arrayofcolumnwhere);

if ($result == 'You are not logged in'){
	echo $result;
} else {
	echo "welcome,   ".$_SESSION['username-admin']  = $result;

}


$dbconnection ->closeConnection();
 ?>