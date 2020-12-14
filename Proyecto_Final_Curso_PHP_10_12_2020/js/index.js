// KEY METODO: 16079269095fd7047d65711
// KEY CLASE: e34a2c3bdd77be244ed2da33980cf3cfe967ac69

$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers : {
            "Token-Metodo" :"16075688805fd18df09ff8a",
            "Class" : "e34a2c3bdd77be244ed2da33980cf3cfe967ac69",
        },
        data: {datos: null},
        success: function (response) {
            let json = JSON.parse(response);
            let keys = Object.keys(json["Datos"]);
            keys.forEach(id =>{
                $(".navbar-nav").append('<li class="nav-item">\
                                            <a class="nav-link text-light" href="#">'+json["Datos"][id]["Nombre"]+'</a>\
                                         </li>');
            });
        }
    });
});