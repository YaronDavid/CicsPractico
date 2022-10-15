<?php
    include_once("conexion.php");

    $conn=Cconection::conectar();

?>

<html>
    <head> 
        <title>
            CICSPractico
        </title>
        <link rel="stylesheet" href="./styles/inde.css"/>
        <link rel="stylesheet" href="./styles/inicio.css"/>
        
    </head>
    <body>
        <div class="titulo">
            <div class="row">
                <div class="icono">
                    <img class="ipn" src="https://onceninasyninos.tv/wp-content/uploads/2018/04/Banner-logos-ipn-e1523046221576.png"/>
                </div>
                <div class="text">
                    <h1>CICSPractico</h1>
                </div>
                <div class="icono2">
                    <img class="cics" src="./images/cics.jpeg"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menu coli">
                <div class="rowi opc">
                    <ul class="center">
                        <a href="./index.php"><li class="boton">Pagina principal</li></a>
                        <a href="./restablecerContraseña.php"><li>Restablecer contraseña</li></a>
                    </ul>
                </div>
                <div class="rowi info">
                    <ul class="center">
                        <li>Info</li>
                    </ul>
                </div>
            </div>
            <div class="pagina coli">
                <div class="rowi subtitle">
                    <h1 class="tab">Pagina principal</h1>
                </div>
                <div class="rowi principal">
                    <div class="card">
                        <h1>Inicio de sesión</h1>
                        <hr/>
                        <form>
                            <label>Usuario</label><br/>
                            <input type="text" id="usuario" name="usuario" required/><br/>
                            <label>Contraseña</input><br/>
                            <input type="text" id="contraseña" name="contraseña" required/><br/>
                            <input type="submit" value="Iniciar sesión"/>
                            <a href="./restablecer.php" class="res">No recuerdo mi contraseña</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>