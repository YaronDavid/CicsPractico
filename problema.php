<?php
//esta pagina tiene el formulario de "reportar un problema" aunque el prfmulario de momento no se envia a ninguna parte
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
                        <a href="home.php"><li>Menu Principal</li></a>
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
                            <a href="./restablecerContraseña.php"><li>Restablecer usuario</li></a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="row info">
                    <ul class="center">
                        <li id="actual">Reportar un problema</li>
                        <a href="./index.php"><li>Info</li></a>
                    </ul>
                </div>
            </div>
            
            <div class="col-10">
                <div class="row subtitulo">
                    <h1 class="tab">Reportar un problema</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            
                            <form id="problema">
                                <div class="form-group">
                                    <label>Fecha del reporte</input>
                                    <input type="date" required/>
                                </div>
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select name="tipoDeProblema" id="tipoDeProblema" form="problema">
                                        <option value="mascota">Inicio de sesion</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Información adicional</label><br/>
                                    <textarea class="form-control" id="respuesta" name="respuesta" rows="4" required></textarea>
                                </div><br/>
                                <input type="submit" value="Cambiar contraseña" class="btn btn-primary"/>
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





























            