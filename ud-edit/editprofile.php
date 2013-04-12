<?php 
	session_start();
include_once(UD_MODEL_PATH.'connnection-class.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');	
?>
<?php
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

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
$email_id = $dbconnection -> selectFromTable("users",$arrayofcolumn,$arrayofcolumnwhere);
?>



<link rel="stylesheet" type="text/css" href="<?php echo CSS_INCLUDE; ?>" media="all">
</style>
<script>
function profile()
{
  var confirmation = confirm("Your Profile will be overwritten. Do you want to continue?");
        if(confirmation == true)
	{
	    editProfile();
	}
   
}
</script>
<body id="main_body" >
	
	<div id="form_container">
	
		<form id="form_597978" class="appnitro"  method="GET" action="">
					<div class="form_description">
			<h2>Edit Your Profile</h2>
			
		</div>						
			<ul >
			
					<li id="li_1" >

		<label class="description" for="element_1"><?php echo FIRST_NAME; ?></label>
		<div>
			<input id="element_1" name="element_1" class="element text medium e1" type="text" maxlength="255" value= "<?php echo $firstname; ?>"/>
			
		</div> 
		<span class ="fname_edit"></span>
		</li>		<li id="li_2" >
		<label class="description" for="element_2"><?php echo LAST_NAME; ?></label>
		
		<div>
			<input id="element_2" name="element_2" class="element text medium e2" type="text" maxlength="255" value= "<?php echo $lastname; ?>"/>
			
		</div> 
		<span class ="lastname_edit"></span>
		</li>		<li id="li_3" >
		<label class="description" for="element_3"><?php echo DOB; ?></label>
		<div>
			<input id="element_3" name="element_3" class="element text medium e3" type="text" maxlength="255" value= "<?php echo $dob; ?>"/>
			 
		</div> 
		<span class ="dob_edit"></span>
		</li>		<li id="li_4" >
		<label class="description" for="element_4"><?php echo ADDRESS; ?></label>
		<div>
			<input id="element_4" name="element_4" class="element text medium e4" type="text" maxlength="255" value= "<?php echo $address; ?>"/> 
			
		</div> 
		<span class ="address_edit"></span>
		</li>		<li id="li_5" >
		<label class="description" for="element_5"><?php echo PHONE_NO; ?></label>
		<div>
			<input id="element_5" name="element_5" class="element text medium e5" type="text" maxlength="255" value= "<?php echo $phone; ?>"/>
			
		</div> 
		<span class ="phone_edit"></span> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6"><?php echo COUNTRY; ?></label>
		<div>
			<input id="element_6" name="element_6" class="element text medium e6" type="text" maxlength="255"/ value= "<?php echo $country; ?>"> 
			
		</div> 
		<span class ="country_edit"></span>
		</li>		<li id="li_7" >
		<label class="description" for="element_7"><?php echo EMAIL; ?></label>
		<div>
			<input id="element_7" name="element_7" class="element text medium e7" type="text" maxlength="255" value= "<?php echo $email_id; ?>"/>
			
		</div> 
		<span class ="email_edit"></span> 
		</li>		
			
	
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="Update" value="<?php echo UPDATE1 ; ?>"  onclick="profile()"/>
		</li>
			</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	</body>
