topvalue = 0;
textval = 0;

$(document).ready(function() {




$('body , document').keyup(function(e){


if(e.shiftKey && e.keyCode == 76 && e.altKey){
    $('dd').filter(':nth-child(n+4)').hide();
            $(".login1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
    }

if(e.shiftKey && e.keyCode == 72 && e.altKey){

    $('dd').filter(':nth-child(n+4)').hide();
            $(".home1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
       
    }

    if(e.shiftKey && e.keyCode == 65 && e.altKey){
          $('dd').filter(':nth-child(n+4)').hide();
            $(".about1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
    }
 if(e.shiftKey && e.keyCode == 67 && e.altKey){
          $('dd').filter(':nth-child(n+4)').hide();
            $(".contact1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
    }
  if(e.shiftKey && e.keyCode == 83 && e. altKey){
          $('dd').filter(':nth-child(n+4)').hide();
            $(".services1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
    }

if(e.shiftKey && e.keyCode == 82 && e.altKey){
          $('dd').filter(':nth-child(n+4)').hide();
            $(".register1").slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
 
    }
    if( e.shiftKey && e.keyCode == 85 && e.altKey){
$('body,html').animate({
            scrollTop: 0
        }, 1000);
      
    }


});

    var topvalue = 0;
    $('#p1,#p2').hide();

    $("#user_name,#password").click(function() {
        if ($(this).val() == "Invalid") {
            $(this).css("background-color", "white");
            $(this).css({
                "color": "black"
            });
            $(this).val("");
        }

    });


    $("#reg_user_name,#reg_password,#reg_confirm_password,#reg_first_name,#reg_last_name,#reg_email,#reg_address,#reg_phone,#reg_age,#reg_dob").click( function(){
  if($(this).val() == "Invalid")  {
  $(this).css("background-color","white");
  $(this).css({"color":"black"});
  $(this).val("");
  }

  });


    $("#contact_suggestion,#contact_email,#contact_name").click(function() {
        if ($(this).val() == "Invalid") {
            $(this).css("background-color", "white");
            $(this).css({
                "color": "black"
            });
            $(this).val("");
        }
    });

    /*  $("#reg_user_name")

                        $("#reg_password")

                        $("#reg_confirm_password")

                        $("#reg_first_name")

                        $("#reg_last_name")

                        $("#reg_email")

                        $("#reg_address")

                        $("#reg_phone")

                        $("#reg_dob")

                        $("#reg_age")
                      */

    // - -------------------------------------------start of code for top window-------------------------------    
    $('.top').hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.top').fadeIn();
        } else {
            $('.top').fadeOut();
        }
    });
    $('.top a').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
    });

    $('dd').filter(':nth-child(n+4)').hide();
    $('dt').click(function() {
        $(this).next().slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
    });
});

// - -------------------------------------------End of code for top window-------------------------------    

// - -------------------------------------------start of code for slider-------------------------------

function slideImage1() {
    if (topvalue < -2400) {
        topvalue = 0;
    } else {
        $("#slider1").animate({
            top: topvalue
        }, 1500).fadeOut("fast").fadeIn("slow");
        topvalue = topvalue - 450;
    }
    switch (textval) {

    case 0:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We allow users to share articles with other members who share a common interest in a topic. Join a group to submit topical articles that other members would be interested in.");
        textval = 1;
        break;
    case 1:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("A social network site isn't very social without the ability to communicate with each other. We included a private messaging module with Pligg, so that you can send your friends a message that they can respond to.");
        textval = 2;
        break;
    case 2:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("Each user that signs up on a Pligg site gets their own profile page where they can change their settings, send personal messages, add an avatar, make friends and other great features.");
        textval = 3;
        break;
    case 3:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We've done our best to help drive more traffic to your site by being as search engine friendly as possible. Our SEO methods will help get your site indexed faster and more often.");
        textval = 5;
        break;

    case 5:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We're big fans of using RSS feeds to follow the latest news from our favorite sites and that's why we have added RSS functionality all over Pligg. You can subscribe to a user's voting trends, the front page, upcoming page and categories.");
        textval = 6;
        break;

    case 6:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We use the Smarty template system to keep our code separate from the design. This makes updating your site to the latest version of Pligg easier, and designing new templates a breeze. View free templates listed on the forum.");
        textval = 7;
        break;

    case 7:

        $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("A social network site isn't very social without the ability to communicate with each other. We included a private messaging module with Pligg, so that you can send your friends a message that they can respond to.");
        textval = 0;
        break;
    }
}
setInterval("slideImage1()", 5000);

// - -------------------------------------------End of code for slider-------------------------------

// - ------------------------------------------- start validate login/varify authenticaion ajax -------------------------------    

function checklogin() {
    user_name = $('#user_name').val();
    password = $('#password').val();
    if ((user_name == "" && password == "") || (user_name == null && password == null)) {
        $("#user_name").css("background-color", "#FF0000");
        i = 0;
        $("#password").css("background-color", "#FF0000");
        $("#user_name").val("Invalid").css({
            "opacity": "0.5",
            "color": "white"
        });
        $("#password").val("Invalid").css({
            "opacity": "0.5",
            "color": "white"
        });
    }
 else {
        $.ajax({
            type: "GET",
            url: 'model/index.php',
            data: "codetorun=0&user_name=" + user_name + "&password=" + password + "",
            beforeSend: function() {
},
            success: function(data) {
                //   $('#p1').html().remove().html(data);
                //$('#p1').text(data).hide().fadeIn("3000");
                alert(data);
                if ($.trim(data) == 'You are not logged in') {

                    $('#p1').text("You are not logged in").hide().fadeIn("3000");
                } else {
                    window.location.href = "./index.php?function=loadDasboard";
                }

            },
            complete: function() {
},
            error: function() {}
        });
    }
}

// - ------------------------------------------- End validate login/varify authenticaion ajax-------------------------------    
function register() {
    reg_user_name = $("#reg_user_name").val();

    reg_password = $("#reg_password").val();

    reg_confirm_password = $("#reg_confirm_password").val();

    reg_first_name = $("#reg_first_name").val();

    reg_last_name = $("#reg_last_name").val();

    reg_email = $("#reg_email").val();

    reg_address = $("#reg_address").val();

    reg_phone = $("#reg_phone").val();

    reg_dob = $("#reg_dob").val();
    err=0;
    reg_age = $("#reg_age").val();
    reg_gender = $("#reg_gender").val();
    reg_country = $("#reg_country").val();


                reg_exp = "^[A-Za-z][A-Za-z0-9]+$";
                  if(reg_user_name == "" || !(reg_user_name.match(reg_exp))) {
                     err=1;
                        $("#reg_user_name").css("background-color","#FF0000");
                        $("#reg_user_name").val("Invalid").css({"opacity":"0.5","color":"white"});
                      }
               if(reg_password == "" || reg_password == null) {
                          err=1;
                        $("#reg_password").css("background-color","#FF0000");
                        $("#reg_password").val("Invalid").css({"opacity":"0.5","color":"white"});
                      } 
               if(reg_confirm_password == "" || reg_confirm_password != reg_password) {
                   err=1;
                $("#reg_confirm_password").css("background-color","#FF0000");
                $("#reg_confirm_password").val("Invalid").css({"opacity":"0.5","color":"white"});
               }   
               reg_exp = "^[A-Za-z]+$";
               if(reg_first_name == "" || !(reg_first_name.match(reg_exp))) {
                   err=1;
                $("#reg_first_name").css("background-color","#FF0000");
                $("#reg_first_name").val("Invalid").css({"opacity":"0.5","color":"white"});
               }
               reg_exp = "^[A-Za-z]+$";
               if(reg_last_name == "" || !(reg_last_name.match(reg_exp))) {
                   err=1;
                $("#reg_last_name").css("background-color","#FF0000");
                $("#reg_last_name").val("Invalid").css({"opacity":"0.5","color":"white"});
               }
               if(reg_email == "")    {  
                err=1;
                 $("#reg_email").css("background-color","#FF0000");
                   $("#reg_email").val("Invalid").css({"opacity":"0.5","color":"white"});
                     
            }
               //alert(reg_email);
                reg_exp_email = "^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)* @[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$";
                    if (reg_email.match(reg_exp_email)) { 
                      err=1;
                       $("#reg_email").css("background-color","#FF0000");
                       $("#reg_email").val("Invalid").css({"opacity":"0.5","color":"white"});
                    }   
                    
                    if(reg_address == "")    {  
                        err=1;
                      $("#reg_address").css("background-color","#FF0000");
                       $("#reg_address").val("Invalid").css({"opacity":"0.5","color":"white"});          
                 }   
                
                    if(reg_dob == "")    { 
                    err=1;  
                     $("#reg_dob").css("background-color","#FF0000");
                       $("#reg_dob").val("Invalid").css({"opacity":"0.5","color":"white"});
                         
                 }
                reg_exp="^[0-9]+$";
                if(reg_phone == "" || !(reg_phone.match(reg_exp))) {
                    err=1;
                  $("#reg_phone").css("background-color","#FF0000");
                  $("#reg_phone").val("Invalid").css({"opacity":"0.5","color":"white"});
                 }
                
                reg_exp="^[0-9]+$";
                if(reg_age == "" || !(reg_age.match(reg_exp)) ||reg_age > 90) {
                    err=1;
                  $("#reg_age").css("background-color","#FF0000");
                  $("#reg_age").val("Invalid").css({"opacity":"0.5","color":"white"});
                 }

alert(err);
if(err==1)
{


}else{



    $.ajax({
        type: "GET",
        url: 'model/index.php',
        data: "codetorun=registerme&reg_user_name=" + reg_user_name +
         "&reg_password=" + reg_password + "&reg_first_name=" + reg_first_name + 
         "&reg_last_name=" + reg_last_name + "&reg_email=" + reg_email + 
        "&reg_address=" + reg_address + "&reg_phone=" + reg_phone + "&reg_dob=" +
         reg_dob + "" + "&reg_age=" + reg_age + "&reg_gender=" + reg_gender + "&reg_country=" 
         + reg_country + "",

        beforeSend: function() {
},
        success: function(data) {

            //   $('#p1').html().remove().html(data);
            //$('#p1').text(data).hide().fadeIn("3000");
            alert(data);
            if ($.trim(data) == "user already exists") {
               
                $('#p2').text(data).hide().fadeIn("3000");
            } else if ($.trim(data) == "successfully registered") {
                alert("successfully registered");
                window.location.href = "./index.php?function=loadDasboard";
            }

        },
        complete: function() {
},
        error: function() {}
    });
}
}


function check(){

str = $('#reg_password').val();
pat1= /(?=.*\d)(?=.*[a-z]).{6,9}/;

pat2= /(?=.*\d)(?=.*[A-Z#]).{6,11}/;

pat3= /(?=.*\d)(?=.*[A-Z])(?=.*[@!#]).{6,12}/;

pat4= /(?=.*\d)(?=.*[A-Z])(?=.*[\\%._]).{6,13}/;

$('.strength').css({width:"20px"},"fast");
if (str.match(pat1))
{
  
$('.strength').css({width:"80px"});
}
if(str.match(pat2)) { 
$('.strength').css({width:"130px"});
}
if(str.match(pat3)) { 
$('.strength').css({width:"170px"});
}
if(str.match(pat4)) { 
$('.strength').css({width:"230px"});
}
}