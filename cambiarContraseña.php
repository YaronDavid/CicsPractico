<?php
session_start();
//el proceso de recuperar la sesión, consultar los datos se hace en todas las paginas ya que es necesario saber que tipo de usuario es
//por el aside, no se si sea más conveniente cambiar ese proceso por guardar directamente el tipoUsuario (y toda la info del usuario)
//en la sesión
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
<!--Esta pagina permite al usuario cambiar su contraseña
Ya que es un poco dificil recordar la contraseña de 8 caracteres generada
por el programa-->
<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/in.css"/>
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
                        <a href="./home.php"><li>Menu Principal</li></a>
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
                            <li id="actual">Cambiar contraseña</li>
                        <?php }
                        if($tipo==3){
                        ?>
                            <a href="./listaDeUsuarios.php"><li>Usuarios</li></a>
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                            <a href="./restablecerContraseña.php"><li>Restablecer usuario</li></a>
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
                        <h1>Cambiar contraseña</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            <form action="validarCambio.php" method="post">
                                <div class="form-group">
                                    <label for="actual">Contraseña actual</label>
                                    <input class="form-control"type="text" id="actual" name="actual" required/>
                                </div>
                                <div class="form-group">
                                    <label for="nueva">Nueva contraseña</label>
                                    <input class="form-control" type="text" id="nueva" name="nueva" required/>
                                </div>
                                <div class="form-group">
                                    <label for="vefiricar">Repita nueva contraseña</label>
                                    <input class="form-control" type="text" id="verificar" name="verificar" required/>
                                </div><br/>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>

        </div>
</div>
    </body>
</html>