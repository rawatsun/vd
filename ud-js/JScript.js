$(document).ready(function () {

//----------------------------code for create page fields on focus-------------------------------------
$(".c1,.c2,.c3,.c4,.c5,.c6,.c7,.c8,.c9,.c10,.c11").focus(function() {
        $(this).css("background-color","white");
  $(this).css({"color":"black"});
    });
//---------------------------------------end of code----------------------------------------------------

//----------------------------code for mail settings fields on focus-------------------------------------
$(".mailfname,.maillname,.mailid,.mailpwd").focus(function() {
       $(this).css("background-color","white");
  $(this).css({"color":"black"});
   });
//---------------------------------------end of code----------------------------------------------------

//----------------------------code for change password fields on focus-------------------------------------
 $(".element_1,.element_2,.element_3").focus(function() {
       $(this).css("background-color","white");
  $(this).css({"color":"black"});
   });
//---------------------------------------end of code----------------------------------------------------


//----------------------------code for send mail fields on focus-------------------------------------
 $(".sendto,.sendsub,.sendmsg").focus(function() {
       $(this).css("background-color","white");
  $(this).css({"color":"black"});
   });
//---------------------------------------end of code---------------------------------------------------- 


//----------------------------code for create blog fields on focus-------------------------------------
$(".b1,.b2").focus(function() {
        $(this).css("background-color","white");
  $(this).css({"color":"black"});
    });
//---------------------------------------end of code---------------------------------------------------- 


//-----------------------------------------------hiding all divisions of page on load-------------------
    $(".loader").hide();

     $(".choosetemplate1").css({"display":"none"});
     $(".donation1").css({"display":"none"});       
    $(".mailsettings").css({"display":"none"});
    $(".sendmail1").css({"display":"none"});
    $(".changepassword1").css({"display":"none"});
    $(".deleteprofile1").css({"display":"none"});
    $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"block"});
    $(".stats1").css({"display":"none"});
     $(".editprofile1").css({"display":"none"});
   $(".notification .notification-a").css({"display":"none"});
   $(".share1").css({"display":"none"});
     
//----------------------------------calling only home function on load----------------------------------           
  //  home();
      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
      



//--------------------------- code for hiding all div except deleteprofile on click deleteprofile-------------------
	$(".deleteprofile").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"}); 
   	    $(".share1").css({"display":"none"});
        	    $(".changepassword1").css({"display":"none"});
      	    $(".deleteprofile1").css({"display":"block"});
        	    $(".mailsettings").css({"display":"none"});
        	    $(".sendmail1").css({"display":"none"});
        	    $(".loader").show().fadeOut("fast");
        	    $(".page1").css({"display":"none"});
        	    $(".home1").css({"display":"none"}).fadeOut("fast"); 
        	    $(".notification .notification-a").css({"display":"none"});
        	    $(".stats1").css({"display":"none"});
        	    $(".editprofile1").css({"display":"none"});
        	    $(".newprofile1").css({"display":"none"});
 	    $(".choosetemplate1").css({"display":"none"});
 	    $(".comment1").css({"display":"none"});       
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except templates on click template-------------------
	$(".template").click(function (){
	    $(".donation1").css({"display":"none"});
        	    $(".choosetemplate1").css({"display":"block"});
        	    $(".choosetemplate1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
     	    $(".editprofile1").css({"display":"none"});
         	    $(".changepassword1").css({"display":"none"});
           	    $(".deleteprofile1").css({"display":"none"});
    	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
    	    $(".notification .notification-a").css({"display":"none"});
    	    $(".mailsettings").css({"display":"none"});
    	    $(".sendmail1").css({"display":"none"});
    	    $(".stats1").css({"display":"none"});
    	    $(".comment1").css({"display":"none"});
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except share on click share-------------------
	$(".share").click(function (){
        	    $(".share1").css({"display":"block"});
   	    $(".donation1").css({"display":"none"});
        	    $(".choosetemplate1").css({"display":"none"});
     	    $(".editprofile1").css({"display":"none"});
         	    $(".changepassword1").css({"display":"none"});
       	    $(".deleteprofile1").css({"display":"none"});
    	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
    	    $(".notification .notification-a").css({"display":"none"});
    	    $(".mailsettings").css({"display":"none"});
    	    $(".sendmail1").css({"display":"none"});
    	    $(".stats1").css({"display":"none"});
    	    $(".comment1").css({"display":"none"});
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except createpage on click createpage-------------------
	$(".createpage").click(function (){
           	    $(".choosetemplate1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
        	    $(".changepassword1").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
        	    $(".mailsettings").css({"display":"none"});
        	    $(".sendmail1").css({"display":"none"});
        	    $(".loader").show().fadeOut("fast");
        	    $(".page1").fadeOut("fast").fadeIn("fast");
        	    $(".home1").fadeOut("fast"); 
        	    $(".notification .notification-a").css({"display":"none"});
        	    $(".stats1").css({"display":"none"});
     	    $(".editprofile1").css({"display":"none"});      
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except newprofile on click newprofile-------------------
	$(".newprofile").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
     	    $(".editprofile1").css({"display":"none"});
         	    $(".changepassword1").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
	    $(".page1").css({"display":"none"});
	    $(".editprofile1").css({"display":"none"});
          	    $(".share1").css({"display":"none"});
	    $(".newprofile1").css({"display":"block"}).hide().fadeIn("fast");
	    $(".home1").css({"display":"none"});
	    $(".notification .notification-a").css({"display":"none"});
	    $(".mailsettings").css({"display":"none"});
	    $(".sendmail1").css({"display":"none"});
    	    $(".stats1").css({"display":"none"});
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except changepassword on click changepassword-------------------
	$(".changepassword").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});    
	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
	    $(".page1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
	    $(".editprofile1").css({"display":"none"});
	    $(".newprofile1").css({"display":"none"});
	    $(".home1").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
	    $(".changepassword1").css({"display":"block","height":"0"}); 
	    $(".mailsettings").css({"display":"none"});
	    $(".sendmail1").css({"display":"none"});
     	    $(".stats1").css({"display":"none"});
   });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except homeclick on click home-------------------
	$(".homeclick").click(function (){
  	    $(".home1").css({"display":"block"});
  	    $(".choosetemplate1").css({"display":"none"});
	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"}); 
   	    $(".share1").css({"display":"none"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
    	    $(".sendmail1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"none"});
      	    $(".mailsettings").css({"display":"none"});
       	    $(".deleteprofile1").css({"display":"none"});
       	    $(".changepassword1").css({"display":"none"});
     	    $(".stats1").css({"display":"none"});
   });
 //--------------------------------end of code--------------------------------------------------------------------
 
//--------------------------- code for hiding all div except sendmail on click sendmail-------------------
	$(".sendmail").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
    	    $(".sendmail1").css({"display":"block"});
   	    $(".notification .notification-a").css({"display":"none"});
      	    $(".mailsettings").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
	    $(".stats1").css({"display":"none"});
    });
 //--------------------------------end of code--------------------------------------------------------------------
 
//--------------------------- code for hiding all div except mailsettings on click mailsettings-------------------
	$(".mail").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
	    $(".page1").css({"display":"none"});
	    $(".editprofile1").css({"display":"none"});
	    $(".newprofile1").css({"display":"none"});
	    $(".home1").css({"display":"none"});
	    $(".mailsettings").css({"display":"block"});
	    $(".sendmail1").css({"display":"none"});
	    $(".notification .notification-a").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
       	    $(".stats1").css({"display":"none"});
   });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except editprofile on click editprofile-------------------
	$(".editprofile").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
   	    $(".page1").css({"display":"none"}); 
	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"block"}).hide().fadeIn("fast");
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});   
   	    $(".notification .notification-a").css({"display":"none"});
   	    $(".mailsettings").css({"display":"none"});
   	    $(".sendmail1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
       	    $(".stats1").css({"display":"none"});
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except createpage on click createpage-------------------
	$(".createpage").click(function (){
   	    $(".page1").css({"display":"block"});
      	    $(".choosetemplate1").css({"display":"none"});
  	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
    	    $(".mailsettings").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
    	    $(".sendmail1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});
   	    $(".stats1").css({"display":"none"});
   });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except notification on click notification-------------------
	$(".notification").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"block"}).hide().fadeIn("fast");
   	    $(".mailsettings").css({"display":"none"});
   	    $(".sendmail1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});
   	    $(".stats1").css({"display":"none"});
 });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except stats on click stats-------------------
	$(".stats").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"none"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
   	    $(".stats1").css({"display":"block"}).hide().fadeIn("fast");
  	    $(".mailsettings").css({"display":"none"});
   	    $(".sendmail1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});      
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except comments on click comments-------------------
	$(".comments").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"none"});
       	    $(".comment1").css({"display":"block"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
   	    $(".stats1").css({"display":"none"});
  	    $(".mailsettings").css({"display":"none"});
   	    $(".sendmail1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});      
    });
//--------------------------------end of code--------------------------------------------------------------------

//--------------------------- code for hiding all div except donate on click donate-------------------
	$(".donate").click(function (){
   	    $(".choosetemplate1").css({"display":"none"});
        	    $(".donation1").css({"display":"block"});
       	    $(".comment1").css({"display":"none"});
   	    $(".page1").css({"display":"none"});
    	    $(".editprofile1").css({"display":"none"});
    	    $(".newprofile1").css({"display":"none"});
    	    $(".home1").css({"display":"none"});
   	    $(".notification .notification-a").css({"display":"none"});
   	    $(".share1").css({"display":"none"});
   	    $(".stats1").css({"display":"none"});
  	    $(".mailsettings").css({"display":"none"});
   	    $(".sendmail1").css({"display":"none"});
   	    $(".changepassword1").css({"display":"none"});
   	    $(".deleteprofile1").css({"display":"none"});      
    });
//--------------------------------end of code--------------------------------------------------------------------


   });


//---------------------------------------function for deleting blog-----------------------------------------------------------
 function deleteblog(cid,user_id){

    cid=cid;
   $.ajax({
            type: "GET",
            url: '../../ud-model/processdelete.php',
            data: "cid=" + cid + 
            "&user_id="+user_id,
            beforeSend: function() {
},
            success: function(data) {
           
           $('.add').html(data).hide().fadeIn("fast");
            },
            complete: function() {
},
            error: function() {}
        });
  }

  
//--------------------------------------end of function----------------------------------------------------------
//-------------------------------------function for changing password---------------------------------------------
