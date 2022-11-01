<?php
session_start();
include_once("services/conexion.php");
$id = $_SESSION['idUsuario'];

$nueva=$_POST['nueva'];
$actual=$_POST['actual'];

if (!isset($_SESSION['idUsuario'])){

    header('location: index.php');
}
$conexion = new CConection();
$conn = $conexion->conectar();

$consulta = "SELECT * from usuario WHERE contraseña='$actual' AND idUsuario='$id'"
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
foreach($result as $row){
    if($row==null){
        echo '<script type="text/javascript">
            alert("La contraseña ingresada es incorrecta");
            </script>'
        header("location:cambiarContraseña.php");
    }
}
$update = "UPDATE usuario SET contraseña=? WHERE idUsuario=?";
$stm = $conn -> prepare($update);
$stm -> execute([$nueva,$id]);


?>