<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo ADMIN_DASHBOARD; ?></title>
    <script src="jquery-lib/jquery-1.8.3.js" type="text/javascript"></script>
    <script src="admin-js/JScript.js" type="text/javascript"></script>
    <link href="./ud-css/reset.css" rel="stylesheet" />
</head>

<body>
    <div class="main-container">
       <?php include_once('adminresource/header.php') ?>
       <?php include_once('adminresource/leftpannel.php') ?>
       <?php include_once('adminresource/content.php') ?>
       <?php include_once('adminresource/rightpannel.php') ?>
       <div class="clearfloat"></div>
    </div>
</body>
</html>