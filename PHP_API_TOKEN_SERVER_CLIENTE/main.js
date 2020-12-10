$(document).ready( function() {
    $.ajax({
        type: "POST",
        url: "Api.php", 
        headers: {
            "Token-server" : ""
        },           
        success: function (response) {
            console.log(response);
        }
    });

});