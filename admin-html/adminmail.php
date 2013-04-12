<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_INCLUDE; ?>" media="all">

<body id="main_body" >
	
	<div id="form_container">
	
		<form id="form_597978" class="appnitro"  method="GET" action="">
					<div class="form_description">
			<h2><?php echo MAIL_SETTINGS; ?></h2>
			
		</div>						
			<ul >
			
					<li id="li_1" >

		<label class="description" for="element_1"><?php echo FIRST_NAME; ?> </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium mailfname" type="text" maxlength="255"/> 
            
		</div> 
		<span class ="first"></span>
		</li>		<li id="li_2" >
		<label class="description" for="element_2"><?php echo LAST_NAME; ?></label>
		<div>
			<input id="element_2" name="element_2" class="element text medium maillname" type="text" maxlength="255" />
             
		</div> 
		<span class ="last"></span> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"><?php echo EMAIL; ?></label>
		<div>
			<input id="element_3" name="element_3" class="element text medium mailid" type="text" maxlength="255"/> 
		
		</div> 
		<span class ="email_set"></span>
		</li>		<li id="li_4" >
		<label class="description" for="element_4"><?php echo PASSWORD; ?></label>
		<div>
			<input id="element_4" name="element_4" class="element text medium mailpwd" type="password" maxlength="255" /> 
		
		</div> 
		<span class ="pass"></span>
		</li>
			
	
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="Save" value="<?php echo SAVE; ?>"  onclick="adminMailSettings()"/>
		</li>
			</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	</body>
