<?php
include_once("services/conexion.php");

$usuario = $_POST['usuario'];
$pass = $_POST['contrasena'];
/*session_start():
$_SESSION['usuario'] = $usuario;*/

$consulta = "SELECT * FROM usuario WHERE nombre='$usuario' and contrasenia = '$pass'";

$conexion = new CConection();
$conn = $conexion->conectar();

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();

if($result){
    header("location:home.php");
}else{
    ?>
    <?php
    include("inicioDeSesion.php");
    echo '<script type="text/javascript">
            alert("Error usuario o contraseña incorrectos");
          </script>'
    ?>
    <?php
}

?>