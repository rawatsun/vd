<?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	?>
<html>
	<head>
   
	<script>
	function showUser(str) 
	{
		if (str.length==0) { 
			document.getElementById("txtHint").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest) {  		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {				// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","admin-html/admindelete1.php?name="+str);
		xmlhttp.send();
	}
	
</script>

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
			<h2><?php echo DELETE_USER; ?></h2>
			</div>
			<span><?php echo SEARCH; ?></span><span class="val"></span> 
			<br><br><br><span><?php echo USER_NAME; ?></span><span class="val"><input type="text" onkeyup="showUser(this.value)" id="search" name="search"></span>
			<br><br><br><span><?php echo SUGGEST; ?></span><span class="val"><span id="txtHint"></span></span>

			
			<br><br><br>
			<span class="val"><input type="button" id="delete" onclick="selectAdminDelete()"value="<?php echo DELETE1; ?>"/></span>
<br><br>
<br><br>
		</div>							
	</div>
	</body>
</script>
</html>
	
