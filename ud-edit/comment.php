<?php        session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
   <style type="text/css">
table{
	width: 100%;
	background-color: #eee;
	padding: 10px;

}
tr ,td {
padding: 10px;
background-color: white;
}
.a1{
	float: right;
	border: none;
	text-decoration: none;
	padding: 3px;
	font-size: 0.8em;
	color:black;
}
img{
	border: none;
}
input[type='button']{
	border: 1px solid green;
}
input[type='button']:hover{
	background-color: #eee;
	cursor: pointer;


}
.ta{
	width: 100%;
	font-size: 1em;
	height: 100px;
	border: 1px solid gray;
	background-color: #eee;
}
.add{
	text-align: left;
}
</style>
	<div class="form_description"><h2 style="text-align:left">Comments on Your Blog</h2></div>

<div class="add">

<?php 

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");

$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$query = $pdo->prepare("select user_id from user_login where user_name = $user_name");
$query->execute();
$row=$query->fetch();
$user_id = $row['user_id'] ;


$query = $pdo->prepare("select blog_id from blog_info where user_id = $user_id");
$query->execute();
$row=$query->fetch();
$blog_id = $row['blog_id'] ;


$query = $pdo->prepare("select * from blog_comments  where blog_id=$blog_id");
$query->execute();
$row=$query->fetch();

echo "<table>";

echo "<tr><td style=color:white;font-size:1.3em>";



echo "</tr></td>";


echo "<tr><td>";


echo $row['comment_data'] ."<a class=a1 href='#' onclick='run($row[comment_id])'><img src='ud-images/delete.gif'/></a>"  . "<br>";

echo "</tr></td>";

while ($row=$query->fetch()) {


echo "<tr><td>";


	echo $row['comment_data'] ."<a class=a1 href='#' onclick='run($row[comment_id])' ><img src='ud-images/delete.gif'/></a>" . "<br>";


echo "</tr></td>";
}

echo "<tr><td>";


	echo "<textarea class=ta>

</textarea>";

echo "<input type=button onclick='insert()' value='insert' style=color:black>";
echo "</tr></td>";
echo "</table>";

 ?>
</div>