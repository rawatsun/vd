<?php 
$con =  mysql_connect("localhost","root","");
mysql_select_db("visiondart");

$res= mysql_query("select html from webview");
while ($row=mysql_fetch_array($res)) {
	echo $row['html'];
}
?>