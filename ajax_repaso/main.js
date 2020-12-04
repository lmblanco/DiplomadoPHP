$(document).ready(function () {
    $("#enviar").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "https://pruebacofenalco.000webhostapp.com/Ajax_API/API.php",
            data: {nombre : "Miguel Blanco"},
            success: function (response) {
                console.log(response);
            }
        });
      });
});