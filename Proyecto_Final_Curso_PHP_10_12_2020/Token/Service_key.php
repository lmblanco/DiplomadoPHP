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
                    "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/index.html",
                    "movil" => array(
                        "Archivo" => "index.html",
                        "Nombre" => "INICIO",
                        "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/index.html"
                    )
                ),
                "Menu_2" => array(
                    "Archivo" => "curso.html",
                    "Nombre" => "CURSO",
                    "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/curso.html",
                    "movil" => array(
                        "Archivo" => "curso.html",
                        "Nombre" => "CURSO",
                        "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/curso.html"
                    )
                ),
                "Menu_3" => array(
                    "Archivo" => "hobbies.html",
                    "Nombre" => "HOBBIES",
                    "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/hobbies.html",
                    "movil"   => array(
                        "Archivo" => "hobbies.html",
                        "Nombre" => "HOBBIES",
                        "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/hobbies.html"
                    )
                ),
                "Menu_4" => array(
                    "Archivo" => "perfil.html",
                    "Nombre" => "PERFIL",
                    "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/perfil.html",
                    "movil" => array(
                        "Archivo" => "perfil.html",
                        "Nombre" => "PERFIL",
                        "URL" => "http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/vistas/perfil.html"
                    )
                ),
                "Logo" => array(
                    "Nombre" => '<span class="font-weight-bold text-green">Loremp</span> <span class="text-dark">Insump</span>'
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