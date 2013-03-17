    $(document).ready(function () {
      
    $(".button-class-div").hide();
    $("#button-class").click(function(){
       
    $(".button-class-div").toggle();
        
    });
       
       
    });

    function loadwebform() {
    	
        $.ajax({
            type: "GET",
            url: 'model/loadform.php',
            data: "",
            beforeSend: function() {
},
            success: function(data) {
                $(".contentpannel").html("").html(data);
            },
            complete: function() {
},
            error: function() {}
        });
    }
