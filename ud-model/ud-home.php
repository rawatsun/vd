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


$arrayofcolumn = array('page_link');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$url = $dbconnection -> selectFromTable("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);


$blog_id = "'".$_SESSION['blogid']."'";


$arrayofcolumn = array('blog_page_link');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$blogurl = $dbconnection -> selectFromTable("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('ip_address');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$ip = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('template_name');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$template_name = $dbconnection -> selectFromTable("user_template",$arrayofcolumn,$arrayofcolumnwhere);


//$blog_comments="blog_comments";
//$blog_info="blog_info";
$arrayofcolumngroupby="";
$arrayofcolumn = array('count(*)');
$arrayofcolumnwhere = array('blog_info.user_id' =>$user_id);
$joinquery = "join blog_info  on blog_info.blog_id = blog_comments.blog_id";
$total_comment = $dbconnection -> jointable("blog_comments",$arrayofcolumn,$arrayofcolumnwhere,$arrayofcolumngroupby,$joinquery);


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
			<h2><?php echo HOME_DATA; ?></h2>
			</div>
			<br><br><br><span>User Name</span><span class="val"><?php echo $_SESSION['username'];?></span>
			<br><br><br><span>User id</span><span class="val"><?php echo $user_id;?></span>
			<br><br><br><span>Page Url</span><span class="val"><a href="<?php echo $url; ?>"><?php echo $url; ?></a></span>
			<br><br><br><span>Blogs Url</span><span class="val"><a href="<?php echo $blogurl;?>"><?php echo $blogurl; ?></a></span>
			<br><br><br><span>Ip Address</span><span class="val"><?php echo $ip; ?></span>
			<br><br><br><span>Selected Template</span><span class="val"><?php echo $template_name; ?></span>
			<br><br><br><span>Total Comments</span><span class="val"><?php echo $total_comment; ?></span>
		
<br><br>
<br><br>					
		</div>
		
		
	</div>
	</body>
