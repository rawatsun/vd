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


$arrayofcolumnupdate = array('blog_page_link' => '0');
$arrayofcolumnupdatewhere = array('user_id' =>$user_id);
$result = $dbconnection->updateToTable("user_page_link",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);

$userfolder = $_SESSION['username'];

$dirname=DIRECTORY_NAME;

$filename=$dirname.$userfolder."/".$userfolder."blog.php";
unlink($filename);
if($result == "1")
{
echo "1";
}
else
{
echo "2";
}
?>