<?php 
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
	
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

if (isset($_GET['id'])){

$values = $_GET['id'];
	
}

if (isset($_GET['user_id'])){

$user_id = $_GET['user_id'];
	
}

$arrayofcolumn = array('number_of_comments');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$b = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);
$b=$b+1;
$arrayofcolumnupdate = array('number_of_comments' =>$b);
$arrayofcolumnupdatewhere = array('user_id' =>$user_id);
$result = $dbconnection->updateToTable("blog_info",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);


$pdo=new PDO("mysql:host=localhost;dbname=visiondart",UNAME,DB_PASSWORD) or die("not connected");


$query = $pdo->prepare("select blog_id from blog_info where  user_id=$user_id limit 1");



$query->execute();

$row=$query->fetch();

$blog_id = $row['blog_id'] ;


$values = "'" . $values . "'";

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");
$query1 = $pdo->prepare("insert into blog_comments values($blog_id,$values,'')");
$query1->execute();

$comment="";

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");
//$query = $pdo->prepare("select * from ctest where id=1");
$query = $pdo->prepare("select comment_data,bc.comment_id from blog_comments bc join blog_info bf on bf.blog_id=bc.blog_id where bf.user_id=$user_id");
$query->execute();

$row=$query->fetch();
$comment.= "<table>";
$comment.= "<tr><td style=background-color:white;color:black;>";
$comment.= "<img src='../../ud-images/proimg1.png'height=45 width=50 />"."&nbsp;&nbsp;&nbsp;&nbsp; ".$row['comment_data'] . "<br>";
$comment.= "</tr></td>";

while ($row=$query->fetch()) {
$comment.= "<tr><td style=color:black;>";
$comment.= "<img src='../../ud-images/proimg.png'height=45 width=50 />"."&nbsp;&nbsp;&nbsp;&nbsp; ".$row['comment_data'] . "<br>";


$comment.= "</tr></td>";
}

$comment.= "<tr><td style=color:black;>";
$comment.= "<textarea class=ta>

</textarea>";

$comment.= "<input type='button' onclick='insertComment($user_id)' value='comment'  />";
$comment.= "</tr></td>";
$comment.= "</table>";
 echo $comment;
 ?>