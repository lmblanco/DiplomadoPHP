<?php
interface Clases{
    const token_class = array(
        "Service_usuario" => "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        "Service_menu" => "e34a2c3bdd77be244ed2da33980cf3cfe967ac69"
    );
}
interface Metodos{
    const token_methodo = array(
        "16075688805fd18df09ff8a" => array(
            "id" => "Saludar",
            "Datos" => array(
                "Mensaje" => "Como Estas Sistemas"
            ),
            "Plantilla" => array(
                "Nombre", 
                "Apellido"
            )
        ),
        "16079269095fd7047d65711" => array(
            "id" => "Menu_PC",
            "Datos" => array(
                "Menu_1" => array(
                    "Archivo" => "index.html",
                    "Nombre" => "INICIO",
                    "URL" => "#"
                ),
                "Menu_2" => array(
                    "Archivo" => "curso.html",
                    "Nombre" => "CURSO",
                    "URL" => "#"
                ),
                "Menu_3" => array(
                    "Archivo" => "hobbies.html",
                    "Nombre" => "HOBBIES",
                    "URL" => "#"
                ),
                "Menu_4" => array(
                    "Archivo" => "Perfil.html",
                    "Nombre" => "PERFIL",
                    "URL" => "#"
                )
            ),
            "Plantilla" => array()
        )
    );
} 
interface Mensajes{
    const Clases_Methodo = array(
        "Clase_Negativa" => "No existe la Clase",
        "Methodo_Negativa" => "El metodo no existe"
    );
}
?>