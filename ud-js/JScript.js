    $(document).ready(function () {
    $(".loader").hide();
  
    $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"block"});
           
    home();

      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
       
         $(".createpage").click(function (){
   
         $(".loader").show().fadeOut("fast");
        $(".page").fadeOut("fast").fadeIn("slow");
       $(".home").fadeOut("fast");
         
       
    });
 $(".newprofile").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"block"});
    $(".home1").css({"display":"none"});
   
      
    });









 $(".homeclick").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"block"});
   
      
    });


 $(".editprofile").click(function (){
   $(".page1").css({"display":"none"});
    $(".editprofile1").css({"display":"block"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});
   
      
    });





 $(".createpage").click(function (){
   $(".page1").css({"display":"block"});
    $(".editprofile1").css({"display":"none"});
    $(".newprofile1").css({"display":"none"});
    $(".home1").css({"display":"none"});
   
      
    });

    });




 function createpage()
     {
alert();
        $.ajax({
            type: "GET",
            url: 'ud-model/createprocess.php',
            data: "",
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
               $('.contentpannel .home1').html(data); 
            },

            complete: function() {
			},
            error: function() {}
        });
    }

function d(){

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
              
   
               $('.contentpannel .newprofile1').html(data);
               
   },
}) 
} 

     
    /*---------------------------------------------------------function for update of profile------------------------*/
    
function editProfile()
{




    element_1 = $("#element_1").val();
    element_2 = $("#element_2").val();
    element_3 = $("#element_3").val();
    element_4 = $("#element_4").val();
    element_5 = $("#element_5").val();
    element_6 = $("#element_6").val();
    element_7 = $("#element_7").val();
  
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
                alert(data);
                        if($.trim(data) == "1")
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