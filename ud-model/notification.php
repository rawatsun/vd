<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
 ?>

<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
$user_name = "";

if(isset($_SESSION['username']))
{
$user_name = $_SESSION['username'];
}
$user_name = "'".$user_name."'";


$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('number_of_comments');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$a = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);
echo $a;
?>