<?php
session_start();
include_once("services/conexion.php");
$id = $_SESSION['idUsuario'];

if (!isset($_SESSION['idUsuario'])){

    header('location: index.php');
}


$consulta = "SELECT * FROM usuario WHERE tipoUsuario!=3";

$conexion = new CConection();
$conn = $conexion->conectar();

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();

//2 declaraciónes
$tipo=0;
$idUsuario=0;

?>

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
                        <a href="./home.php"><li>Menu Principal</li></a>
                        <li id="actual">Usuarios</li>
                        <a href="./proceso.php"><li>Proceso de practicas</li></a>
                        <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                        <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
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
                        <h1>Usuarios</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
                </div>
                <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-8"><p>Alta y baja de usuarios tipo Administrador/Lector</p></div>
                                <div class="col-4">Buscar</div>
                            </div>
                            </div>
                        <div class="col-1"></div>
                </div>

                <div class="row">
                <div class="col-1"></div>
                        <div class="col-10">
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>Tipo de Usuario</td>
                                            <td>Editar</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($result as $row){
                                                $tipo=$row["tipoUsuario"];//aqui recojo el tipo de usuario
                                                $nombre=$row["nombre"];//aqui recojo el nombre
                                                //como el tipo es numerico, estos if's los convierten en texto
                                                if($tipo==0){
                                                    $tipo="Lector";
                                                }if($tipo==1){
                                                    $tipo="Profesor";
                                                }if($tipo==2){
                                                    $tipo="Administrador";
                                                }
                                        ?>
                                                <tr>
                                                    <td><?php echo $nombre?></td><!--Estas 2 filas estan dentro del for, por lo que imprime todos los nombres y tipos de usuario de la BD-->
                                                    <td><?php echo $tipo?></td>
                                                    
                                                    <td><a href="./editarUsuario">Editar</a></td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                <div class="col-1"></div>
            </div>

            </div>
            <div class="w-100"></div>

        </div>
</div>
    </body>
</html>


