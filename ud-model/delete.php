<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
?>
<?php

$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
if (isset($_REQUEST['codetorun'])){

	if ( $_REQUEST['codetorun'] == "1" ){
		
$username = "";
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
$username	    = "'".$username."'";
$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$username);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$result = $dbconnection -> deleteFromTable();
$result = $dbconnection -> deleteFromTable();

		}
	else if ( $_REQUEST['codetorun'] == "2" ){
		code here for deletion of account.
		$username = "";
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
$username	    = "'".$username."'";
		}
    }
?>
