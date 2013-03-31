<?php session_start();
	include_once('../ud-model/connnection-class.php');
 

$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse("localhost","visiondart","root","root");

//$use = array();

$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('page_link');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$url = $dbconnection -> selectFromTable("user_page_link",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('count(blog_id)');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$blogs = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);


$arrayofcolumn = array('ip_address');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$ip = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('template_name');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$template_name = $dbconnection -> selectFromTable("user_template",$arrayofcolumn,$arrayofcolumnwhere);


//$blog_comments="blog_comments";
//$blog_info="blog_info";

$arrayofcolumn = array('count(*)');
$arrayofcolumnwhere = array('blog_info.user_id' =>$user_id);
$joinquery = "join blog_info  on blog_info.blog_id = blog_comments.blog_id";
$total_comment = $dbconnection -> totalComment("blog_comments",$arrayofcolumn,$arrayofcolumnwhere,$joinquery);


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
		font-size: 1.6em;
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

		<h1><a></a></h1>
		<div class="form_description">
			<h2>your current website information</h2>
			</div>
			<br><br><br><span>User Name</span><span class="val"><?php echo $_SESSION['username'];?></span>
			<br><br><br><span>User id</span><span class="val"><?php echo $user_id;?></span>
			<br><br><br><span>Page Url</span><span class="val"><a href="<?php echo $url; ?>"><?php echo $url; ?></a></span>
			<br><br><br><span>Total Blogs</span><span class="val"><?php echo $blogs;?></span>
			<br><br><br><span>Ip Address</span><span class="val"><?php echo $ip; ?></span>
			<br><br><br><span>Selected Template</span><span class="val"><?php echo $template_name; ?></span>
			<br><br><br><span>Total Comments</span><span class="val"><?php echo $total_comment; ?></span>
		
<br><br>
<br><br>					
		</div>
		
		
	</div>
	</body>