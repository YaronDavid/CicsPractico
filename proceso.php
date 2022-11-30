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
        <link rel="stylesheet" href="./styles/proceso.css"/>
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
                        if($tipo==1){
                        ?>    
                            <li id="actual">Proceso de practicas</li>
                            <a href="./misPracticas.php"><li>Mis practicas</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                        <?php }
                        if($tipo==2){
                        ?>
                            <a href="./listaDeProfesores.php"><li>Profesores</li></a>
                            <li id="actual">Proceso de practicas</li>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                        <?php }
                        if($tipo==3){
                        ?>
                            <a href="./listaDeUsuarios.php"><li>Usuarios</li></a>
                            <li id="actual">Proceso de practicas</li>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                            <a href="./nuevoUsuario.php"><li>Crear Usuario</li></a>
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
                        <h1>Proceso de practicas</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            <h1>Proceso de practicas</h1>
                            <?php
                               $fecha = date("Y-m-d H:i:s");
                               $consulta = "SELECT * FROM bitacora WHERE fechaInicio < '$fecha' AND fechaFin > '$fecha'";
                               $query = $conn -> prepare($consulta);
                               $query -> execute();
                               $result = $query -> fetchAll();
                               if($result){
                                foreach($result as $row){
                                    $_SESSION['idBitacora'] = $row['idBitacora'];
                                ?>
                                    <h4>Fecha Inicio: <?php echo $row["fechaInicio"];?> </h4>
                                    <h4>Fecha Termino: <?php echo $row["fechaFin"];?> </h4>
                                    <?php if($tipo==1){?>
                                        <a href="nuevaPractica.php">Registrar nueva practica</a>
                                    <?php }if($tipo==2||$tipo==3){?>
                                        <a href="consultarPracticas.php">Consultar practicas</a>
                                    <?php }?>
                                <?php
                                }
                               }else{
                                echo "bola";
                               }
                               
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>

        </div>
</div>
    </body>
</html>