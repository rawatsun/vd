    $(document).ready(function () {

$(".c1,.c2,.c3,.c4,.c5,.c6,.c7,.c8,.c9,.c10,.c11").click(function() {
        if ($(this).val() == "") {
            $(this).css("background-color", "white");
            $(this).css({"color": "black" });
            $(this).val("");
        }
    });








$(".mailfname,.maillname,.mailid,.mailpwd").click(function() {
       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });


 $(".element_1,.element_2,.element_3").click(function() {
       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });

 $(".sendto,.sendsub,.sendmsg").click(function() {
       if ($(this).val() == "") {
           $(this).css("background-color", "white");
           $(this).css({"color": "black" });
           $(this).val("");
       }
   });
 
$(".e1,.e2,.e3,.e4,.e5,.e6,.e7").click(function() {
        if ($(this).val() == "") {
            $(this).css("background-color", "white");
            $(this).css({"color": "black" });
            $(this).val("");
        }
    });


$(".b1,.b2").click(function() {
        if ($(this).val() == "") {
            $(this).css("background-color", "white");
            $(this).css({"color": "black" });
            $(this).val("");
        }
    });




    $(".loader").hide();
    $(".mailsettings").css({"display":"none"});
    $(".sendmail1").css({"display":"none"});
    $(".changepassword1").css({"display":"none"});
	$(".deleteprofile1").css({"display":"none"});
    $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"block"}).hide().fadeIn("slow");
    $(".stats1").css({"display":"none"});
     $(".editprofile1").css({"display":"none"});
   $(".notification .notification-a").css({"display":"none"});
     
           
    home();
      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
      




$(".deleteprofile").click(function (){
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
    });

         $(".createpage").click(function (){




        $(".changepassword1").css({"display":"none"});
	    $(".deleteprofile1").css({"display":"none"});
        $(".mailsettings").css({"display":"none"});
        $(".sendmail1").css({"display":"none"});
        $(".loader").show().fadeOut("fast");
        $(".page1").fadeOut("fast").fadeIn("slow");
        $(".home1").fadeOut("fast"); 
        $(".notification .notification-a").css({"display":"none"});
        $(".stats1").css({"display":"none"});
     $(".editprofile1").css({"display":"none"});
       
    });
 $(".newprofile").click(function (){

     $(".editprofile1").css({"display":"none"});
         $(".changepassword1").css({"display":"none"});
	     $(".deleteprofile1").css({"display":"none"});
		$(".page1").css({"display":"none"});
		$(".editprofile1").css({"display":"none"});
		$(".newprofile1").css({"display":"block"}).hide().fadeIn("slow");
		$(".home1").css({"display":"none"});
		$(".notification .notification-a").css({"display":"none"});
		$(".mailsettings").css({"display":"none"});
		$(".sendmail1").css({"display":"none"});
    $(".stats1").css({"display":"none"});
    });


 $(".changepassword").click(function (){
	  $(".page1").css({"display":"none"});
	   $(".editprofile1").css({"display":"none"});
	   $(".newprofile1").css({"display":"none"});
	   $(".home1").css({"display":"none"});
	  $(".deleteprofile1").css({"display":"none"});
	   $(".changepassword1").css({"display":"block"}); 
	   $(".mailsettings").css({"display":"none"});
	   $(".sendmail1").css({"display":"none"});
     $(".stats1").css({"display":"none"});
	   });





 $(".homeclick").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"block"});   
   $(".notification .notification-a").css({"display":"none"});
   $(".mailsettings").css({"display":"none"});
   $(".sendmail1").css({"display":"none"});
   $(".deleteprofile1").css({"display":"none"});
   	   $(".changepassword1").css({"display":"none"});
       $(".stats1").css({"display":"none"});
    });
 
 

 $(".sendmail").click(function (){
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
 
 $(".mail").click(function (){
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


 $(".editprofile").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"block"}).hide().fadeIn("slow");
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});   
   $(".notification .notification-a").css({"display":"none"});
   $(".mailsettings").css({"display":"none"});
   $(".sendmail1").css({"display":"none"});
   	     $(".deleteprofile1").css({"display":"none"});
   	   $(".changepassword1").css({"display":"none"});
       $(".stats1").css({"display":"none"});
    });





 $(".createpage").click(function (){
   $(".page1").css({"display":"block"}).hide().fadeIn("slow");
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});
    $(".mailsettings").css({"display":"none"});
    $(".sendmail1").css({"display":"none"});
   $(".notification .notification-a").css({"display":"none"});
   $(".changepassword1").css({"display":"none"});
   $(".deleteprofile1").css({"display":"none"});
   $(".stats1").css({"display":"none"});
   
    });



 $(".notification").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});
   $(".notification .notification-a").css({"display":"block"}).hide().fadeIn("slow");
   $(".mailsettings").css({"display":"none"});
   $(".sendmail1").css({"display":"none"});
   $(".changepassword1").css({"display":"none"});
   $(".deleteprofile1").css({"display":"none"});
   $(".stats1").css({"display":"none"});
      
    });


$(".stats").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});
   $(".notification .notification-a").css({"display":"none"});
   $(".stats1").css({"display":"block"}).hide().fadeIn("slow");
  
   $(".mailsettings").css({"display":"none"});
   $(".sendmail1").css({"display":"none"});
   $(".changepassword1").css({"display":"none"});
   $(".deleteprofile1").css({"display":"none"});
      
    });


    });




 function createpage()
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
       

      if ((c1 == ""  )) {
        err=1;
        $(".c1").css("background-color", "#D7B4D7");
      }
        
      if ((c2 == "")) {
        err=1;
        $(".c2").css("background-color", "#D7B4D7");
       }
      if ((c3 == "")) {
        err=1;
        $(".c3").css("background-color", "#D7B4D7");
       }
       if ((c4 == "")) {
        err=1;
        $(".c4").css("background-color", "#D7B4D7");
       }
       if ((c5 == "")) {
        err=1;
        $(".c5").css("background-color", "#D7B4D7");
       }
       if ((c6 == "")) {
        err=1;
        $(".c6").css("background-color", "#D7B4D7");
       }

  reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if (!(c7.match(reg_exp_email))) { 
                      err=1;
                       $(".c7").css("background-color","#D7B4D7");
                       }
                       else{
                         $(".c7").css("background-color","white");
                       }



       if ((c7 == "")) {
        err=1;
        $(".c7").css("background-color", "#D7B4D7");
       }
       if ((c8 == "")) {
        err=1;
        $(".c8").css("background-color", "#D7B4D7");
       }
       
       if (c9 == "" ) {
        err=1;
        $(".c9").css("background-color", "#D7B4D7");
      }
       reg_exp="^[0-9]+$";

       if(c9.match(reg_exp)) {
        err=1;
        $(".c9").css("background-color", "white");
       }
       else{
        $(".c9").css("background-color", "#D7B4D7");

       }
      
       if ((c10 == "")) {
        err=1;
        $(".c10").css("background-color", "#D7B4D7");
       }
       if ((c11 == "")) {
        err=1;
        $(".c11").css("background-color", "#D7B4D7");
       }


    if(err==1)
    {}
  else
  {
        $.ajax({
            type: "GET",
            url: 'ud-model/createprocess.php',
            data: $('#form_59').serialize(),
            beforeSend: function() {

    $(".loader").show();
             },
            success: function(data) {

                alert("Your page has bee created Successfully");
                $(".loader").hide();
                  
            },

            complete: function() {
            },
            error: function() {}
        });
    }
}



 function stats() {
     $.ajax({
         type: "GET",
         url: 'ud-model/stats.php',
         data: "",
         beforeSend: function() {

 $(".loader").show();
          },
         success: function(data) {

             $(".loader").hide();
            $('.contentpannel .stats1').html(data); 
         },

         complete: function() {
         },
         error: function() {}
     });
 }
 
 function home()
     {

        $.ajax({
            type: "GET",
            url: 'ud-model/ud-home.php',
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


/*---------------------------------------------------------function for display of profile------------------------*/

   function display()
    {  

       $.ajax({
            type: "POST",
            url: 'ud-model/index.php',
            data: "codetorun=1",
            beforeSend: function() {
},   
            success: function(data) {
              
   
               $('.contentpannel .newprofile1').html(data).hide().fadeIn("slow");
               
   },
});
} 

     
    /*---------------------------------------------------------function for update of profile------------------------*/
    
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
        err=1;
        $(".e1").css("background-color", "white");
       }
       else{
        $(".e1").css("background-color", "#D7B4D7");

       }

if(element_2.match(reg_exp)) {
        err=1;
        $(".e2").css("background-color", "white");
       }
       else{
        $(".e2").css("background-color", "#D7B4D7");

       }
   reg_exp = "^[0-9]+$";


if(element_5.match(reg_exp)) {
        err=1;
        $(".e5").css("background-color", "white");
       }
       else{
        $(".e5").css("background-color", "#D7B4D7");

       }

if ((element_1 == "" )) {
        err=1;
        $(".e1").css("background-color", "#D7B4D7");
      }
        
      if ((element_2 == "")) {
        err=1;
        $(".e2").css("background-color", "#D7B4D7");
       }
      if ((element_3 == "")) {
        err=1;
        $(".e3").css("background-color", "#D7B4D7");
       }
       if ((element_4 == "")) {
        err=1;
        $(".e4").css("background-color", "#D7B4D7");
       }
       if ((element_5 == "")) {
        err=1;
        $(".e5").css("background-color", "#D7B4D7");
       }
       if ((element_6 == "")) {
        err=1;
        $(".e6").css("background-color", "#D7B4D7");
       }


  reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if (!(element_7.match(reg_exp_email))) { 
                      err=1;
                       $(".e7").css("background-color","#D7B4D7");
                       }
                       else{
                         $(".e7").css("background-color","white");
                       }

       if ((element_7 == "")) {
        err=1;
        $(".e7").css("background-color", "#D7B4D7");
       }
 if(err==1)
 {

 }
else
{
       $.ajax({
            type: "GET",
            url: 'ud-model/editprofile.php',
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 + 
            "&element_4=" + element_4 + "&element_5=" + element_5 + "&element_6=" +
             element_6 + "&element_7=" + element_7 + "",

            beforeSend: function() {
},   
            success: function(data) {
                
                        if($.trim(data) == "1")
                            {
                            alert ("Successfully Updated");
                              
                            }
                        else
                            {
                            alert ("Not Updated");
                            }
   },
}); 
}
}

function createblogpage(){

 err=0;

       b1 = $('.b1').val();
       b2 = $('.b2').val();

    if ((b1 == ""  )) {
        err=1;
        $(".b1").css("background-color", "#D7B4D7");
      }
        
      if ((b2 == "")) {
        err=1;
        $(".b2").css("background-color", "#D7B4D7");
       }
  if (err==1)
  {}
else
{

     $.ajax({
            type: "POST",
            url: 'ud-model/createblog.php',
            data: $('#form_59709').serialize(),

            beforeSend: function() {
},   
            success: function(data) {
                alert("Your New Blog is created !!!");
                 


   },
}); 
}
}

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
           
           $('.add').html(data).hide().fadeIn("slow");
            },
            complete: function() {
},
            error: function() {}
        });
  }

  function insert(user_id){
 

    value = $(".ta").val();
   $.ajax({
            type: "GET",
            url: '../../ud-model/insertcomment.php',
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

  function load(user_id){

$.ajax({
            type: "GET",
            url: '../../ud-model/selectcomments.php',
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


function notifications()
 {
	
       $.ajax({
            type: "POST",
            url: 'ud-model/notification.php',
            data:"",
            beforeSend: function() {
},  
            success: function(data) {
             
  
                $('.contentpannel .notification .notification-a .anchor-noti .a1').html("").html(data).hide().fadeIn("slow");;
              
           
   },
});
} 
function readnotification()
 { 
       $.ajax({
            type: "POST",
            url: 'ud-model/notification2.php',
            data:"",
            beforeSend: function() {
},  
            success: function(data) {
             
  
              $('.contentpannel .notification .notification-a .anchor-noti .a1').html("").html(data).hide().fadeIn("slow");;
              
   },
});
}











//---------------------------------------------- mail setting s


 function mailSettings()
{



    element_1 = $(".mailfname").val();

    element_2 = $(".maillname").val();
    element_3 = $(".mailid").val();
    element_4 = $(".mailpwd").val();
  
err=0;
 
 if ((element_1 == "" )) {
       err=1;
       $(".mailfname").css("background-color", "#D7B4D7");
     }
     reg_exp= "^[A-Za-z]+$";
      if(element_1.match(reg_exp)) {
       err=1;
       $(".mailfname").css("background-color", "white");
      }else{

       $(".mailfname").css("background-color", "#D7B4D7");
      }
       
     if ((element_2 == "")) {
       err=1;
       $(".maillname").css("background-color", "#D7B4D7");
      }
     reg_exp= "^[A-Za-z]+$";
      if(element_2.match(reg_exp)) {
       err=1;
       $(".maillname").css("background-color", "white");
      }else{
        
       $(".maillname").css("background-color", "#D7B4D7");
      }

     if ((element_3 == "")) {
       err=1;
       $(".mailid").css("background-color", "#D7B4D7");
      }
      reg_exp="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
      if(element_3.match(reg_exp)) {
       err=1;
       $(".mailid").css("background-color", "white");
      }
      else
      {
        
       $(".mailid").css("background-color", "#D7B4D7");
      }

      if ((element_4 == "")) {
       err=1;
       $(".mailpwd").css("background-color", "#D7B4D7");
      }








if(err==1)
{}
else
{
       $.ajax({
            type: "GET",
            url: 'ud-model/mailsettings.php',
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 + 
            "&element_4=" + element_4 +"",

            beforeSend: function() {
},   
            success: function(data) {
                        if($.trim(data) == "2")
                            {
                            alert ("Mail Settings Not Saved");
                            }
                        else
                            {
                            alert ("Mail Settings Saved");
                            }
   },
}); 
}

}

function sendMail()
{
    element_1 = $(".sendto").val();
    element_2 = $(".sendsub").val();
    element_3 = $(".sendmsg").val();
 
  reg_exp_email="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if (!(element_1.match(reg_exp_email))) { 
                      err=1;
                       $(".sendto").css("background-color","#D7B4D7");
                       }
                       else{
                         $(".sendto").css("background-color","white");
                       }


  if ((element_1 == "" )) {
       err=1;
       $(".sendto").css("background-color", "#D7B4D7");
     }
                

       
     if ((element_2 == "")) {
       err=1;
       $(".sendsub").css("background-color", "#D7B4D7");
      }


     
     if ((element_3 == "")) {
       err=1;
       $(".sendmsg").css("background-color", "#D7B4D7");
      }
     
  if(err==1)
  {}
else
{
       $.ajax({
            type: "GET",
            url: 'ud-model/sendmail.php',
            data: "element_1=" + element_1 + 
            "&element_2=" + element_2 + "&element_3=" + element_3 +"",

            beforeSend: function() {
              $('.loader').show();
},   
            success: function(data) {

              $('.loader').hide();
             
                        if(data.substr(data.length-1)=="!")
                            {
                           alert ("Mail Sent !!");
                            }
                        else
                            {
                            alert ("Mail Not Sent");
                            }
   },
}); 
}

}



function changePassword()
{  

  err = 0;
   element_1 = $('.element_1').val();
   element_2 = $('.element_2').val();
    element_3 = $('.element_3').val();


    if ((element_1 == "" )) {
       err=1;
       $(".element_1").css("background-color", "#D7B4D7");
     }
     
       
     if ((element_2 == "")) {
       err=1;
       $(".element_2").css("background-color", "#D7B4D7");
      }
     
     if ((element_3 == "")) {
       err=1;
       $(".element_3").css("background-color", "#D7B4D7");
      }



    if (element_2 != element_3){
      alert("password doesn't matched !! sorry ");
err=1;
    }

    if (err == 1){

    }
    else
    {



      $.ajax({
           type: "GET",
           url: 'ud-model/changepw.php',
           data: "element_1=" + element_1 +
           "&element_2=" + element_2 +"" ,
           beforeSend: function() {


},  
           success: function(data) {

             if($.trim(data) == "1")
          {
           alert("Password Successfully Changed");
       }
       else if($.trim(data) == "2")
       {
           alert("Password Not Changed pls enter New password");
       }
            else if($.trim(data) == "3")
       {
           alert("Old Password Not Matched")
       }            
  },
})
}

}