
header('Access-Control-Allow-Origin: *');

$(document).ready(function () {
    $("#enviar").click(function (e) {
        e.preventDefault();
        let datos = [];
        datos.push($("#input_nombre").val());        
        datos.push($("#input_edad").val());
        datos.push($("#input_direccion").val());
        
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
                "clase" : "Crud",
                "guardar-php" : "123"
            },

            success: function (response) {
                console.log(response);
            }
        });
    }

}