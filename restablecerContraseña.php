<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/in.css"/>
        <link rel="stylesheet" href="./styles/r.css"/>
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
                        <a href="./inicioDeSesion.php"><li>Iniciar Sesion</li></a>
                        <li id="actual">Restablecer Contraseña</li>
                    </ul>
                </div>
                <div class="row info">
                    <ul class="center">
                        <a href="./index.php"><li>Info</li></a>
                    </ul>
                </div>
            </div>

            <div class="col-10">
                <div class="row subtitulo">
                    <h1 class="tab">Restablecer contraseña</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            
                            <form id="restablecer">
                                <div class="form-group">
                                    <label>Numero de identificación</label><br/>
                                    <input class="form-control" type="text" id="usuario" name="usuario" required/>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de nacimiento</input>
                                    <input type="date" required/>
                                </div>
                                <div class="form-group">
                                    <label>Pregunta de Seguridad</label>
                                    <select name="pregunta" id="pregunta" form="restablecer">
                                        <option value="mascota">¿Nombre de tu primer mascota?</option>
                                        <option value="ciudad">¿En que ciudad naciste?</option>
                                        <option value="escuela">¿Lugar donde fuiste a la escuela?</option>
                                        <option value="mama">¿Comó se llama tu mamá?</option>
                                        <option value="beso">¿Con quíen fue tu primer beso?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Respuesta</label><br/>
                                    <input class="form-control" type="text" id="respuesta" name="respuesta" required/>
                                </div>
                                <div class="form-group">
                                    <label>Nueva Contraseña</label><br/>
                                    <input class="form-control" type="text" id="nuevaContrasena" name="nuevaContrasena" required/>
                                </div><br/>
                                <input type="submit" value="Cambiar contraseña" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>