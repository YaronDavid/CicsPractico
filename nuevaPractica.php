<?php
session_start();
include_once("services/conexion.php");
$id = $_SESSION['idUsuario'];

if (!isset($_SESSION['idUsuario'])){

    header('location: index.php');
}
//como el unico que puede acceder a está pagina es un profesor, en este caso no se hace el select
//que se habia hecho en otras paginas
?>
<!--Esta pagina tiene el formulario de creación de una nueva practica-->
<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/i.css"/>
        <link rel="stylesheet" href="./styles/regPractic.css"/>
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
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./misPracticas.php"><li>Mis practicas</li></a>
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
                        <h1>Registrar práctica</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                        <form action="crearPractica.php" method="post" id="nuevaPractica">
                            <div class="form-group row">
                                <div class="col-6">
                                        <label for="nombreUA">Unidad de aprendizaje</label><!--Esto debe cambiar a un select y cambiar con respecto a lo selecionado anteriormente-->
                                        <input class="form-control" type="text" id="nombreUA" name="nombreUA" required/>
                                </div>
                                <div class="col-6">
                                        <label for="semestre">Semestre</label><!--Esto debe cambiar a un select y cambiar con respecto a lo selecionado anteriormente-->
                                        <input class="form-control" type="text" id="semestre" name="semestre" required/>
                                </div>
                                <div class="col-6">
                                        <label for="nivel">Nivel</label><!--Esto debe cambiar a un select y cambiar con respecto a lo selecionado anteriormente-->
                                        <input class="form-control" type="text" id="nivel" name="nivel" required/>
                                </div>
                                <div class="col-6">
                                        <label for="carrera">Carrera</label><!--Esto debe cambiar ser el primer select en el formulario, además de poder cambiar los value, por el id, no por el nombre aunque eso solo seria poner el select aqui y no en la ventana siguiente-->
                                        <select class="form-control" name="carrera" id="carrera" form="nuevaPractica">
                                            <option value="" disabled selected>Seleccione una opcion</option>
                                            <option value="odontologia">Odontología</option>
                                            <option value="optometria">Optometría</option>
                                            <option value="psicologia">Psicología</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="grupo">Grupo</label>
                                    <input class="form-control" type="text" id="grupo" name="grupo" required/>
                                </div>
                                <div class="col-6">
                                    <label>Fecha de realización</input>
                                    <input type="date" name="fecha" id="fecha" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                <!--Esto hay que cambiarlo por lo que este registrado en la BD
                                además se podría cambiar los value en lugar del nombre el Id directamente-->
                                <label for="EF">Entidad Federativa</label>
                                    <select class="form-control" name="EF" id="EF" form="nuevaPractica">
                                        <option value="" disabled selected>Seleccione una opcion</option>
                                        <option value="Aguas Calientes">Aguas Calientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="CDMX">CDMX</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label># de alumnos</input><br/>
                                    <input class="form-control" type="text" name="alumnos" id="alumnos" required/>
                                </div>
                            </div>
                            <div class="">
                                <label for="RS">Empresa o razón social</label>
                                <input class="form-control" type="text" name="RS" id="RS" required/>     
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="competencia">Competencias a desarrollar</label>
                                    <input class="form-control" type="text" name="competencia" id="competencia" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Estrategias para el desarrollo de las competencias</input>
                                    <textarea class="form-control" name="extrategias" id="estrategias" rows="5" cols="50" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Objetivos de la practica</input>
                                    <textarea class="form-control" name="objetivo" id="objetivo" rows="5" cols="50" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <!--Este se elimina-->
                                    <label for="link">Link con portafolio de los alumnos</label>
                                    <input class="form-control" type="text" name="link" id="link" required/>
                                </div>
                                
                            </div><br/>
                                    <a href="./home.php" class="res">Regresar</a>
                                    <input type="submit" value="Registrar Practica" class="btn btn-primary"/>
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