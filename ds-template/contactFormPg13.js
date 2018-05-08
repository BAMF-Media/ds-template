$(document).ready(function(){
    $("#submit").click(function(){
        // var name = $("#name").val();
        var email = $("#email").val();
        // var message = $("#message").val();

        $("#returnmessage").empty(); //To empty previous error/success message.

// Returns successful data submission message when the entered information is stored in database.
            $.post("contactFormPg13.php",{ email1: email},
                function(data) {
                    // $("#returnmessage").append(data);//Append returned message to message paragraph
                    if(data=="Your Query has been received, We will contact you soon."){
                        $("#errorMessage").slideUp("fast");

                        $("#form")[0].reset();//To reset form fields on success

                        setTimeout(function() {
                            window.location.replace("http://www.launch.dirtysocks.com/thankYou");
                        }, 1200);


                    }
                    else if( data == "invalid email"){
                        $("#errorMessage").slideDown("fast");
                    }



                });


    });
});
