<?php session_start();
header("Content-Type: image/png");
$match=rand(1000,9999);
$_SESSION['match']=$match;
$im = @imagecreate(85, 25)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 255,255);
imagestring($im, 11, 15, 5, $_SESSION['match']  , $text_color);


imagepng($im);
?>