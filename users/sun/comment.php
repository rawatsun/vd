<?php 
$comment="";

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");
$query = $pdo->prepare("select * from ctest where id=1");
$query->execute();

$row=$query->fetch();

$comment.= "<table>";

$comment.= "<tr><td style=background-color:#56A5EC;color:white;font-size:1.3em>";


$comment.= $row['blog']."<br>";

$comment.= "</tr></td>";


$comment.= "<tr><td>";


$comment.= $row['comment'] ."<a class=a1 href='javascript:$row[bid]' >$row[bid]<img src='delete.gif'/></a>"  . "<br>";

$comment.= "</tr></td>";

while ($row=$query->fetch()) {


$comment.= "<tr><td>";


	$comment.= $row['comment'] ."<a class=a1 href='javascript:$row[bid]' ><img src='delete.gif'/></a>" . "<br>";


$comment.= "</tr></td>";
}

$comment.= "<tr><td>";


	$comment.= "<textarea class=ta>
comment
</textarea>";

$comment.= "<input type=button onclick='insert()' value='insert' style=color:black>";
$comment.= "</tr></td>";
$comment.= "</table>";
 echo $comment;
 ?>
