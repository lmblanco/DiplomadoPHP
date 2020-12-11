$(document).ready(function () {
    let datos = ["Luis Miguel","Blanco Carrillo"];
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers : {
            "Token-Metodo" :"16075688805fd18df09ff8a",
            "Class" : "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        },
        data: {datos},
        success: function (response) {
            console.log(response);
        }
    });
});
