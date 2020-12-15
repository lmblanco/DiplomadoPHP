// $(document).ready(function () {
//     $("#enviar_datos").click(function (e) { 
//         e.preventDefault();
//         let datos = [];
//         datos.push($("#nombre").val());
//         datos.push($("#apellido").val());
//         datos.push($("#edad").val());
        
//         $.ajax({
//             type: "GET",
//             url: "https://pruebacofenalco.000webhostapp.com/API/API.php",
//             data: {nombre : $("#nombre").val()},
//             success: function (response) {
//                 alert(response);
//             }
//         });
//     });
// });

$(document).ready(function () {
    $("#enviar_datos").click(function (e) { 
        $.ajax({
            type: "GET",
            url: "https://pruebacofenalco.000webhostapp.com/API/API.php",
            data: {nombre : $("#nombre").val()},
            success: function (response) {
                alert(response);
            }
        });
    });
    
});