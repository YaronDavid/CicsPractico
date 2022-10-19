<?php
session_start();

include_once("services/conexion.php");

$usuario = $_POST['usuario'];
$pass = $_POST['contrasena'];


$consulta = "SELECT * FROM usuario WHERE nombre='$usuario' and contrasenia = '$pass'";

$conexion = new CConection();
$conn = $conexion->conectar();

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();

if($result){
    foreach($result as $row){
        $_SESSION['idUsuario'] = $row['idUsuario'];
    }
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