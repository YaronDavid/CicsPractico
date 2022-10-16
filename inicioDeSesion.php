<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/indee.css"/>
        <link rel="stylesheet" href="./styles/ini.css"/>
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
                        <a href="./index.php"><li class="boton">Pagina principal</li></a>
                        <a href="./restablecerContraseña.php"><li>Restablecer contraseña</li></a>
                    </ul>
                </div>
                <div class="row info">
                    <ul class="center">
                        <li>Info</li>
                    </ul>
                </div>
            </div>

            <div class="col-10">
                <div class="row subtitulo">
                    <h1>Pagina principal</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            <h1>Inicio de sesión</h1>
                            <hr/>
                            <form action="validar.php" method="post">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input class="form-control"type="text" id="usuario" name="usuario" required/>
                                </div>
                                <div class="form-group">
                                    <label for="contrasena">Contraseña</label>
                                    <input class="form-control" type="text" id="contrasena" name="contrasena" required/>
                                </div><br/>
                                    <input type="submit" value="Iniciar sesión" class="btn btn-primary"/>
                                    <a href="./restablecer.php" class="res">No recuerdo mi contraseña</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>

        </div>
</div>
    </body>
</html>