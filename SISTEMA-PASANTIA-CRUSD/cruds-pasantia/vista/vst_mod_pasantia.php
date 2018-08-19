<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../bootstrap/js/jquery.min.js"> </script>
	<script src="../bootstrap/js/bootstrap.js"> </script>
</head>
<body  background="../img/144.jpg">
<?php
require("../controlador/ctrl_pasantia.php");

$idPasantia=$_GET["idPasantia"] ;

$obj= new ctrl_pas();

$res=$obj->listar_dato($idPasantia);

$row=mysqli_fetch_array($res);
$fechaInicio = $row["fechaInicio"];
$fechaFin = $row["fechaFin"];
$numPasantia = $row["numPasantia"];
$idCarrera = $row["idCarrera"];
$idEmpleado = $row["idEmpleado"];
$idInstitucion = $row["idInstitucion"];
$idEstudiante = $row["idEstudiante"];

?>

<div class="container">
	<h1>PASANTIA</h1>
	<form name="f1" method="post" action="../enrutador/enr_pasantia.php" class="form-group">
		<label for="idPasantia">id_Pasantia</label>
		<input type="number" name="idPasantia" value="<?php echo $idPasantia;  ?>" class="form-control">

		<label for="fechaInicio">fecha_Inicio</label>
		<input type="date" name="fechaInicio" value="<?php echo $fechaInicio;  ?>"  class="form-control">

		<label for="fechaFin">fecha_Fin</label>
		<input type="date" name="fechaFin" value="<?php echo $fechaFin;  ?>"  class="form-control">

		<label for="numPasantia">num_pasantia</label>
		<input type="text" name="numPasantia" value="<?php echo $numPasantia;  ?>"  class="form-control">

		<label for="idCarrera">id_Carrera</label>
		<input type="number" name="idCarrera" value="<?php echo $idCarrera;  ?>" class="form-control">

		<label for="idEmpleado">id_Empleado</label>
		<input type="number" name="idEmpleado" value="<?php echo $idEmpleado; ?>"  class="form-control">

		<label for="idInstitucion">id_Institucion</label>
		<input type="number" name="idInstitucion" value="<?php echo $idInstitucion;  ?>"  class="form-control">

		<label for="idEstudiante">id_Estudiante:</label>
		<input type="number" name="idEstudiante" value="<?php echo $idEstudiante;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>