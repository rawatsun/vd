    $(document).ready(function () {
    $(".loader").hide();

      
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
                $(".loader").show();
},
            success: function(data) {
                $(".loader").hide();
                $(".contentpannel").html("").html(data).hide().fadeIn("slow");
            },
            complete: function() {
},
            error: function() {}
        });
    }





function home() {
        
        $.ajax({
            type: "GET",
            url: 'ud-model/index.php',
            data: "",
            beforeSend: function() {
                $(".loader").show();
},
            success: function(data) {
                $(".loader").hide();
                $(".contentpannel").html("").html(data).hide().fadeIn("slow");
            },
            complete: function() {
},
            error: function() {}
        });
    }

