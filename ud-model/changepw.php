<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
  include_once(UD_MODEL_PATH.'/connnection-class.php');
 ?>

<?php 
if (isset($_REQUEST['element_1'])){
$oldpassword = strip_tags(md5($_REQUEST['element_1']));
}

if (isset($_REQUEST['element_2'])){
$newpassword = strip_tags(md5($_REQUEST['element_2']));
}
?>


<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);$username = "";
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
$username	    = "'".strip_tags($username)."'";
$newpassword = "'".strip_tags($newpassword)."'";
$arrayofcolumn = array('password');
$arrayofcolumnwhere = array('user_name' =>$username);
$password = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);
if($password == $oldpassword) 
    {  
          $arrayofcolumnupdate = array('password' =>$newpassword);
          $arrayofcolumnupdatewhere = array('user_name' =>$username);
          $result = $dbconnection->updateToTable("users",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);  
      	  $result1 = $dbconnection->updateToTable("user_login",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);
          if(trim($result) == "1" && trim($result1) == "1")
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
