    $(document).ready(function () {
    $(".loader").hide();
    $(".cratepage").css({"display":"none"});


      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
       
         $(".createpage").click(function (){
   
         $(".loader").show().fadeOut("fast");
        $(".page").fadeOut("fast").fadeIn("slow");
       $(".home").fadeOut("fast");
         
       
    });
 $(".homeclick").click(function (){
   
        $(".home").fadeOut("fast").fadeIn("slow");
        $(".page").fadeOut("fast");
      
    });






    });





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
               $('.contentpannel .home').html(data); 
            },

            complete: function() {
			},
            error: function() {}
        });
    }

/*---------------------------------------------------------function for display of profile------------------------*/

   function display()
{  document.getElementById('enclosingdiv').style.display = "block"; 
       $.ajax({
            type: "POST",
            url: 'ud-model/index.php',
            data: "codetorun=0",
            beforeSend: function() {
},   
            success: function(data) {
               $('.contentpannel #mydiv').html(data);
               
   },
}) 
} 

    function edit()
{
 document.getElementById('enclosingdiv').style.display = "none";
 document.getElementById('newdiv').style.display = "block";
} 
    
    /*---------------------------------------------------------function for update of profile------------------------*/
    
function editProfile()
{
    edit();
    set_first_name = $("#set_first_name").val();
    set_last_name = $("#set_last_name").val();
    set_email = $("#set_email").val();
    set_address = $("#set_address").val();
    set_phone = $("#set_phone").val();
    set_dob = $("#set_dob").val();
    set_country = $("#set_country").val();
  
       $.ajax({
            type: "GET",
            url: 'ud-model/index.php',
            data: "codetorun=editprofile&set_first_name=" + set_first_name + 
            "&set_last_name=" + set_last_name + "&set_email=" + set_email + 
            "&set_address=" + set_address + "&set_phone=" + set_phone + "&set_dob=" +
             set_dob + "&set_country=" + set_country + "",

            beforeSend: function() {
},   
            success: function(data) {
                alert(data);
                        if($.trim(data) == "updated")
                            {
                            alert ("Successfully Updated");
                            }
                        else
                            {
                            alert ("Not Updated");
                            }
   },
}) 
}