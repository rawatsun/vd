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
$arrayofcolumnwhere = array('blog_comments.user_id' =>$user_id);
$joinquery = "join blog_info  on blog_info.blog_id = blog_comments.blog_id";
$total_comment = $dbconnection -> totalComment("blog_comments",$arrayofcolumn,$arrayofcolumnwhere,$joinquery);


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
			<br><br><br><span>User id<?php echo "          ".$user_id;?></span>
			<br><br><br><span>Page Url<a href="<?php echo $url; ?>"><?php echo $url; ?></a></span>
			<br><br><br><span>Total Blogs<?php echo "          ".$blogs;?></span>
			<br><br><br><span>Ip Address<?php echo "          ".$ip; ?></span>
			<br><br><br><span>Selected Template<?php echo "          ".$template_name; ?></span>
			<br><br><br><span>Total Comments<?php echo "          ".$total_comment; ?></span>
		
<br><br>
<br><br>
<a href="<?php echo $url; ?>"><?php echo $url; ?></a>
		</div>							
		
		
		
	</div>
	</body>