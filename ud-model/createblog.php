<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');


$blogdesc=$blogdata="";
$user_id = $blog_id="";

if (isset($_SESSION['userid'])){

$user_id = $_SESSION['userid'];
	
}
if (isset($_SESSION['blogid'])){

$blog_id = $_SESSION['blogid'];
	
}

if (isset($_REQUEST['element_1'])){
$blogdesc =  $_REQUEST['element_1'];
}
if (isset($_REQUEST['element_2'])){
$blogdata =  $_REQUEST['element_2'];
}
$name = $_SESSION['username'];
$name = $name . " " . "blog";
?>
<?php
 /*$comment =file_get_contents('../ud-model/comment.txt');

echo $comment;*/

$pdo=new PDO("mysql:host=localhost;dbname=visiondart","root","root") or die("not connected");
$query = $pdo->prepare("select blog_id from blog_info where  user_id=$user_id limit 1");
$query->execute();
$row=$query->fetch();
$blog_id = $row['blog_id'] ;
$query = $pdo->prepare("delete  from blog_comments where blog_id=$blog_id");
$query->execute();
$str= <<< test
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php 
  	include_once('$_SERVER[DOCUMENT_ROOT]/vision/trunk/library/common.inc.php');

  include_once('$_SERVER[DOCUMENT_ROOT]/vision/trunk/db-model/sendingrequest.php'); 

  echo 'SITE_ROOT/db-model/sendingrequest.php';
  ?>

  <script src="../../ud-jquery-lib/jquery-1.8.3.js" type="text/javascript"></script>
  <script src="../../ud-js/JScript.js" type="text/javascript"></script>
<head>
<title>index</title>
<style>
input[type='button']{
	overflow:visible;
	padding:8px;
	border: 1px solid white;
	border-radius: 4px;
	width:auto;
	background-color: #2F5ED1;
	color: white;
}
input[type='button']:hover{

	background-color: #2F5EDf;
	color: #eee;
	cursor:pointer;
}
table{
width: 100%;
background-color: #eee;
padding: 10px;
font-style:italic;
font-family:verdana;
font-weight:800px;
font-size:1.2em;
color:blue;
}
tr ,td {
padding: 10px;
background-color: white;

font-style:italic;
font-weight:800px;
font-size:1.2em;
color:blue;
}

img{
	border: none;
}

.ta{
	width: 100%;
	font-size: 1em;
	height: 100px;
	border: 1px solid gray;
	background-color: #eee;

font-style:italic;
font-weight:800px;
font-size:1.2em;
}
body {
	margin: 0;
	padding: 0;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: white;
}

h1, h2, h3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: normal;
	font-style: italic;
	color: black;
	text-align:left;
}

h2 { font-size: 34px; }
h3 { font-size: 18px; }

p, ol, ul, blockquote {
	line-height: 22px;
}

a {
	border-bottom: 1px dotted #707070;
	text-decoration: none;
	color: #BFBFBF;
}

a:hover {
	border: none;
}

strong {
	color: #8D8C8C;
}

/* Posts */

.post {
	margin-bottom: 9px;
	padding: 20px 40px 20px 60px;
	background: #0987CD;
	border: 1px solid pink;
	border-radius: 8px;
	box-shadow:1px 10px 60px 10px #D7D7D7;
}

.post h2, .post h3 {
	margin-left: -40px;
}

/* Header */

#header {
	width: 100%;
	background-color:black;
	
	position:fixed;
	top:0;
	left:0;
	text-align:left;
	opacity:0.7;-moz-opacity:0.7;
}

#header h1 {
	margin: 0;
	font-size: 90px;	padding: 15 0 5 0px;
	box-shadow: 0px 10px 5px gray;
	background-color:black;
	width:100%;
	text-align:left;
	float:left;
}

#header h2 {
	margin: 0;
	padding: 0 0 0 92px;
	font-size: 16px;
}

#header a {
	border: none;
	letter-spacing: -1px;
	color: #D676A6;
}

/* Content */

#content {
	width: 960px;
	margin: 10 auto;
	margin-top:160px;
	padding: 10px;
}


#colTwo {
	float: right;
	width: 960px;
}

/* Footer */

#footer {
	clear: both;
	width: 580px;
	margin: 0 auto;
	padding-top: 20px;
}

#footer p {
	margin: 0;
	text-align: center;
	font-size: 9px;
}

#footer * {
	color: #333333;
}
p{
	color:white;
	font-style:italic;
	font-family:verdana;
	font-size:1.5em;
}

</style>
</head>
 <body onload="loadComment($user_id)">
<div id="header">
	<h1><a href="#"> $name </a></h1>
</div>

<div id="content">

	<div id="colTwo">
		<div class="post">
			<h2>Blog description  </h2>
			<p>$blogdesc </p>
		</div>
	
			<div class="post">

			<p>  $blogdata   </p>	
			
			</div>


			<div class="post" style="background-color:white">

			<p>     
			<div class=add>

				</div>

			</p>	
			
			</div>
		</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2013 visiondart. Designed by <a href="#"><strong>suraj</strong></a></p>
</div>
</body>
</html>
test;

$userfolder = $_SESSION['username'];

$dirname=DIRECTORY_NAME;

$filename=$dirname.$userfolder."/".$userfolder."blog.php";
if(!is_dir($dirname.$userfolder))
{

mkdir($dirname.$userfolder, 0777, True);

}
else
{
 
}

echo $dirname ."=" .$filename. "=". $blogdesc;




$myFile =$filename;
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $str);

fclose($fh);


$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse("localhost","visiondart","root","root");

//$use = array();


$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'";

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);
$id1 = $dbconnection -> selectColumn("blog_info",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$id = $dbconnection -> selectColumn("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);


$myFile ="users/".$userfolder."/".$userfolder."blog.php";
$myFile = "'". $myFile . "'";


if(trim($id) == "1")  //if user exists in user_page_link then update his blog information.
{
    $arrayofcolumnupdate = array('blog_page_link' => $myFile);
    $arrayofcolumnupdatewhere = array('user_id' =>$user_id);
    $dbconnection->updateToTable("user_page_link",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);

}

else if(trim($id) == "2")  //else insert his record.
{


    $arrayofcolumninsert = array('user_id' =>$user_id,'blog_page_link' => $myFile);
    $ans = $dbconnection -> insertIntoTable("user_page_link",$arrayofcolumninsert);
}


if(trim($id1) == "1")  //if user exists in user_page_link then update his blog information.
{
    $arrayofcolumnupdate = array('user_id' => $user_id);
    $arrayofcolumnupdatewhere = array('user_id' =>$user_id);
    $dbconnection->updateToTable("blog_info",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);

}
else if(trim($id1) == "2")  //else insert his record.
{

    $arrayofcolumninsert1 = array('user_id' =>$user_id);

    $ans = $dbconnection -> insertIntoTable("blog_info",$arrayofcolumninsert1);
}


  ?>

