<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>

<script>
function page()
{
  var confirmation = confirm("Your previous page will be overwritten. Do you want to continue?");
        if(confirmation == true)
	{
	    createPage();
	}
   
}
</script>
<body id="main_body" >
	
	<div id="form_container" >
	
		<form id="form_59" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2 ><?php echo WEBSITE_CONTENT; ?></h2>
			<p><?php echo WEBSITE_SUB_HEADING; ?></p>
		</div>						
			<ul >
			
					<li id="li_1" >

		<label class="description" for="element_1"><?php echo ABOUT_US; ?></label>
		<div>
			<textarea id="element_1" name="element_1" class="element textarea small c1"></textarea> 
			<span class ="about"></span>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2"><?php echo WORK_EXPERIENCES; ?></label>
		<div>
			<textarea id="element_2" name="element_2" class="element textarea medium c2"></textarea> 
			<span class ="work"></span>
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"><?php echo PRODUCT_SERVICES; ?></label>
		<div>
			<textarea id="element_3" name="element_3" class="element textarea small c3"></textarea> 
			<span class ="product1"></span>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4"><?php echo PRODUCT_SERVICES; ?></label>
		<div>
			<textarea id="element_4" name="element_4" class="element textarea small c4"></textarea> 
			<span class ="product2"></span>
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5"><?php echo PRODUCT_SERVICES; ?></label>
		<div>
			<textarea id="element_5" name="element_5" class="element textarea small c5"></textarea> 
			<span class ="product3"></span>
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6"><?php echo PRODUCT_SERVICES; ?></label>
		<div>
			<textarea id="element_6" name="element_6" class="element textarea small c6"></textarea> 
			<span class ="product4"></span>
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7"><?php echo EMAIL; ?></label>
		<div>
			<input id="element_7" name="element_7" class="element text medium c7" type="text" maxlength="255"/> 
			
		</div> 
		<span class ="email_page"></span>
		</li>		<li id="li_8" >
		<label class="description" for="element_8"><?php echo WEBSITE; ?></label>
		<div>
			<input id="element_8" name="element_8" class="element text medium c8" type="text" maxlength="255" /> 
		
		</div> 
		<span class ="website"></span>
		</li>		<li id="li_9" >
		<label class="description" for="element_9"><?php echo PHONE_NO; ?></label>
		<span>
			<input id="element_9_1" name="element_9" class="element text lasrge c9" type="texc1t" maxlength="12"/>
			
			
		</span>

	
		 
		</li>
		<span class ="phone" style="margin-left:10px;"></span> 	

     <li id="li_9" >
		<label class="description" for="element_9"><?php echo SITE_TITLE; ?></label>
		<span>
			<input id="element_9_1" name="element_0" class="element text lasrge c10" type="text" maxlength="255"/> 
			
		</span>
	    
		 
		</li>
		<span class ="title" style="margin-left:10px;"></span>	
			<li id="li_10" >
		<label class="description" for="element_10"><?php echo CONTACT_ADDRESS; ?></label>
		<div>
			<textarea id="element_10" name="element_10" class="element textarea medium c11"></textarea> 
			<span class ="contact"></span>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="submit" value="Submit" onclick="page()" />
		</li>
			</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	</body>