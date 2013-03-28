<?php session_start();

$userfolder = $_SESSION['username'];
$myFile =$_SERVER['DOCUMENT_ROOT']."vd/trunk/users/".$userfolder . "/". $userfolder.".php";
$fh = fopen($myFile, 'r') or die("can't open file");
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>