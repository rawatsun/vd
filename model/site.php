<?php 
$con =  mysql_connect("localhost","root","root");
mysql_select_db("visiondart");
$res= mysql_query("select html from user_website");
while ($row=mysql_fetch_array($res)) {
	echo $row['html'];
}
?>