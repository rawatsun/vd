<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
	
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

//$use = array();

$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('login_time');
$arrayofcolumnwhere = array('user_id' =>$user_id." order by login_time desc limit 3");
$login_time = $dbconnection -> selectFromTable("login_details",$arrayofcolumn,$arrayofcolumnwhere);
$arr = explode(",", $login_time);

/*
$arrayofcolumn = array('bc.blog_id');
$arrayofcolumnwhere = array('bf.user_id' =>$user_id);
$arrayofcolumngroupby=array('bf.blog_id'." order by count(comment_data) desc limit 1");
$joinquery = "join blog_info bf  on bf.blog_id = bc.blog_id";
$most_commented_blog = $dbconnection -> jointable("blog_comments bc",$arrayofcolumn,$arrayofcolumnwhere,$arrayofcolumngroupby,$joinquery);


$arrayofcolumn = array('blog_data');
$arrayofcolumnwhere = array('blog_id' =>$most_commented_blog);
$blog = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);
*/
$arrayofcolumn = array('max(blog_time)');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$last_blog = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('last_profile_updated');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$last_profile_updated = $dbconnection -> selectFromTable("profile_details",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('ip_address');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$last_ip_address = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);



$dbconnection ->closeConnection();
 ?>

<link rel="stylesheet" type="text/css" href="./ud-edit/view.css" media="all">
<script type="text/javascript" src="ud-edit/view.js"></script>

<body id="main_body" >


	<style type="text/css">

	span{
		font-size: 1.3em;
		font-family: verdana;
		font-style: italic;
		color: black;
		margin: 5px;
		margin-left: 15px;
		

	}
		h2{

		margin-top:2px;
		font-weight: bold;
		width: 94.9%;
		padding: 20px;
		font-size: 1.4em;
		font-family: verdana;
		font-style: italic;
		color: black;
		background-color: #C3C3C3;

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

<div class="form_description">
			<h2><?php date_default_timezone_set('Asia/Kolkata');echo date("F j, Y, g:i a");?></h3>
			</h2>
			</div><!--<br><br><br><span><h2></h2></span>-->
			
             
			<br><br><br><span>Last Blog Updated </span><span class="val"><?php echo $last_blog; ?></span>
			<br><br><br><span>Last profile Updated </span><span class="val"><?php echo $last_profile_updated;?></span>
			<br><br><br><span>Last IP Address </span><span class="val"><?php echo $last_ip_address;?></span>
			<br><br><br><span>Last 3 Login Time</span><span class="val"><?php  for ($i=0; $i < count($arr) ; $i++) { echo $arr[$i];  echo "<br>";} ?></span> 
			<br><br><br>
<br><br>
<br><br>
		</div>							
		
		
		
	</div>
	</body>