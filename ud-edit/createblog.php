<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<link rel="stylesheet" type="text/css" href="./ud-createpage/view.css" media="all">

<style type="text/css">

</style>
<script>
function blog()
{
  var confirmation = confirm("<?php echo BLOG_CONFIRM ; ?>");
        if(confirmation == true)
	{
	    createblogPage();
	}
   
}
</script>
<body id="main_body" >
	
	<div id="form_container">
	
		
		<form id="form_59709"   method="post" action="">
									
			<ul >
			
					<li id="li_1" >

		<label class="description" for="element_1"><?php echo BLOG_DESCRIPTION; ?></label>
		<div>
			<textarea id="element_1" name="element_1" class="element textarea small b1"></textarea> 
			<span class ="blog_desc"></span>
		</div> 
		
		</li>	
		
			<li id="li_2" >
		<label class="description" for="element_2"><?php echo BLOG_DATA; ?></label>
		<div>
			<textarea id="element_2" name="element_2" class="element textarea medium b2"></textarea> 
			<span class ="blog_data"></span>
		</div>
		
		 
		</li>	

					<li class="buttons">
			    <input type="hidden" name="form_id" value="597978" />
			    
				<input id="saveForm" class="button_text" type="button" name="submit" value="<?php echo POST_BLOG ; ?>" onclick="blog()" />
		</li>
			</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	</body>