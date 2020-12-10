$(document).ready(function () {

    let data= new data();
    data.setTime(data.getTime() + (86400 * 1 ));
    $.cookie("Nombre", "Miguel Blanco");

    $.ajax({
        type: "POST",
        url: "Api.php",            
        success: function (response) {
            console.log(response);
        }
    });
});