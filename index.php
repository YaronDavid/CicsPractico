<!-- Este es la pagina de inicio, esta asociado a la pestaña "info" del aside
hay que agregar el
session_start();
include_once("services/conexion.php");
$id = $_SESSION['idUsuario'];
y en la pagina de home.php explicare porque
en esta página solo aparece el inicioDeSesion.php
-->

<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/in.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">
            <div class="row navegacion">
                <div class="icono col-1">
                    <img class="ipn" src="https://onceninasyninos.tv/wp-content/uploads/2018/04/Banner-logos-ipn-e1523046221576.png"/>
                </div>
                <div class="titulo col-10">
                    <h1 class="cicsPractico">CICSPractico</h1>
                </div>
                <div class="icono2 col-1">
                    <img class="cics" src="./images/cics.jpeg"/>
                </div>
            </div>

        <div class="row main">

            <div class="col-2 aside">
                <div class="row opciones">
                    <ul class="center">
                        <a href="./inicioDeSesion.php"><li class="boton">Inicio de sesion</li></a>
                        
                    </ul>
                </div>
                <div class="row info">
                    <ul class="center">
                        <li id="actual">Info</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-10">
                <div class="row subtitulo">
                    <h1>Información del sistema</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            <h1>Bienvenido</h1>
                            <hr/>
                            <p>Esta pagina tiene es un proyecto que tiene como finalidad agilizar el proceso para la programación y
                                seguimineto de las practicas y visitas escolares del Centro Interdisciplinario de Ciencias de la Salud
                                Unidad Santo Tomás del Instituto Politenico Nacional.
                            </p>
                            <p>
                                En caso de contar con una cuenta favor de hacer clic en una de las opciones del lado izquierdo
                                de lo contrario por favor acude con el coordinador de practicas y visitas para poder crear una cuenta nueva.</p>
                                <a href="privacidad.php">Aviso de privacidad</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>

        </div>
</div>
    </body>
</html>