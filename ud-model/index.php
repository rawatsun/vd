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
	
	<div id="form_container">
	
				<div class="form_description-home">
					<h3></h3>
			<h2>Your Current Profile </h2>
			
			<br><br><br><span>User Name<?php echo "          ".$user_name;?></span>
			<br><br><br><span>First Name<?php echo "          ".$firstname;?></span>
			<br><br><br><span>Last Name<?php echo "          ".$lastname; ?></span>
			<br><br><br><span>Date Of Birth<?php echo "          ".$dob; ?></span>
			<br><br><br><span>Address<?php echo "          ".$address;?></span>
			<br><br><br><span>Phone<?php echo "          ".$phone; ?></span>
			<br><br><br><span>Country<?php echo "          ".$country; ?></span>
			<br><br><br><span>Email-ID<?php echo "          ".$email; ?></span>
			<br><br><br><span>Gender<?php echo "          ".$gender; ?></span>
<br><br>
<br><br>
		</div>							
		
		
		
	</div>
	</body>