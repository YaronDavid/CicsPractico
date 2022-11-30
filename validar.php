<?php
session_start(); //la sesion es lo primero que hay que hacer porque sino da error

include_once("services/conexion.php");//este archivo contiene los datos para conectar con la base de datos

//esto es lo enviado por el formulario
$correo = $_POST['correo'];
$pass = $_POST['contrasena'];

//esta consulta empata el correo y la contraseña enviados con lo guardado en la BD
$consulta = "SELECT * FROM usuario WHERE correo='$correo' and contraseña = '$pass'";

$conexion = new CConection();
$conn = $conexion->conectar();

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();


if($result){//si hay un resultado, es porque si recupero un usuario, por ende las credenciales son correctas
    foreach($result as $row){
        $_SESSION['idUsuario'] = $row['idUsuario'];//pese a estar en un for, solo hay un valor, y es el que se guarda en la sesión
    }
    header("location:home.php");//aquí namda a home.php, pero hay que cambiarlo para que mande a la pagina privacidad.php
}else{
    ?>
    <?php//se que abri y cerre el <?php, pero si no lo hacia así no me imprimia el <script>
    include("inicioDeSesion.php");
    //este echo crea un alert y regresa a inicioDeSesion.php
    echo '<script type="text/javascript">
            alert("Error usuario o contraseña incorrectos");
          </script>'
    ?>
    <?php
}

?>