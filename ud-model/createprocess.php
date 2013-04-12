<?php session_start();
$about=$name=$code=$work=$service1=$service2=$service3=$service4=$email=$website=$phone=$contact="";
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');

if (isset($_REQUEST['element_0'])){
$name =  strip_tags($_REQUEST['element_0']);
}

if (isset($_SESSION['colorcode'])){
$code =  $_SESSION['colorcode'];
}
else{
	$code = "gray";
}

if (isset($_REQUEST['element_1'])){
$about =  strip_tags($_REQUEST['element_1']);
}


if (isset($_REQUEST['element_2'])){
$work =  strip_tags($_REQUEST['element_2']);
}

if (isset($_REQUEST['element_3'])){
$service1 =  strip_tags($_REQUEST['element_3']);
}

if (isset($_REQUEST['element_4'])){
$service2 =  strip_tags($_REQUEST['element_4']);
}

if (isset($_REQUEST['element_5'])){
$service3 =  strip_tags($_REQUEST['element_5']);
}

if (isset($_REQUEST['element_6'])){
$service4 =  strip_tags($_REQUEST['element_6']);
}
if (isset($_REQUEST['element_7'])){
$email =  strip_tags($_REQUEST['element_7']);
}
if (isset($_REQUEST['element_8'])){
$website =  strip_tags($_REQUEST['element_8']);
}


if (isset($_REQUEST['element_9'])){
$phone =  strip_tags($_REQUEST['element_9']);
}
if (isset($_REQUEST['element_10'])){
$contact =  strip_tags($_REQUEST['element_10']);
}




?>
<?php


 $str= <<< test
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>index</title>
<style>
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
}

h2 { font-size: 34px; }
h3 { font-size: 18px; }

p, ol, ul, blockquote {
	line-height: 22px;
}

a {
	border-bottom: 1px dotted #707070;
	text-decoration: none;
	color: white;
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
	
	background: $code;
	border: 1px solid pink;
	border-radius: 8px;
	font-style:italic;
font-family:verdana;
font-weight:800px;
font-size:1.2em;
color:blue;
	box-shadow:1px 10px 60px 10px #D7D7D7;
}

.post h2, .post h3 {
	margin-left: -40px;
}

/* Header */

#header {
	width: 100%;
	background-color:black;
	height: 40px;
	position:fixed;
	top:0;
	left:0;
	color:white;

	opacity:0.6;
	-moz-opacity:0.6;
}

#header h1 {
	margin: 0;
	font-size: 90px;	padding: 15 0 5 0px;
	box-shadow: 0px 10px 5px gray;
	background-color:black;

}

#header h2 {
	margin: 0;
	padding: 0 0 0 92px;
	font-size: 16px;
}

#header a {
	border: none;
	letter-spacing: -1px;
	color: white;
}

/* Content */

#content {
	width: 95%;
	
	margin-top:160px;
	
}


#colTwo {
	float: right;
	width: 95%;
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
<body>
<div id="header">
	<h1><a href="#"> $name </a>  <iframe  src="http://www.facebook.com/widgets/like.php?href=https://www.facebook.com/Visiondart?skip_nax_wizard=true"
scrolling="no" 
style="float:right;border:none;color:white; width:150px; height:90px;margin:40px"></iframe></h1>
	
 
</div>

<div id="content">

	<div id="colTwo">
		<div class="post">
			<h2>About us  </h2>
			<p>$about </p>
		</div>
	
	<div class="post">
			<h2>Work & experience  </h2>
			<p>$work </p>
		</div>
			<div class="post">

			<h2>Our Services  </h2>
			<p>  $service1   </p>	
			<hr>
			<p>  $service2</p>	
			<hr>
			
			<p> $service3 </p>	
			<hr>
			
			<p> $service4 </p>	
			<hr>
		</div>
			<div class="post">
			<h2>Email Adddress</h2>
			<p>$email</p>	
			
		</div>
			<div class="post">
			<h2>Our Website</h2>
			<p>$website</p>	
			
		</div>

<div class="post">
			<h2>Phone Number</h2>
			<p>$phone</p>	
			
		</div>
		<div class="post">
			<h2>Contact Address </h2>
			<p>$contact</p>	
			
		</div>


		</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2013 visiondart. Designed by <a href="http://freecsstemplates.org"><strong>suraj</strong></a></p>
</div>
</body>
</html>
test;

$userfolder = $_SESSION['username'];

$dirname=DIRECTORY_NAME;

$filename=$dirname.$userfolder."/".$userfolder.".php";

if(!is_dir($dirname.$userfolder))
{

mkdir($dirname.$userfolder, 0777, True);

}
else
{
 
}

echo $dirname ."=" .$filename. "=". $name;




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


$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$id = $dbconnection -> selectColumn("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);


$myFile ="users/".$userfolder."/".$userfolder.".php";
$myFile = "'". $myFile . "'";

    if(trim($id) == "1") //if user exists in user_page_link then update his page information.
    {
        $arrayofcolumnupdate = array('page_link' => $myFile);
        $arrayofcolumnupdatewhere = array('user_id' =>$user_id);
        $dbconnection->updateToTable("user_page_link",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);
    }

    else if(trim($id) == "2")  //else insert his record.
    {
        $arrayofcolumninsert = array('user_id' =>$user_id,'page_link' => $myFile);
        $ans = $dbconnection -> insertIntoTable("user_page_link",$arrayofcolumninsert);
    }
    
    
  ?>

