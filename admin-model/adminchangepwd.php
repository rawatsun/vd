<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
  include_once('connnection-class.php');
 ?>

<?php 
if (isset($_REQUEST['element_1'])){
$oldpassword = strip_tags($_REQUEST['element_1']);
}

if (isset($_REQUEST['element_2'])){
$newpassword = strip_tags($_REQUEST['element_2']);
}
?>


<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
$username = "";
if(isset($_SESSION['username-admin']))
{
$username = $_SESSION['username-admin'];
}
$username	    = "'".strip_tags($username)."'";
$newpassword = "'".strip_tags($newpassword)."'";
$arrayofcolumn = array('password');
$arrayofcolumnwhere = array('username' =>$username);
$password = $dbconnection -> selectFromTable("admin_login",$arrayofcolumn,$arrayofcolumnwhere);
if($password == $oldpassword) 
    {  
          $arrayofcolumnupdate = array('password' =>$newpassword);
          $arrayofcolumnupdatewhere = array('username' =>$username); 
      	  $result = $dbconnection->updateToTable("admin_login",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);
          if(trim($result) == "1")
            {
            echo "1";
            }
          else
            {
             echo "2";
            }
    }
else
    {
        echo "3"; 
    } 
?>
