<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/i.css"/>
        <link rel="stylesheet" href="./styles/nue.css"/>
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
                            <a href="./home.php"><li>Menu principal</li></a>
                            <a href="./listaDeUsuarios.php"><li>Usuarios</li></a>
                            <a href="./proceso.php"><li>Proceso de practicas</li></a>
                            <a href="./consultarInformacion.php"><li>consultar Informacion</li></a>
                            <a href="./cambiarContrasena.php"><li>Cambiar contraseña</li></a>
                            <li id="actual">Crear Usuario</li>
                            <a href="./restablecerContraseña.php"><li>Restablecer usuario</li></a>
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
                        <h1>Nuevo usuario</h1>
                    </div>
                    <div class="col-2">
                        <a class="btn" id="cerrarSesion" href="destruirSesion.php">Cerrar sesion</a>
                    </div>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                        <form action="crearUsuario.php" method="post" id="nuevoUsuario">
                            <div class="form-group row">
                                <div class="col-12">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" type="text" id="nombre" name="nombre" required/>
                                    
                                </div>
                                <div class="col-6">
                                    <label for="apPat">Apellido paterno</label>
                                    <input class="form-control" type="text" id="apPat" name="apPat" required/>
                                </div>
                                <div class="col-6">
                                    <label for="apMat">Apellido materno</label>
                                    <input class="form-control" type="text" id="apMat" name="apMat" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input class="form-control" type="text" id="correo" name="correo" required/>
                            </div><br/>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="tipo">Seleccione tipo de usuario</label>
                                    <select name="tipo" id="tipo" form="nuevoUsuario">
                                        <option value="" disabled selected>Seleccione una opcion</option>
                                        <option value="0">Lector</option>
                                        <option value="1">Profesor</option>
                                        <option value="2">Administrador</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label>Fecha de nacimiento</input>
                                    <input type="date" name="fecha" id="fecha" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php 
                                    $num = '0123456789';
                                    $min = 'abcdefghijklmnopqrstuvwxyz';
                                    $may = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    //en las 3 siguientes filas obtengo un numero, una minuscula y una mayuscula aleatorias, para segurar que siempre haya 1 de cada uno
                                    $sal = substr(str_shuffle($num), 0, 1);
                                    $sal = $sal.substr(str_shuffle($min), 0, 1);
                                    $sal = $sal.substr(str_shuffle($may), 0, 1);
                                    //esta ultima ya realiza la obtencion de 5 caracteres aleatorios entre, numero, mayusculas o minusculas
                                    $sal = $sal.substr(str_shuffle($min.$may.$num), 0, 5);
                                ?>
                                <label for="contrasena">Contraseña</label>
                                <?php
                                    //este echo devuelve el input con la contraseña, al estar desabilitado, no la puede cambiar
                                    echo "<input class='form-control' type='text' id='contrasena' name='contrasena' value=$sal required disabled/>";
                                ?>    
                            </div>
                            <br/>
                            <div class="form-group row">
                                <div class="col-4">
                                    <label for="pregunta">Elija su pregunta de seguridad</label></br>
                                    <select name="pregunta" id="pregunta" form="nuevoUsuario">
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="0">Nombre de su mascota</option>
                                        <option value="1">Primer relación</option>
                                        <option value="2">Nombre de su mamá</option>
                                    </select>
                                </div>
                                <div class="col-8">
                                    <label for="respuesta">Respuesta a la pregunta de seguridad</label>
                                    <input class="form-control" type="text" id="respuesta" name="respuesta" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="numEm">Numero de empleado</label>
                                    <input class="form-control" type="text" id="numEm" name="numEm" placeHolder="Solo en caso de crear un profesor"/>
                                </div>
                                <div class="col-6">
                                    <label for="master">Clave Maestra</label>
                                    <input class="form-control" type="text" id="master" name="master" placeHolder="Solo en caso de crear a un nuevo Super Usuario"/>
                                </div>
                            </div>
                            <br/>
                                    <a href="./home.php" class="res">Regresar</a>
                                    <input type="submit" value="Crear Usuario" class="btn btn-primary"/>
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