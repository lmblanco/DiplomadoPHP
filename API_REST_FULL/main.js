$(document).ready(function () {
    $("#enviar").click(function (e) {
        e.preventDefault();
        let datos = [];
        datos.push($("#input_nombre").val());        
        datos.push($("#input_direccion").val());
        datos.push($("#input_genero").val());
        
        let obj = new informacion();
        obj.Guardar(datos);

      });
});


class informacion{

    Guardar(datos){
        $.ajax({
            type: "POST",
            url: "Api.php",
            data: {datos},
            header: {
                "guardar-php" : "Crud"
            },

            success: function (response) {
                console.log(response);
            }
        });
    }

}