    $(document).ready(function () {
        alert();
      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
       
       
    });

     function home()
     {
        alert("a");
    $.ajax({
            type: "GET",
            url: 'ud-model/ud-home.php',
            data: "",
            beforeSend: function() {
             },
            success: function(data) {
               alert(data);
               var user_name = data[0];
               var user_id = data[1];
               var url = data[2];
               var blogs = data[3];
               var ip = data[4];
               var template_name = data[5];

               $('.contentpannel').html(data); 
            },

            complete: function() {
			},
            error: function() {}
        });
    }

    