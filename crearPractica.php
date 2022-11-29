<?php
session_start();

include_once("services/conexion.php");

$conexion = new CConection();
$conn = $conexion->conectar();

$nombreUA = $_POST["nombreUA"];
$semestre = $_POST["semestre"];
$nivel = $_POST["nivel"];
$carrera = $_POST["carrera"];
$grupo = $_POST["grupo"];
$fecha = $_POST["fecha"];
$EF = $_POST["EF"];
$alumnos = $_POST["alumnos"];
$RS = $_POST["RS"];
$competencia = $_POST["competencia"];
$estrategias = $_POST["estrategias"];
$objetivo = $_POST["objetivo"];
$link = $_POST["link"];
$actual = date("Y-m-d H:i:s"); 
$estatus=0;
$presupuesto=0;


$consulta = "SELECT MAX(idPractica) as idPractica FROM practica";
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $id=$row["idPractica"];
        $id=$id+1;
    }
}else{
    $id=1;
}

$consulta = "SELECT MAX(idFundamento) as idFundamento FROM practica WHERE idPractica=$id";
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idFundamento=$row["idFundamento"];
        $idFundamento=$idFundamento+1;
    }
}else{
    $idFundamento=1;
}

$consulta = "SELECT idCarrera FROM programaAcademico WHERE nombreCarrera='$carrera'";
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idCarrera=$row["idCarrera"];
    }
}

$consulta = "SELECT idUA FROM ua WHERE nombreUA='$nombreUA' AND nivelUA=$nivel AND semestreUA=$semestre AND idCarrera=$idCarrera";
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idUA=$row["idUA"];
    }
}

$consulta = "SELECT idLocalidad FROM localidad WHERE estado='$EF'";
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idLocalidad=$row["idLocalidad"];
    }
}

$idBitacora=$_SESSION["idBitacora"];
$idProf = $_SESSION["idUsuario"];


$insertar =  "INSERT INTO practica VALUES ($id,$idFundamento,'$actual','$actual','$fecha','$grupo',$estatus,$presupuesto,'$objetivo','$competencia','$estrategias',$idUA,$idLocalidad,$idBitacora,$idProf,'$link','$RS',$alumnos)";
$query = $conn -> prepare($insertar);
$query -> execute();

echo '<script type="text/javascript">
            alert("practica creada exitosamente");
          </script>';

header("location:home.php");
?>