<?php 

if (isset($_REQUEST['element_0'])){
$name =  $_REQUEST['element_0'];
}
if (isset($_REQUEST['element_1'])){
$about =  $_REQUEST['element_1'];
}


if (isset($_REQUEST['element_2'])){
$work =  $_REQUEST['element_2'];
}

if (isset($_REQUEST['element_3'])){
$service1 =  $_REQUEST['element_3'];
}

if (isset($_REQUEST['element_4'])){
$service2 =  $_REQUEST['element_4'];
}

if (isset($_REQUEST['element_5'])){
$service3 =  $_REQUEST['element_5'];
}

if (isset($_REQUEST['element_6'])){
$service4 =  $_REQUEST['element_6'];
}
if (isset($_REQUEST['element_7'])){
$email =  $_REQUEST['element_7'];
}
if (isset($_REQUEST['element_8'])){
$website =  $_REQUEST['element_8'];
}


if (isset($_REQUEST['element_9'])){
$phone =  $_REQUEST['element_9'];
}
if (isset($_REQUEST['element_10'])){
$contact =  $_REQUEST['element_10'];
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
	background: #AFAFAF;
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
	height: 40px;
	position:fixed;
	top:0;
	left:0;
	opacity:0.7;-moz-opacity:0.7;
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
<body>
<div id="header">
	<h1><a href="#"> $name </a></h1>
</div>

<div id="content">

	<div id="colTwo">
		<div class="post">
			<h2>About us  </h2>
			<p>$about </p>
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

$db = new PDO('mysql:dbname=visiondart;host=localhost', 'root', 'root');
$stmt = $db->prepare('INSERT into user_website  VALUES (?,?,?)');
$user_id = 2 ;
$template_id =2;
 
$stmt->bindParam(1, $user_id,PDO::PARAM_INT);

$stmt->bindParam(2, $str, PDO::PARAM_LOB);

$stmt->bindParam(3, $template_id,PDO::PARAM_INT);

$db->beginTransaction();
$stmt->execute();
$db->commit();
header("Location: site.php");

/*
$res= mysql_query("select html from new_profile");

while ($row=mysql_fetch_array($res)) {
	echo $row['html'];
}
*/
  ?>

