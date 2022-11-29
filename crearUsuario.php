<?php
session_start();

include_once("services/conexion.php");

$conexion = new CConection();
$conn = $conexion->conectar();
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
$id = 6;
$consulta = "SELECT MAX(idUsuario) as idUsuario FROM usuario";

$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $id=$row["idUsuario"];
        $id=$id+1;
    }
}
$insertar =  "INSERT INTO usuario VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$query = $conn -> prepare($insertar);
$query -> execute([$id, $tipo, $contrasena, $nombre, $apPat, $apMat, $actual, $fecha, $pregunta, $respuesta, $correo]);
if($tipo==0){
    $insertar =  "INSERT INTO lector VALUES (?)";
    $query = $conn -> prepare($insertar);
    $query -> execute([$id]);
}
if($tipo==1){
    $numEm = $_POST['numEm'];
    $insertar =  "INSERT INTO profesor VALUES (?,?)";
    $query = $conn -> prepare($insertar);
    $query -> execute([$id,$numEm]);
}
if($tipo==2){
    $insertar =  "INSERT INTO administrador VALUES (?)";
    $query = $conn -> prepare($insertar);
    $query -> execute([$id]);
}
if($tipo==3){
    $master = $_POST['master'];
    $insertar =  "INSERT INTO superadministrador VALUES (?,?)";
    $query = $conn -> prepare($insertar);
    $query -> execute([$id,$master]);
}
echo '<script type="text/javascript">
        alert("Usuario creado correctamente");
      </script>';
header("location:home.php");
?>