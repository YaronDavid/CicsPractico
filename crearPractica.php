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
$actual = date("Y-m-d H:i:s"); //la fecha actual, que agrego en fechaCreación y fechaModificación
$estatus=0;
$presupuesto=0;
//el presupuesto lo dejo en 0 ya que este se asignará hasta que se termine el periodo de registro de practicas


$consulta = "SELECT MAX(idPractica) as idPractica FROM practica";//como en mi BD no puse el id autoincremental, lo hago manualmente
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

$consulta = "SELECT MAX(idFundamento) as idFundamento FROM practica WHERE idPractica=$id";//Aqui obtengo el ultimo fundamento, este se usará en caso de que se tenga que registrar la misma practica, pero con otro fundamento, aunque esto no iria aquí
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

$consulta = "SELECT idCarrera FROM programaAcademico WHERE nombreCarrera='$carrera'";//select para obtener el id con el nombre
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idCarrera=$row["idCarrera"];
    }
}

$consulta = "SELECT idUA FROM ua WHERE nombreUA='$nombreUA' AND nivelUA=$nivel AND semestreUA=$semestre AND idCarrera=$idCarrera";//aqui recogo el id de la UA, con los datos de nombre, semestre, nivel y carrera
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idUA=$row["idUA"];
    }
}

$consulta = "SELECT idLocalidad FROM localidad WHERE estado='$EF'";//aqui obtengo el id con el nombre de la Entidad Federativa
$query = $conn -> prepare($consulta);
$query -> execute();
$result = $query -> fetchAll();
if($result){
    foreach($result as $row){
        $idLocalidad=$row["idLocalidad"];
    }
}

$idBitacora=$_SESSION["idBitacora"];//en proceso guarde la botacora actual en la sesión y aquí lo recupero
$idProf = $_SESSION["idUsuario"];//el id del usuario lo recupero de la sesión

//con todos los datos realizo el insert en la BD
$insertar =  "INSERT INTO practica VALUES ($id,$idFundamento,'$actual','$actual','$fecha','$grupo',$estatus,$presupuesto,'$objetivo','$competencia','$estrategias',$idUA,$idLocalidad,$idBitacora,$idProf,'$link','$RS',$alumnos)";
$query = $conn -> prepare($insertar);
$query -> execute();

//este echo debería imprimir este alert, pero no funciona :(
echo '<script type="text/javascript">
            alert("practica creada exitosamente");
          </script>';

header("location:home.php");
?>