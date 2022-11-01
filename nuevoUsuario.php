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
                            <a href="./listaDeUsuarios.php"><li>Usuarios</li></a>
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
                    <h1>Nuevo usuario</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                        <form action="crearUsuario.php" method="post" id="nuevoUsuario">
                                <div class="form-group row">
                                    <div class="col-8">
                                        <label for="tipo">Seleccione tipo de usuario</label>
                                        <select name="tipo" id="tipo" form="nuevoUsuario">
                                        <option value="0">Lector</option>
                                        <option value="1">Profesor</option>
                                        <option value="2">Administrador</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="contrasena">Contraseña</label>
                                        <input class="form-control" type="text" id="contrasena" name="contrasena" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" type="text" id="nombre" name="nombre" required/>
                                    
                                    </div>
                                    <div class="col-4">
                                        <label for="contrasenaRep">Repita contraseña</label>
                                        <input class="form-control" type="text" id="contrasenaRep" name="contrasenaRep" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8">
                                        <label for="pregunta">Elija su pregunta de seguridad</label>
                                        <select name="pregunta" id="pregunta" form="nuevoUsuario">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="respuesta">Respuesta a la pregunta de seguridad</label>
                                        <input class="form-control" type="text" id="respuesta" name="respuesta" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="apPat">Apellido paterno</label>
                                    <input class="form-control" type="text" id="apPat" name="apPat" required/>
                                </div>
                                <div class="form-group">
                                    <label for="apMat">Apellido materno</label>
                                    <input class="form-control" type="text" id="apMat" name="apMat" required/>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de nacimiento</input>
                                    <input type="date" name="fecha" id="fecha" required/>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input class="form-control" type="text" id="correo" name="correo" required/>
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