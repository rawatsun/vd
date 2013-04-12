<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
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
$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$username);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumndeletewhere = array('user_id' =>$user_id);
$result = $dbconnection->deleteFromTable("user_login",$arrayofcolumndeletewhere);
$userfolder = $_SESSION['username'];
$dirname=DIRECTORY_NAME;

$filename=$dirname.$userfolder."/".$userfolder.".php";
$filename1=$dirname.$userfolder."/".$userfolder."blog.php";


unlink($filename);
unlink($filename1);
if($result == "1")
{
echo "1";
}
else
{
echo "2";
}
	session_destroy();
	session_unset();
	/*  header("Location: index.php");
	exit();  */
?>
