<?php 
$con =  mysql_connect("localhost","root","");
mysql_select_db("visiondart");

?>
</style>
<?php 


$str= '
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Fill your website information</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

<style>


#form_container
{
	background:#fff;
	margin:0 auto;
	text-align:left;
	width:640px;
}

#top
{
	display:block;
	height:10px;
	margin:10px auto 0;
	width:650px;
}

#footer1
{
	width:640px;
	clear:both;
	color:#999999;
	text-align:center;
	width:640px;
	padding-bottom: 15px;
	font-size: 85%;
}

#footer1 a{
	color:#999999;
	text-decoration: none;
	border-bottom: 1px dotted #999999;
}

#bottom
{
	display:block;
	height:10px;
	margin:0 auto;
	width:650px;
}

form.appnitro
{
	margin:20px 20px 0;
	padding:0 0 20px;
}

/**** Logo Section  *****/
h1
{
	background-color:#dedede;
	margin:0;
	min-height:0;
	padding:0;
	text-decoration:none;
	text-indent:-8000px;
	
}


form ul
{
	font-size:100%;
	list-style-type:none;
	margin:0;
	padding:0;
	width:100%;
}

form li
{
	display:block;
	margin:0;
	padding:4px 5px 2px 9px;
	position:relative;
}

form li:after
{
	clear:both;
	display:block;
	height:0;
	visibility:hidden;
}

.buttons:after
{
	clear:both;
	display:block;
	height:0;
	visibility:hidden;
}

.buttons
{
	clear:both;
	display:block;
	margin-top:10px;
}

* html form li
{
	height:1%;
}

* html .buttons
{
	height:1%;
}

* html form li div
{
	display:inline-block;
}

form li div
{
	color:#444;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li span
{
	color:#444;
	float:left;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li div.left
{
	display:inline;
	float:left;
	width:48%;
}

form li div.right
{
	display:inline;
	float:right;
	width:48%;
}

form li div.left .medium
{
	width:100%;
}

form li div.right .medium
{
	width:100%;
}

.clear
{
	clear:both;
}

form li div label
{
	clear:both;
	color:#444;
	display:block;
	font-size:9px;
	line-height:9px;
	margin:0;
	padding-top:3px;
}





input.text
{
	color:#333;
	font-size:100%;
	margin:0;
	padding:2px 0;
}

textarea.textarea
{
		color:#333;
	font-size:100%;
	margin:0;
	width:99%;
}


*:first-child+html select.select[class]
{
	margin:1px 0;
}

input.small
{
	width:25%;
}

select.small
{
	width:25%;
}

input.medium
{
	width:50%;
}

select.medium
{
	width:50%;
}

input.large
{
	width:99%;
}

select.large
{
	width:100%;
}

textarea.small
{
	height:5.5em;
}

textarea.medium
{
	height:10em;
}

textarea.large
{
	height:20em;
}

.description
{
	color:black;
	font-family:verdana;
	font-style:italic;
}
input[type=text],.textarea{
	border:1px pink solid;
	border-radius:4px;

}
input[type=submit]{
	border:1px pink solid;
	border-radius:4px;
	background-color:#800080;
	color:white;
	padding:5px;
font-style:italic;


}
input[type=submit]:hover{
	background-color:#A828A8;
	
	


}
</style>



</head>
<body id="main_body" >
	
	<div id="form_container">
	
		<form id="form_594474" class="appnitro"  method="post" action="model/process.php">
					<div class="form_description">
			<h2>Fill your website information</h2>
		</div>						
			<ul >
				<li id="li_2" >
		<label class="description" for="element_2" style="float:left">About us  </label>
		<div>
			<input id="element_2" name="element_2" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Paragraph </label>
		<div>
			<textarea id="element_3" name="element_3" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">service1 </label>
		<div>
			<input id="element_4" name="element_4" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_4"><small>Enter you services here </small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_5">service2 </label>
		<div>
			<input id="element_6" name="element_5" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_6"><small>Enter you services here </small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_6">service3 </label>
		<div>
			<input id="element_5" name="element_6" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Enter you services here </small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">service4 </label>
		<div>
			<input id="element_7" name="element_7" class="element text large" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_7"><small>Enter you services here </small></p> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Email </label>
		<div>
			<input id="element_8" name="element_8" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Web Site </label>
		<div>
			<input id="element_9" name="element_9" class="element text medium" type="text" maxlength="255" value="http://"/> 
		</div> 
		</li>		<li id="li_10" >
	
	
			</li>
			
					<li class="buttons">
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	</body>
</html>
';
mysql_query("insert into new_profile values(1,'$str')");
$res= mysql_query("select html from new_profile");
while ($row=mysql_fetch_array($res)) {
	echo $row['html'];
}


  ?>

