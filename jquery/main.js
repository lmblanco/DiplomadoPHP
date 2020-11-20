var titulo="Titulo del modal";
var contenido="Este es el contenido del modal";
var tit_btn_guardar="Guardar Datos";
var tit_btn_cerrar="Cerrar modal";


$(document).ready(function () {

    $("#boton-modal_1").click(function (e) { 
        e.preventDefault();
        $("#exampleModalLabel").html(titulo);
        // $("#contenido-modal").html(contenido);
        $("#contenido-modal").load("img.html");
        $("#btn-guardar").html(tit_btn_guardar);
        $("#btn-cerrar").html(tit_btn_cerrar);
    });

    $("#boton-modal_2").click(function (e) { 
        e.preventDefault();
        $("#exampleModalLabel").html(titulo);
        $("#contenido-modal").html("");
        $("#btn-guardar").html(tit_btn_guardar);
        $("#btn-cerrar").html(tit_btn_cerrar);
    });
    
});


