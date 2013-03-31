<?php 

$fn="fn"; 
$dbconnection="";





ob_start();
include 'ud-model/a.php';
$include = ob_get_contents();
ob_end_clean();


$str=<<<test
{$include}
{echo $fn('2')}

test;

echo $str;

 ?>