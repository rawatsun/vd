<?php 

if (isset($_REQUEST['element_2'])){
$about =  $_REQUEST['element_2'];
}

if (isset($_REQUEST['element_3'])){
$para =  $_REQUEST['element_3'];
}

if (isset($_REQUEST['element_4'])){
$service1 =  $_REQUEST['element_4'];
}

if (isset($_REQUEST['element_5'])){
$service2 =  $_REQUEST['element_5'];
}

if (isset($_REQUEST['element_6'])){
$service3 =  $_REQUEST['element_6'];
}

if (isset($_REQUEST['element_7'])){
$service4 =  $_REQUEST['element_7'];
}
if (isset($_REQUEST['element_8'])){
$email =  $_REQUEST['element_8'];
}
if (isset($_REQUEST['element_9'])){
$website =  $_REQUEST['element_9'];
}

$con =  mysql_connect("localhost","root","root");
mysql_select_db("visiondart");

?>
<?php $str= <<< test
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
	<h1><a href="#">bugs life </a></h1>
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
			<p>  $service1</p>	
			<hr>
			
			<p> $service1 </p>	
			<hr>
			
			<p> $service1 </p>	
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
		</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2013 visiondart. Designed by <a href="http://freecsstemplates.org"><strong>suraj</strong></a></p>
</div>
</body>
</html>
test;
mysql_query("insert into webview values('$str')");
//header("Location: site.php");

/*
$res= mysql_query("select html from new_profile");

while ($row=mysql_fetch_array($res)) {
	echo $row['html'];
}
*/
  ?>

