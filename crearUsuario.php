<?php
session_start();

include_once("services/conexion.php");

$tipo = $_POST['tipo'];
$contrasena = $_POST['contrasena'];
$apPat = $_POST['apPat'];
$apMat = $_POST['apMat'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];
$pregunta =$_POST['pregunta'];
$respuesta = $_POST['respuesta'];
$actual = date("Y-m-d H:i:s"); 
$obtenerId = "SELECT MAX(idUsuario) AS idUsuario from usuario";
$conexion = new CConection();
$conn = $conexion->conectar();
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
foreach($result as $row){
    $id = $row['idUsuario'];
}
$id = $id +1;

$insertar =  "INSERT INTO usuario VALUES $id, $tipo, $contrasena, $nombre, $apPat, $apMat, $actual, $fecha, $pregunta, $respuesta, $correo";
$query = $conn -> prepare($insertar);
$query -> execute();

?>