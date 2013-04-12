<?php        session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>

 <?php 

$values = $_GET['id'];
$values = "'" . $values . "'";

$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");

$query = $pdo->prepare("select user_id from user_login where user_name = $user_name");
$query->execute();
$row=$query->fetch();
$user_id = $row['user_id'] ;

$query = $pdo->prepare("select blog_id from blog_info where user_id = $user_id");
$query->execute();
$row=$query->fetch();
$blog_id = $row['blog_id'] ;

$query1 = $pdo->prepare("insert into  blog_comments(blog_id,comment_data) values($blog_id,$values)");
$query1->execute();

$query = $pdo->prepare("select * from blog_comments where blog_id=$blog_id");
$query->execute();
$row=$query->fetch();

echo "<table>";

echo "<tr><td style=color:white;font-size:1.3em>";



echo "</tr></td>";


echo "<tr><td>";


echo $row['comment_data'] ."<a class=a1 href='#' onclick='run($row[comment_id])' ><img src='ud-images/delete.gif'/></a>"  . "<br>";

echo "</tr></td>";

while ($row=$query->fetch()) {


echo "<tr><td>";


	echo $row['comment_data'] ."<a class=a1 href='#' onclick='run($row[comment_id])'><img src='ud-images/delete.gif'/></a>" . "<br>";


echo "</tr></td>";
}

echo "<tr><td>";


	echo "<textarea class=ta>

</textarea>";

echo "<input type=button onclick='insert()' value='insert' style=color:black>";
echo "</tr></td>";
echo "</table>";

 ?>