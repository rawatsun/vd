<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>

<script>
//----------------------function for displaying contents on change password button--------------
function viewadminPassword()
   {  

      $.ajax({
           type: "POST",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewadminPassword',
           data: "codetorun=1",
           beforeSend: function() {
},   
           success: function(data) {  
           $('.contentpannel .admin_changepassword').html(data).hide().fadeIn("slow");
              
  },
});
}
   
//------------------------------------------------------end of function------------------------------------------------

//----------------------function for performing actions (validating/executing) for change password--------------

function adminChangePassword()
{  

  err = 0;
   element_1 = $('.element_1').val();
   element_2 = $('.element_2').val();
    element_3 = $('.element_3').val();

if (element_2 != element_3){
err=1;
 $(".renew_edit").html("<?php echo PASSWORD_NOT_MATCHED; ?>");
 $(".element_2").css("background-color", "#D7B4D7");
 $(".element_3").css("background-color", "#D7B4D7");
    }
    else
      {
        $(".renew_edit").html("");
      }

    if ((element_1 == "" )) {
       err=1;
        $(".old_edit").html("<?php echo BLANK; ?>");
       $(".element_1").css("background-color", "#D7B4D7");
     }
     
       
     if ((element_2 == "")) {
       err=1;
        $(".new_edit").html("<?php echo BLANK; ?>");
       $(".element_2").css("background-color", "#D7B4D7");
      }
     
     if ((element_3 == "")) {
       err=1;
        $(".renew_edit").html("<?php echo BLANK; ?>");
       $(".element_3").css("background-color", "#D7B4D7");
      }

    if (err == 1){
    }
    else
    {
      $.ajax({
           type: "GET",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=adminChangePassword',
           data: "element_1=" + element_1 +
           "&element_2=" + element_2 +"" ,
           beforeSend: function() {


},  
           success: function(data) {

             if($.trim(data) == "1")
          {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_TRUE; ?>");
       }
       else if($.trim(data) == "2")
       {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_FALSE; ?>");
       }
            else if($.trim(data) == "3")
       {
           alert("<?php echo ADMIN_PASSWORD_CHANGE_FALSE_1; ?>");
       }            
  },
})
}
}
//------------------end of function-------

//---------------------function for displaying contents on mail settings button---------------
function viewadminMailSettings()
   {  

      $.ajax({
           type: "POST",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewadminMailSettings',
           data: "codetorun=1",
           beforeSend: function() {
},   
           success: function(data) {
             
  
              $('.contentpannel .admin_changepassword').html(data).hide().fadeIn("slow");
              
  },
});
}

//--------------end of function---------------------

//---------function for performing actions (validating/executing) for change  mail settings---
function adminMailSettings()
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
        $(".first").html("<?php echo ALPHABETS; ?>");
       $(".mailfname").css("background-color", "#D7B4D7");
      }
       if ((element_1 == "" )) {
       err=1;
       $(".first").html("<?php echo BLANK; ?>");
       $(".mailfname").css("background-color", "#D7B4D7");
     }

     
     reg_exp= "^[A-Za-z]+$";
      if(element_2.match(reg_exp)) {
       $(".last").html("");
       $(".maillname").css("background-color", "white");
      }else{
        err=1;
        $(".last").html("<?php echo ALPHABETS; ?>");
       $(".maillname").css("background-color", "#D7B4D7");
      }
      if ((element_2 == "")) {
       err=1;
       $(".last").html("<?php echo BLANK; ?>");
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
         $(".email_set").html("<?php echo VALID_EMAIL; ?>");
       $(".mailid").css("background-color", "#D7B4D7");
      }
      if ((element_3 == "")) {
       err=1;
       $(".email_set").html("<?php echo BLANK; ?>");
       $(".mailid").css("background-color", "#D7B4D7");
      }

      if ((element_4 == "")) {
       err=1;
       $(".pass").html("<?php echo BLANK; ?>");
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
               url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=adminMailSettings',
       
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 + 
            "&element_4=" + element_4 +"",

            beforeSend: function() {
},   
            success: function(data) {
            
                        if($.trim(data) == "2")
                            {
                            alert ("<?php echo MAIL_SETTINGS_NOT_SAVE; ?>");
                            }
                        else
                            {
                            alert ("<?php echo MAIL_SETTINGS_SAVE; ?>");
                            }
   },
}); 
}
}
//--------------end of function---------------------------------

//--------------------------function for displaying contents on Send mail button------------------
 function viewadminSendMail()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewadminSendMail',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .admin_sendmail').html(data).fadeIn("slow");
               
   },
});
} 
//----------------------end of function----------------------

//-----------------------function for performing actions (validating/executing) for sending mails-----
function adminSendMail()
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
                        $(".receipients").html("<?php echo VALID_EMAIL; ?>");
                       $(".sendto").css("background-color","#D7B4D7");
                       }


  if ((element_1 == "" )) {
       err=1;
       $(".receipients").html("<?php echo BLANK; ?>");
       $(".sendto").css("background-color", "#D7B4D7");
     }
                

       
     if ((element_2 == "")) {
       err=1;
       $(".subject").html("<?php echo BLANK; ?>");
       $(".sendsub").css("background-color", "#D7B4D7");
      }
      else
      {
        $(".subject").html("");
      }


     
     if ((element_3 == "")) {
       err=1;
       $(".msg_body").html("<?php echo BLANK; ?>");
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
  //alert("aaas");
       $.ajax({
            type: "GET",
      url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=adminSendMail',
       
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

                           alert ("<?php echo MAIL_SENT; ?>");
                            }
                        else
                            {
                            alert ("<?php echo MAIL_NOT_SENT; ?>");
                            }
   },
}); 
}

}
//------------------end of function----------------------------

//--------------------------function for displaying contents on Delete User button------------------ 
 function viewAdminDelete()
    {  

       $.ajax({
            type: "POST",
            url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewAdminDelete',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .admin_deleteuser').html(data).hide().fadeIn("slow");
               
   },
});
} 
//--------end of function----------------------------------------




//--------------------------function for displaying contents on Stats button------------------
 function viewAdminStats()
    {

       $.ajax({
           type: "post",
           url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=viewAdminStats',
           data: "",
           beforeSend: function() {

   $(".loader").show();
            },
           success: function(data) {

               $(".loader").hide();
              $('.contentpannel .admin_stats').html(data).hide().fadeIn("slow"); 
           },

           complete: function() {
      },
           error: function() {}
       });
   }
//---------end of function------------------

//------------function for storing the value of search for deleting users-------
function passdata(name)
   {  

      $('#search').val(name);

    }
//-------end of function--------------------

//-----------------function for deleting user-------------------------
    function selectAdminDelete()
   {  
    search=$("#search").val();
 
      $.ajax({

            type: "GET",
         url: '<?php echo SITE_PATH; ?>index.php?controller=loadindexfile&function=selectAdminDelete',
              data:"search="+search+"&codetorun="+0+"",
            beforeSend: function() {

},  
            success: function(data) {
          //alert(data);
     if($.trim(data)=="1")
                            {
                            alert ("<?php echo ACCOUNT_DELETED; ?>");
          

                            }
                        else 
                            {
                            alert ("<?php echo ACCOUNT_NOT_DELETED; ?>");

                            }
           
   },
});
 }
//-----------end of function--------------------
   </script>