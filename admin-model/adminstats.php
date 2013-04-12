<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once('connnection-class.php');
	
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
$codetorun="";
//$use = array();
if ( isset($_REQUEST['codetorun'])){
	$codetorun=$_REQUEST['codetorun'];
}


if ( $codetorun == "0" ){
	if (isset($_REQUEST["search"]))
     {
     $username = $_REQUEST["search"];
     $username = "'".$username."'";
     }
 
$arrayofcolumndeletewhere = array('user_name' =>$username);
$result = $dbconnection->deleteFromTable("user_login",$arrayofcolumndeletewhere);

$userfolder = $_REQUEST['search'];
$dirname=DIRECTORY_NAME;

$filename=$dirname.$userfolder."/".$userfolder.".php";
$filename1=$dirname.$userfolder."/".$userfolder."blog.php";

unlink($filename);
unlink($filename1);

if($result == "1")
{
echo "1";
}
else
{
echo "2";
}
}

$user_name=$_SESSION['username-admin'];

$user_name = "'".$user_name."'"; 

$page_link="like 'u%'"  ;

$arrayofcolumn = array('count(*)');
$total_users = $dbconnection -> selectFromTable("user_login",$arrayofcolumn);

$arrayofcolumn = array('count(page_link)');
$arrayofcolumnwhere = array('page_link' =>$page_link );
$total_page_users = $dbconnection -> selectFromTable1("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);
$arrayofcolumn = array('count(blog_page_link)');
$arrayofcolumnwhere = array('blog_page_link' =>$page_link );
$total_blog_users = $dbconnection -> selectFromTable1("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);

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
			
             
			<br><br><br><span><?php echo REGISTERED_USERS; ?></span><span class="val"><?php echo $total_users; ?></span>
			<br><br><br><span><?php echo TOTAL_PAGES; ?></span><span class="val"><?php echo $total_page_users; ?></span>
			<br><br><br><span><?php echo TOTAL_BLOG; ?></span><span class="val"><?php echo $total_blog_users; ?></span>
			<br><br><br>
<br><br>
<br><br>
		</div>							
		
		
		
	</div>
	</body>