<!--Aqui esta el formulario de inicio de sesión, no tiene mucho
ya que elimine el apartado de "restablecer contraseña" ya que esa opcion esta
unicamente habilitada para el super adminitrador
-->

<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/in.css"/>
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
                        <li id="actual" class="boton">Inicio de sesion</li>
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
                    <h1>Inicio de sesion</h1>
                </div>
                <div class="row principal">
                    <div class="container">
                        <div class="mycard">
                            
                            <form action="validar.php" method="post"><!--El fomulario manda a validar para saber si la sesión existe-->
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input class="form-control"type="text" id="correo" name="correo" required/>
                                </div>
                                <div class="form-group">
                                    <label for="contrasena">Contraseña</label>
                                    <input class="form-control" type="text" id="contrasena" name="contrasena" required/>
                                </div><br/>
                                    <input type="submit" value="Iniciar sesión" class="btn btn-primary"/>
                                    
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