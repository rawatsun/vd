<?php session_start();
	include_once('../ud-model/connnection-class.php');
 

$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse("localhost","visiondart","root","root");

//$use = array();
if (isset($_REQUEST['codetorun'])){
	if ( $_REQUEST['codetorun'] == "1" ){
$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$arrayofcolumn = array('first_name');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$firstname = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('last_name');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$lastname = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('date_of_birth');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$dob = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('address');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$address = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('phone');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$phone = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('country');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$country = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('email_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$email = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('gender');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$gender = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);
}
}
//$blog_comments="blog_comments";
//$blog_info="blog_info";


$dbconnection ->closeConnection();
 ?>

<link rel="stylesheet" type="text/css" href="./dbhomediv/view.css" media="all">
<script type="text/javascript" src="dbhomediv/view.js"></script>

<body id="main_body" >
	
	<style type="text/css">
	h2{

		margin-top:2px;
		font-weight: bold;
		width: 94.9%;
		padding: 20px;
		font-size: 1.6em;
		font-family: verdana;
		font-style: italic;
		color: black;
		background-color: #C3C3C3;

	}
	span{
		font-size: 1.3em;
		font-family: verdana;
		font-style: italic;
		color: black;
		margin: 5px;
		margin-left: 15px;
		
	}
	.val a{
		color:blue;
	}
	.val{

		font-size: 1.3em;
		font-family: verdana;
		font-style: italic;
		color: black;
		margin: 5px;
		margin-right: 45px;
		
		float: right;

		color:blue;
	}
	</style>
	<div id="form_container">
	
				<div class="form_description-home">
						<h1><a></a></h1>
		<div class="form_description">
			<h2>your current profile</h2>
			</div>
			
			<br><br><br><span>User Name</span><span class="val"><?php echo $_SESSION['username'];?></span>
			<br><br><br><span>First Name</span><span class="val"><?php echo $firstname;?></span>
			<br><br><br><span>Last Name</span><span class="val"><?php echo $lastname; ?></span>
			<br><br><br><span>Date Of Birth</span><span class="val"><?php $dob; ?></span>
			<br><br><br><span>Address</span><span class="val"><?php echo $address;?></span>
			<br><br><br><span>Phone</span><span class="val"><?php echo $phone; ?></span>
			<br><br><br><span>Country</span><span class="val"><?php echo $country; ?></span>
			<br><br><br><span>Email-ID</span><span class="val"><?php echo $email; ?></span>
			<br><br><br><span>Gender</span><span class="val"><?php echo $gender; ?></span>
<br><br>
<br><br>
		</div>							
		
		
		
	</div>
	</body>