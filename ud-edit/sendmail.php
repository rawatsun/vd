<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>

<body id="main_body" >
	
	<div id="form_container">
	
		<form id="form_597978" class="appnitro"  method="GET" action="">
					<div class="form_description">
			<h2><?php echo SEND_MAIL; ?></h2>
			
		</div>						
			<ul >
			
					<li id="li_1" >

		<label class="description" for="element_1"><?php echo MAIL_RECEIPIENTS; ?></label>
		<div>
			<input id="element_1" name="element_1" class="element text medium sendto" type="text" maxlength="255"/> 
		</div> 
		<span class ="receipients"></span>
		</li>		<li id="li_2" >
		<label class="description" for="element_2"><?php echo SUBJECT; ?></label>
		<div>
			<input id="element_2" name="element_2" class="element text medium sendsub" type="text" maxlength="255"/>		
		</div>
		<span class ="subject"></span> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"><?php echo MESSAGE_BODY; ?></label>
		<div>
			<textarea id="element_3" name="element_3" class="element textarea medium sendmsg"></textarea> 
		</div> 
		<span class ="msg_body"></span>
		</li>		
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="Send Mail" value="<?php echo SEND_MAIL; ?>"  onclick="sendMail()"/>
		</li>
			</ul>
		</form>	
	</div>
	</body>