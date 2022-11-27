<?php
session_start();
include_once("services/conexion.php");
$id = $_SESSION['idUsuario'];

if (!isset($_SESSION['idUsuario'])){

    header('location: index.php');
}


$consulta = "SELECT * FROM usuario WHERE idUsuario='$id'";

$conexion = new CConection();
$conn = $conexion->conectar();

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();

$tipo='';

?>

<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/i.css"/>
        <link rel="stylesheet" href="./styles/home.css"/>
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
                        <li id="actual">Menu Principal</li>
                        <?php 
                        foreach($result as $row){
                            $tipo=$row["tipoUsuario"];
                        }
                        if($tipo==0){
                        ?>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                        <?php }
                        if($tipo==1){
                        ?>    
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./misPracticas.php"><li>Mis practicas</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                        <?php }
                        if($tipo==2){
                        ?>
                            <a href="./listaDeProfesores.php"><li>Profesores</li></a>
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                        <?php }
                        if($tipo==3){
                        ?>
                            <a href="./listaDeUsuarios.php"><li>Usuarios</li></a>
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                            <a href="./nuevoUsuario.php"><li>Crear Usuario</li></a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="row info">
                    <ul class="center">
                        <a href="./problema.php"><li>Reportar un problema</li></a>
                        <a href="./index.php"><li>Info</li></a>
                    </ul>
                </div>
            </div>
            
            <div class="col-10">
                <div class="row subtitulo">
                    <div class="col-10">
                        <h1>Información del sistema</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
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
                                de lo contrario por favor acude con el coordinador de practicas y visitas para poder crear una cuenta nueva
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>

        </div>
</div>
    </body>
</html>