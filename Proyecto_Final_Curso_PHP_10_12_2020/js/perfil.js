

$(document).ready(function () {
    // Crear el menu segun los parametros
    $.ajax({
        type: "POST",
        url: "../Api.php",
        headers : {
            "Class" : "e34a2c3bdd77be244ed2da33980cf3cfe967ac69",
            "Token-Metodo" :"16079269095fd7047d65711",
        },
        data: {datos: null},
        success: function (response) {
            let json = JSON.parse(response);
            let keys = Object.keys(json["Datos"]);
            keys.forEach(id =>{
                if (id !="Logo") {
                    $(".navbar-nav").append('<li class="nav-item">\
                                            <a class="nav-link text-light" href="'+json["Datos"][id]["URL"]+'">'+json["Datos"][id]["Nombre"]+'</a>\
                                         </li>');
                    $('.list-unstyled').append('<li class="mb-5">\
                                            <a href="'+json["Datos"][id]["movil"]["URL"]+'" class="display-4 text-light">'+json["Datos"][id]["movil"]["Nombre"]+'</a>\
                                        </li>');
                }else{
                    $(".navbar-brand").html(json["Datos"][id]["Nombre"]);
                    $(".modal-title").html(json["Datos"][id]["movil"]["Nombre"]);
                }
                
            });
        }
    });
    
    // Crear el footer segun los parametros
    $.ajax({
        type: "POST",
        url: "../Api.php",
        headers : {
            "Class" : "69f3c3e2510ec04815365ea0d027dc84bd335749",
            "Token-Metodo" :"16081637195fdaa187b0408",
        },
        data: {listadotos:null},
        success: function (response) {
            let json = JSON.parse(response);
            for(id in json["Datos"]){
                $(".pie_pagina").append(json["Datos"][id]);
            }
        }
    });

    // Crear las imagenes segun los parametros
    $.ajax({
        type: "POST",
        url: "../Api.php",
        headers : {
            "Class" : "e7824eacb458dd094ea88650339708728e3eaf5a",
            "Token-Metodo" :"16082201375fdb7de994ad9",
        },
        data: {datosenviados: null},
        success: function (response) {
            let json = JSON.parse(response);
            for(id in json["Datos"]){
                $(".carousel-inner").append(json["Datos"][id]["URL"]);
            }
        }
    });

    // Crear la session del parrafo
    let URL = ['<a href="http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/index.html" class="btn btn-primary">Regresar</a>'];
    $.ajax({
        type: "POST",
        url: "../Api.php",
        headers : {
            "Class" : "f658078cfc136eca7b26453b545fc448361db817",
            "Token-Metodo" :"16082202165fdb7e38ddabd",
        },
        data: {URL},
        success: function (response) {
            let json = JSON.parse(response);
            $(".hero-content").append(json["Datos"]["Titulo"]);
            $(".hero-content").append(json["Datos"]["Parrafo"]);
            $(".hero-content").append(json["Plantilla"]["Boton"]);
        }
    });

    // $.ajax({
    //     type: "GET",
    //     url: "../Api.php",
    //     success: function (response) {
    //         console.log(response);
    //     }
    // });


});
