<?php
interface Clases{
    const token_class = array(
        "Service_usuario" => "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        "Service_menu" => "e34a2c3bdd77be244ed2da33980cf3cfe967ac69",
        "Service_footer" => "69f3c3e2510ec04815365ea0d027dc84bd335749",
        "Service_imagenes" => "e7824eacb458dd094ea88650339708728e3eaf5a",
        "Service_index" => "e7824eacb458dd094ea15650339708728e3eaf5a"
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
                        "Nombre" => "PASATIEMPOS",
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
                    "Nombre" => '<span class="font-weight-bold text-green">Luis</span> <span class="text-dark">Blanco</span>',
                    "movil" => array(
                        "Nombre" => 'OPC. Menú'
                    )
                )
            ),
            "Plantilla" => array()
        ),
        "16081637195fdaa187b0408" => array(
            "id" => "Footer_informacion",
            "Datos" => array(
                "Experiencia" => '<h2 class="mb-3">Tecnologo en Sistemas llevo en programación 3 años, </h2>',
                "Como_Me_Entere_Curso" => '<p class="lead text-white-50 mb-8">Me entere por un amigo del trabajo en comfenalco</p>'
            ),
            "Plantilla" => array()
        ),
        "16081646985fdaa55a8a067" => array(
            "id" => "Imagenes_index",
            "Datos" => array(
                "Imagen_1" => array(
                    "URL" =>  '<div class="carousel-item active">
                                    <h1 class="img-1 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">PROGRAMACION</h1>
                                    <img class="d-block w-100" src="http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/img/img1.jpg">
                                </div>'
                ),
                "Imagen_2" => array(
                    "URL" =>  '<div class="carousel-item">
                                    <h1 class="img-2 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">FUTBOL</h1>
                                    <img class="d-block w-100" src="http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/img/img2.jpg">
                                </div>'
                ),
                "Imagen_3" => array(
                    "URL" =>  '<div class="carousel-item">
                                    <h1 class="img-3 slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">MUSICA</h1>
                                    <img class="d-block w-100" src="http://localhost/DiplomadoPHP/Proyecto_Final_Curso_PHP_10_12_2020/img/img3.jpg">
                                </div>'
                )
            ),
            "Plantilla" => array()
        ),
        "16081646915fdaa55a8a187" => array(
            "id" => "Session1",
            "Datos" => array(
                "Titulo" => '<h1 class="mb-3">Este es mi unico pasatiem</h1>',
                "Parrafo" => '<p class="lead mb-3">Me gusta programar ya que desde niño siempre fue mi estudio principal y llevo 6 años en la programación</p>'
            ),
            "Plantilla" => array(
                "Boton"
            )
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