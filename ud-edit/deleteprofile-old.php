<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<html>
<head>


<script>
function delPage()
{
  var confirmation = confirm("Do you want to delete your Page?");
        if(confirmation == true)
	{
	    deletePage();
	}
   
}
function delBlog()
{
  var confirmation = confirm("Do you want to delete your Blog?");
        if(confirmation == true)
	{
	    deleteBlog();
	}
   
}
function delAccount()
{
  var confirmation = confirm("Do you want to delete your Account?");
        if(confirmation == true)
	{
	    deleteAccount();
	}
 
}
</script>
<head>
<body>

	<div class="form_description"><h2 style="text-align:left"><?php echo INHOUSE;?></h2></div>
<br><br><br><br><a href="#" class="classname" onclick="delPage()"><?php echo DELETE_PAGE; ?></a>
<br><br><br><br><a href="#" class="classname" onclick="delBlog()"><?php echo DELETE_BLOG; ?></a>
<br><br><br><br><a href="#" class="classname" onclick="delAccount()"><?php echo DELETE_ACCOUNT; ?></a>
</body>
</html>