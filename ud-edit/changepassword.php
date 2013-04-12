<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	?>


<body id="main_body" >
	
	

<div id="form_container" >

	
		<form id="form_597978" class="appnitro"  method="GET" action="">
	

				<div class="form_description">
			<h2><?php echo CHANGE_PASSWORD; ?></h2>
			
		</div>	

					
			<ul >
			
					<li 

id="li_1" >

		<label class="description" for="element_1"><?php echo OLD_PASSWORD; ?></label>
		<div>
		<input id="element_1" name="element_1" class="element text medium element_1" type="text" maxlength="255"/> 
		</div> 
		<span class ="old_edit"></span>
		</li>

<li id="li_2" >
		<label class="description" for="element_2"><?php echo NEW_PASSWORD; ?></label>
		<div>
		<input id="element_2" name="element_2" class="element text medium element_2" type="text" maxlength="255" value=""/>		
	    </div> 
	     <span class ="new_edit"></span>
		</li>		

<li id="li_3" >
		<label class="description" for="element_3"><?php echo NEW_PASSWORD_AGAIN; ?></label>
		<div>
		<input id="element_3" name="element_3" class="element text medium element_3" type="text" maxlength="255" value=""/> 
        </div> 
        <span class ="renew_edit"></span>
		</li>

<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="Change Password" value="Change Password"  onclick="changePassword()"/>
	   	</li>
			</ul>
		</form>	
	

</div>
	</body>
