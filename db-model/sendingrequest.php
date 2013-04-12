<?php 
  include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php'); 
?>
<!DOCTYPE html>
<script>   
//----------------------------code for storing template value -------------------------------------
function clicktemp (val) {
  val=val;
$.ajax({
           type: "post",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=choosetemplate',
           data: "code="+val,
           beforeSend: function(data) {

   $(".loader").show();
            },
           success: function(data) {
         
   $(".loader").hide();
              alert("<?php echo TEMPLATE_SET; ?>");
           },

           complete: function() {
      },
           error: function() {}
       });


}

//---------------------------------------end of function---------------------------------------------------- 

//----function for displaying contents on choose template button click---------------

function viewTemplate()
    {

       $.ajax({
           type: "post",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewTemplate',
           data: "",
           beforeSend: function() {

   $(".loader").show();
            },
           success: function(data) {

               $(".loader").hide();
              $('.contentpannel .home1').html(data).hide().fadeIn("slow"); 
           },

           complete: function() {
      },
           error: function() {}
       });
   }
//-----------------end of function-------------------

//---------------function for displaying data on Home button click--------------
function home()
    {

       $.ajax({
           type: "post",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=home',
           data: "",
           beforeSend: function() {

   $(".loader").show();
            },
           success: function(data) {

               $(".loader").hide();
              $('.contentpannel .choosetemplate1').html(data).hide().fadeIn("slow"); 
           },

           complete: function() {
			},
           error: function() {}
       });
   }
//-----------------end of function-------------------

//----function for displaying contents on edit profile button click---------------

function vieweditProfile()
{

   $.ajax({
       type: "post",
       url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=vieweditProfile',
       data: "",
       beforeSend: function() {

$(".loader").show();
        },
       success: function(data) {

           $(".loader").hide();
          $('.contentpannel .home1').html(data).hide().fadeIn("slow"); 
       },

       complete: function() {
		},
       error: function() {}
   });
}
   

   function viewcreatePage()
{

   $.ajax({
       type: "post",
       url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewcreatePage',
       data: "",
       beforeSend: function() {

$(".loader").show();
        },
       success: function(data) {

           $(".loader").hide();
          $('.contentpannel .home1').html(data).hide().fadeIn("slow"); 
       },

       complete: function() {
    },
       error: function() {}
   });
}
//------------------end of function----------------------

/*---------------------------------------------------------function for display of profile------------------------*/
   function display()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=display',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .newprofile1').html(data).hide().fadeIn("slow");
               
   },
});
} 
//-------end of function-------------------

//----function for displaying contents on Send Mail button click---------------

   function viewsendMail()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewsendMail',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .sendmail1').html(data).hide().fadeIn("slow");
               
   },
});
} 
//----------end of function-----------------------------

//----function for displaying contents on Mail Settings button click---------------
   function viewmailSettings()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewmailSettings',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .mailsettings').html(data).hide().fadeIn("slow");
               
   },
});
} 
//--------------end of code-----------------------

//----function for displaying contents on Stats button click---------------
function stats()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=stats',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .stats1').html(data).hide().fadeIn("slow");
               
   },
});
}
//-------------end of function----------------------------------

//----function for displaying contents on delete profile button click---------------
   function viewdeleteProfile()
   {  

      $.ajax({
           type: "POST",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewdeleteProfile',
           data: "codetorun=1",
           beforeSend: function() {
},   
           success: function(data) {
             
  
              $('.contentpannel .deleteprofile1').html(data).hide().fadeIn("slow");
              
  },
});
} 
//--------------end of function--------------------------------
   
//----function for displaying contents on change password button click---------------
   function viewchangePassword()
   {  

      $.ajax({
           type: "POST",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewchangePassword',
           data: "codetorun=1",
           beforeSend: function() {
},   
           success: function(data) {
             
  
              $('.contentpannel .changepassword1').html(data).hide().fadeIn("slow");
              
  },
});
}
   
//------------------------------------------------------end of function------------------------------------------------

   
 /*--------------------------function for update and validation of profile using AJAX------------------------*/
   
function editProfile()
{
 
 err=0;
   element_1 = $(".e1").val();
   element_2 = $(".e2").val();
   element_3 = $(".e3").val();
   element_4 = $(".e4").val();
   element_5 = $(".e5").val();
   element_6 = $(".e6").val();
   element_7 = $(".e7").val();
  
  reg_exp = "^[A-Za-z]+$";

if(element_1.match(reg_exp)) {
       $(".fname_edit").html("");
       $(".e1").css("background-color", "white");
      }
      else{
       err=1;
       $(".fname_edit").html("<?php echo ALPHABETS ;?>");
       $(".e1").css("background-color", "#D7B4D7");

      }

if(element_2.match(reg_exp)) {
      $(".lastname_edit").html("");
       $(".e2").css("background-color", "white");
      }
      else{
        err=1;
        $(".lastname_edit").html("<?php echo ALPHABETS ;?><?php echo ALPHABETS ;?>");
       $(".e2").css("background-color", "#D7B4D7");

      }
  reg_exp = "^[0-9]+$";


if(element_5.match(reg_exp)) {
       $(".phone_edit").html("");
       $(".e5").css("background-color", "white");
      }
      else{
       err=1;
       $(".phone_edit").html("<?php echo NUMBERS ;?>");
       $(".e5").css("background-color", "#D7B4D7");

      }
      reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
               if ((element_7.match(reg_exp_email))) { 
                    $(".email_edit").html("");
                      $(".e7").css("background-color","white");
                      }
                      else{
                        err=1;
                        $(".email_edit").html("<?php echo VALID_EMAIL ;?>");
                        $(".e7").css("background-color","#D7B4D7");
                      }

if ((element_1 == "" )) {
       err=1;
        $(".fname_edit").html("<?php echo BLANK ;?>");
       $(".e1").css("background-color", "#D7B4D7");
     }
       
     if ((element_2 == "")) {
       err=1;
        $(".lastname_edit").html("<?php echo BLANK ;?>");
       $(".e2").css("background-color", "#D7B4D7");
      }
     if ((element_3 == "")) {
       err=1;
        $(".dob_edit").html("<?php echo BLANK ;?>");
       $(".e3").css("background-color", "#D7B4D7");
      }
      if ((element_4 == "")) {
       err=1;
        $(".address_edit").html("<?php echo BLANK ;?>");
       $(".e4").css("background-color", "#D7B4D7");
      }
      if ((element_5 == "")) {
       err=1;
        $(".phone_edit").html("<?php echo BLANK ;?>");
       $(".e5").css("background-color", "#D7B4D7");
      }
      if ((element_6 == "")) {
       err=1;
        $(".country_edit").html("<?php echo BLANK ;?>");
       $(".e6").css("background-color", "#D7B4D7");
      }
       if ((element_7 == "")) {
       err=1;
        $(".email_edit").html("<?php echo BLANK ;?>");
       $(".e7").css("background-color", "#D7B4D7");
      }

 

     
if(err==1)
{


}
else
{
      $.ajax({

 
           type: "GET",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=editProfile',
           data: "element_1=" + element_1 + 
           "&element_2=" + element_2 + "&element_3=" + element_3 + 
           "&element_4=" + element_4 + "&element_5=" + element_5 + "&element_6=" +
            element_6 + "&element_7=" + element_7 + "",

           beforeSend: function() {
},   
           success: function(data) {
              
                       if($.trim(data) == "1")
                           {
                           alert ("<?php echo UPDATED ;?>");
                             
                           }
                       else
                           {
                           alert ("<?php echo NOT_UPDATED ;?>");
                           }
  },
}); 
}
}
//-- end of function------------------------------------


/*--------------------------function for update and validation of password field using AJAX------------------------*/
   
function changePassword()
{  

  err = 0;
   element_1 = $('.element_1').val();
   element_2 = $('.element_2').val();
    element_3 = $('.element_3').val();

if (element_2 != element_3){
err=1;
 $(".renew_edit").html("password doesn't matched !! sorry ");
 $(".element_2").css("background-color", "#D7B4D7");
 $(".element_3").css("background-color", "#D7B4D7");
    }
    else
      {
        $(".renew_edit").html("");
      }

    if ((element_1 == "" )) {
       err=1;
        $(".old_edit").html("<?php echo BLANK ;?>");
       $(".element_1").css("background-color", "#D7B4D7");
     }
     
       
     if ((element_2 == "")) {
       err=1;
        $(".new_edit").html("<?php echo BLANK ;?>");
       $(".element_2").css("background-color", "#D7B4D7");
      }
     
     if ((element_3 == "")) {
       err=1;
        $(".renew_edit").html("<?php echo BLANK ;?>");
       $(".element_3").css("background-color", "#D7B4D7");
      }





    if (err == 1){

    }
    else
    {



      $.ajax({
           type: "GET",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=changePassword',
           data: "element_1=" + element_1 +
           "&element_2=" + element_2 +"" ,
           beforeSend: function() {


},  
           success: function(data) {

             if($.trim(data) == "1")
          {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_TRUE ;?>");
       }
       else if($.trim(data) == "2")
       {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_FALSE ;?>");
       }
            else if($.trim(data) == "3")
       {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_FALSE_1 ;?>");
       }            
  },
})
}
}

//-----------------------------------end of function--------------------------------------------------------------------------




//--------------------------------------function for page creation and validation using AJAX---------------------------------
 
 

function createPage()
     {
      err=0;
       c1 = $('.c1').val();
       c2 = $('.c2').val();
       c3 = $('.c3').val();
       c4 = $('.c4').val();
       c5 = $('.c5').val();
       c6 = $('.c6').val();
       c7 = $('.c7').val();
       c8 = $('.c8').val();
       c9 = $('.c9').val();
       c10 =$('.c10').val();
       c11 =$('.c11').val();
  
      if ((c1 == "")) {
        err=1;
        $(".about").html("<?php echo BLANK ;?>");
      $(".about").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c1").css("background-color", "#D7B4D7");
      }
      else
      {
        $(".about").html("");

      }
        
      if ((c2 == "")) {
        err=1;
        $(".work").html("<?php echo BLANK ;?>");

         $(".work").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c2").css("background-color", "#D7B4D7");
       }
       else
      {
        $(".work").html("");
      }

      if ((c3 == "")) {
        err=1;
        $(".product1").html("<?php echo BLANK ;?>");
         $(".product1").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c3").css("background-color", "#D7B4D7");
       }
        else
      {
        $(".product1").html("");
      }

       if ((c4 == "")) {
        err=1;
         $(".product2").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".product2").html("<?php echo BLANK ;?>");
        $(".c4").css("background-color", "#D7B4D7");
       }
         else
      {
        $(".product2").html("");
      }

       if ((c5 == "")) {
        err=1;
         $(".product3").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
         $(".product3").html("<?php echo BLANK ;?>");
        $(".c5").css("background-color", "#D7B4D7");
       }
       else
      {
        $(".product3").html("");
      }

       if ((c6 == "")) {
        err=1;
         $(".product4").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
         $(".product4").html("<?php echo BLANK ;?>");
        $(".c6").css("background-color", "#D7B4D7");
       }
       else
      {
        $(".product4").html("");
      }

  reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if ((c7.match(reg_exp_email))) { 
                  $(".email_page").html("");
                         $(".c7").css("background-color","white");
                     
                       }
                       else{
                         err=1;
                                 $(".email_page").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
 
                      $(".email_page").html("<?php echo VALID_EMAIL ;?>");
                       $(".c7").css("background-color","#D7B4D7");
                       }



       if ((c7 == "")) {
        err=1;
        $(".email_page").html("<?php echo BLANK ;?>");
         $(".email_page").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c7").css("background-color", "#D7B4D7");
       }
  
       if ((c8 == "")) {
        err=1;
         $(".website").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".website").html("<?php echo BLANK ;?>");
       
        $(".c8").css("background-color", "#D7B4D7");
       }
        else
      {
        $(".website").html("");
      }

       
      
       reg_exp="^[0-9]+$";

       if(c9.match(reg_exp)) {
         $(".phone").html("");
        $(".c9").css("background-color", "white");
       }
       else{
         err=1;
            $(".phone").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
         $(".phone").html("<?php echo NUMBERS ;?>");
        $(".c9").css("background-color", "#D7B4D7");

       }
       if (c9 == "" ) {
        err=1;
           $(".phone").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".phone").html("<?php echo BLANK ;?>");

        $(".c9").css("background-color", "#D7B4D7");
      }
      
       if ((c10 == "")) {
        err=1;
        $(".title").html("<?php echo BLANK ;?>");
         $(".title").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c10").css("background-color", "#D7B4D7");
       }
       else
      {
        $(".title").html("");
      }

       if ((c11 == "")) {
        err=1;
        $(".contact").html("<?php echo BLANK ;?>");
         $(".contact").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
     
        $(".c11").css("background-color", "#D7B4D7");
       }
       else
      {
        $(".contact").html("");
      }


    if(err==1)
    {}
  else
  {
        $.ajax({
            type: "GET", 
              url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=createPage',
        
            data: $('#form_59').serialize(),
            beforeSend: function() {

    $(".loader").show();
             },
            success: function(data) {

                alert("<?php echo PAGE_SUCESS ;?>");
                $(".loader").hide();
                  
            },

            complete: function() {
            },
            error: function() {}
        });
    }
}

//---------------------------------------------------end of function----------------------------------------



//--------------------------------------------------function for sending mail using AJAX-------------------------
function sendMail()
{
  err=0;
    element_1 = $(".sendto").val();
    element_2 = $(".sendsub").val();
    element_3 = $(".sendmsg").val();
 
  reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if ((element_1.match(reg_exp_email))) { 
                  $(".receipients").html("");
                   $(".sendto").css("background-color","white");
                      
                       }
                       else{
                        err=1;
                        $(".receipients").html("<?php echo VALID_EMAIL ;?>");
                       $(".sendto").css("background-color","#D7B4D7");
                       }


  if ((element_1 == "" )) {
       err=1;
       $(".receipients").html("<?php echo BLANK ;?>");
       $(".sendto").css("background-color", "#D7B4D7");
     }
                

       
     if ((element_2 == "")) {
       err=1;
       $(".subject").html("<?php echo BLANK ;?>");
       $(".sendsub").css("background-color", "#D7B4D7");
      }
      else
      {
        $(".subject").html("");
      }


     
     if ((element_3 == "")) {
       err=1;
       $(".msg_body").html("<?php echo BLANK ;?>");
       $(".sendmsg").css("background-color", "#D7B4D7");
      }
       else
      {
        $(".msg_body").html("");
      }
     
  if(err==1)
  {}
else
{
      $.ajax({
            type: "GET",
      url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=sendMail',
       
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 +"",

            beforeSend: function() {
              $('.loader').show();
},   
            success: function(data) {

              $('.loader').hide();
            // alert(data);
                        if(data.substr(data.length-1)=="!")
                            {

                           alert ("<?php echo MAIL_SENT ;?>");
                            }
                        else
                            {
                            alert ("<?php echo MAIL_NOT_SENT ;?>");
                            }
   },
}); 
}

}
//--------------------------------end of function------------------------------------------------------------------


//---------------------------------------------- function for mail settings and validation using AJAX----------

 function mailSettings()
{



    element_1 = $(".mailfname").val();

    element_2 = $(".maillname").val();
    element_3 = $(".mailid").val();
    element_4 = $(".mailpwd").val();
 
err=0;
 
 
     reg_exp= "^[A-Za-z]+$";
      if(element_1.match(reg_exp)) {
       $(".first").html("");
       $(".mailfname").css("background-color", "white");
      }else{
        err=1;
        $(".first").html("<?php echo ALPHABETS ;?>");
       $(".mailfname").css("background-color", "#D7B4D7");
      }
       if ((element_1 == "" )) {
       err=1;
       $(".first").html("<?php echo BLANK ;?>");
       $(".mailfname").css("background-color", "#D7B4D7");
     }

     
     reg_exp= "^[A-Za-z]+$";
      if(element_2.match(reg_exp)) {
       $(".last").html("");
       $(".maillname").css("background-color", "white");
      }else{
        err=1;
        $(".last").html("<?php echo ALPHABETS ;?>");
       $(".maillname").css("background-color", "#D7B4D7");
      }
      if ((element_2 == "")) {
       err=1;
       $(".last").html("<?php echo BLANK ;?>");
       $(".maillname").css("background-color", "#D7B4D7");
      }
     
      reg_exp="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
      if(element_3.match(reg_exp)) {
          $(".email_set").html("");
       $(".mailid").css("background-color", "white");
      }
      else
      {
        err=1;
         $(".email_set").html("<?php echo VALID_EMAIL ;?>");
       $(".mailid").css("background-color", "#D7B4D7");
      }
      if ((element_3 == "")) {
       err=1;
       $(".email_set").html("<?php echo BLANK ;?>");
       $(".mailid").css("background-color", "#D7B4D7");
      }

      if ((element_4 == "")) {
       err=1;
       $(".pass").html("<?php echo BLANK ;?>");
       $(".mailpwd").css("background-color", "#D7B4D7");
      }
      else
      {
        $(".pass").html("");
      }


if(err==1)
{}
else
{
       $.ajax({
            type: "GET", 
               url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=mailSettings',
       
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 + 
            "&element_4=" + element_4 +"",

            beforeSend: function() {
},   
            success: function(data) {
              //alert(data);
                        if($.trim(data) == "2")
                            {
                            alert ("<?php echo MAIL_SETTINGS_NOT_SAVE ;?>");
                            }
                        else
                            {
                            alert ("<?php echo MAIL_SETTINGS_SAVE ;?>");
                            }
   },
}); 
}
}
//-----------------------------end of function--------------------------------------------------------------------------


 
//-----------------------------------function for blog page creation----------------------------------------------

function createblogPage() {
 err=0;

       b1 = $('.b1').val();
       b2 = $('.b2').val();

    if ((b1 == ""  )) {
        err=1;
        $(".blog_desc").html("<?php echo BLANK ;?>");
        $(".b1").css("background-color", "#D7B4D7");
          $(".blog_desc").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
      
      }
      else
      {
        $(".blog_desc").html("");
      }
        
      if ((b2 == "")) {
        err=1;  $(".b2").css("background-color", "#D7B4D7");
       
        $(".blog_data").html("<?php echo BLANK ;?>");
         $(".blog_data").css({"font-style":"italic","color":"red","font-size":"0.7em","fon-family":"verdana"});
      
       }
       else
      {
        $(".blog_data").html("");
      }
  if (err==1)
  {}
else
{

     $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=createblogPage',
               data: $('#form_59709').serialize(),

            beforeSend: function() {
},   
            success: function(data) {
                alert("<?php echo BLOG_SUCESS ; ?>");
                 


   },
}); 
}
}
//-----------------------------------------end of function-----------------------------------------------------------

//----------------------------------function for displaying notifications-------------------------------------------
function notifications()
 {
  
       $.ajax({
            type: "POST",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=notifications',
              data:"",
            beforeSend: function() {
},  
            success: function(data) {
             
  
                $('.contentpannel .notification .notification-a .anchor-noti .a1').html("").html(data).hide().fadeIn("slow");;
              
           
   },
});
} 
//---------------------------------------end of function----------------------------------------------------------------



//---------------------------------------function for notification read by user--------------------------------

function readnotification()
 { 
       $.ajax({
            type: "POST",
        url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=readnotification',
             data:"",
            beforeSend: function() {
},  
            success: function(data) {
             
  
              $('.contentpannel .notification .notification-a .anchor-noti .a1').html("").html(data).hide().fadeIn("slow");;
              
   },
});
}
//--------------------------------------end of function--------------------------------------------------------


//-----------------function for inserting comment with their user id-------------------
function insertComment(user_id){
 

    value = $(".ta").val();
   $.ajax({
            type: "GET",
          url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=insertComment',
           data: "id=" + value + 
            "&user_id="+user_id,
            beforeSend: function() {

},
            success: function(data) {
        
           $('.add').html(data).hide().fadeIn("slow");;
            },
            complete: function() {

},
            error: function() {}
        });
  }
//-----------------------end of function-------------------------


//-------------------------------------function for loading user-id-------------------------------------------------
  function loadComment(user_id){

$.ajax({
            type: "GET",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=loadComment',
          data: "id=" + user_id + 
            "&user_id="+user_id,
            beforeSend: function() {

},
            success: function(data) {
           
           $('.add').html(data).hide().fadeIn("slow");
            },
            complete: function() {

},
            error: function() {}
        });

  }
//--------------------------------end of function----------------------------------------------------------------------


//----------------------function for deleting page---------------------------
function deletePage()
   {  
      $.ajax({
            type: "POST",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=deletePage',
              data:"",
            beforeSend: function() {
},  
            success: function(data) {
            
  	 if($.trim(data) == "1")
                            {
                            alert ("<?php echo PAGE_DELETE ;?>");
                            }
                        else
                            {
                            alert ("<?php echo PAGE_NOT_DELETE ;?>");
                            }
           
   },
});
  
}
//--------------end of function-----------------

//------------------function for deleting blog---------------------
 function deleteBlog()
   {  
      $.ajax({
            type: "POST",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=deleteBlog',
              data:"",
            beforeSend: function() {
},  
            success: function(data) {
            
  	 if($.trim(data) == "1")
                            {
                            alert ("<?php echo BLOG_DELETE ;?>");
                            }
                        else
                            {
                            alert ("<?php echo BLOG_NOT_DELETE ;?>");
                            }
           
   },
});

}
//------------------end of function-------------------


//---------------------function for deleting account----------------------
 function deleteAccount()
   {  
      $.ajax({
            type: "POST",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=deleteAccount',
              data:"",
            beforeSend: function() {
},  
            success: function(data) {
            
  	 if($.trim(data) == "1")
                            {
                            alert ("<?php echo ACC_DELETE ;?>");
          

                             window.location.href="index.php";

                            }
                        else
                            {
                            alert ("<?php echo ACC_NOT_DELETE ;?>");

                            }
           
   },
});
 }
//----------------end of function------------------------

/*--------------------------function for displaying contents on donate button click------------------------*/
function donate()
   { 
      $.ajax({
            type: "POST",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=donate',
              data:"",
            beforeSend: function() {
},  
            success: function(data) {
	 $('.contentpannel .donation1').html(data).hide().fadeIn("slow");
},
});
    
}
//--------end of function---------------

//-----------------function for displaying comments on comment button click-------------
 function comment()
   { 

      $.ajax({
           type: "POST",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=comment',
           data: "codetorun=1",
           beforeSend: function() {
},   
           success: function(data) {  
              $('.contentpannel .comment1').html(data).hide().fadeIn("slow");
              
  },
});
}
//--------------end of function------------------------

//----------------------function for inserting comments through AJAX-------------------
function insert()
{
   
    value = $(".ta").val();
   $.ajax({
            type: "GET",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=commentinComment',
            data: "id="+value,
            beforeSend: function() {

},
            success: function(data) {
       
           $('.add').html(data);
            },
            complete: function() {

},
            error: function() {}
        });
}
//--------------end of function---------------


//-----------------------function for deleting comment-----------------------
  function run(value){ 
    value=value; 
   $.ajax({
            type: "GET",
            url:'<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=deleteComment',
            data: "id="+value,
            beforeSend: function() {
},
            success: function(data) {
           $('.add').html(data);
            },
            complete: function() {
},
            error: function() {}
        });
  }
//--------------------end of function------------------

</script>
