<?php session_start(); 
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
if (!(isset($_SESSION['username']))) {
	header("Location: ././index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ADMIN_DASHBOARD; ?></title>
    <script src="ud-jquery-lib/jquery-1.8.3.js" type="text/javascript"></script>
    <script src="ud-js/JScript.js" type="text/javascript"></script>
    <link href="./ud-css/reset.css" rel="stylesheet" />
     <link href="./ud-edit/view.css" rel="stylesheet" />
</head>

<body>
<div class="header">
	  <img alt="" src="./ud-images/logo1.png" height="50" width="65" style="margin-top:-5px"/>
 <div class="icon">
            <a href="#"><img alt="" src="images/f.gif" /></a>
            <a href="#"><img alt=""  src="images/t.png" /></a>
            <a href="#"><img alt=""  src="images/i.png" /></a>
            
        </div>

<p style="color:white;font-size:0.8em;float:right;margin:13px">

	<?php echo WELCOME; ?>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?>
<a href="logout.php?logout=0" style="color:white">&nbsp;&nbsp;<?php echo LOGOUT; ?></a>

</p>
</div>
