$(document).ready(function () {

//----------------------------code for mail settings fields on focus-------------------------------------
$(".mailfname,.maillname,.mailid,.mailpwd").focus(function() {

       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });
//---------------------------------------end of code----------------------------------------------------

//----------------------------code for change password fields on focus-------------------------------------
 $(".element_1,.element_2,.element_3").focus(function() {

       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });
//---------------------------------------end of code----------------------------------------------------


//----------------------------code for send mail fields on focus-------------------------------------
 $(".sendto,.sendsub,.sendmsg").focus(function() {
       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });
//---------------------------------------end of code---------------------------------------------------- 


//-----------------------------------------------hiding all divisions of page on load-------------------
    $(".loader").hide();     
    $(".admin_mailsettings").css({"display":"none"});
    $(".admin_sendmail").css({"display":"none"});
    $(".admin_stats").css({"display":"none"});
    $(".admin_deleteuser").css({"display":"none"});   
   $("admin_changepassword").css({"display":"none"});
        
//---------------------------------------end of code---------------------------------------------------- 
      



//--------------------------- code for hiding all class except deleteuser on click deleteuser-------------------


$(".deleteuser").click(function (){    
        $(".admin_deleteuser").css({"display":"block"});
        $(".admin_changepassword").css({"display":"none"});
        $(".admin_stats").css({"display":"none"});
   
        $(".admin_mailsettings").css({"display":"none"});
        $(".admin_sendmail").css({"display":"none"});       
});

//---------------------------------------end of code----------------------------------------------------

//--------------------------- code for hiding all class except adminpassword on click adminpassword-------------------

$(".adminpassword").click(function (){    
        $(".admin_deleteuser").css({"display":"none"});     
        $(".admin_changepassword").css({"display":"block"});
        $(".admin_stats").css({"display":"none"});
        $(".admin_mailsettings").css({"display":"none"});
        $(".admin_sendmail").css({"display":"none"}).fadeOut("fast");              
 });
//---------------------------------------end of code----------------------------------------------------

//--------------------------- code for hiding all class except adminstats on click adminstats-------------------

$(".adminstats").click(function (){    
        $(".admin_deleteuser").css({"display":"none"});     
        $(".admin_changepassword").css({"display":"none"});
        $(".admin_stats").css({"display":"block"});
        $(".admin_mailsettings").css({"display":"none"});
        $(".admin_sendmail").css({"display":"none"}).fadeOut("fast");             
 });
//---------------------------------------end of code----------------------------------------------------

//--------------------------- code for hiding all class except adminmail on click adminmail-------------------

$(".adminmail").click(function (){    
        $(".admin_deleteuser").css({"display":"none"});     
        $(".admin_changepassword").css({"display":"none"});
        $(".admin_stats").css({"display":"none"});
        $(".admin_mailsettings").css({"display":"block"});
        $(".admin_sendmail").css({"display":"none"}).fadeOut("fast");              
 });
//---------------------------------------end of code----------------------------------------------------

//--------------------------- code for hiding all class except adminsend on click adminsend-------------------

$(".adminsend").click(function (){    
        $(".admin_deleteuser").css({"display":"none"});
        $(".admin_changepassword").css({"display":"none"});
        $(".admin_stats").css({"display":"none"});
        $(".admin_mailsettings").css({"display":"none"});
        $(".admin_sendmail").css({"display":"block"}).show();              
 });
//---------------------------------------end of code----------------------------------------------------

    });
