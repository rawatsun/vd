<?php session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once(UD_MODEL_PATH.'/connnection-class.php');
 

$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

$user_name=$_SESSION['username'];

$user_name = "'".$user_name."'"; 

$arrayofcolumn = array('user_id');
$arrayofcolumnwhere = array('user_name' =>$user_name);
$user_id = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('blog_id');
$arrayofcolumnwhere = array('user_id' =>$user_id);
$blog_id = $dbconnection -> selectFromTable("blog_info",$arrayofcolumn,$arrayofcolumnwhere);

$arrayofcolumn = array('comment_data');
$arrayofcolumnwhere = array('blog_id' =>$blog_id);
$comment_data = $dbconnection -> selectCommentFromTable("blog_comments",$arrayofcolumn,$arrayofcolumnwhere);

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
			<h2><?php echo COMMENTS_MADE; ?></h2>
			</div>
			<table>
			<tr><td><?php echo $comment_data;?></td></tr>
			</table>
		
<br><br>
<br><br>					
		</div>
		
		
	</div>
	</body>