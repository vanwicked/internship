<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

	<script src="../bootstrap/js/jquery.min.js"> </script>

	<script src="../bootstrap/js/bootstrap.js"> </script>
</head>
<body background="../img/144.jpg">
<?php
require("../controlador/ctrl_estudiante.php");

$idEstudiante=$_GET["idEstudiante"] ;

$obj= new ctrl_estudiante();

$res=$obj->listar_dato($idEstudiante);

$row=mysqli_fetch_array($res);
$idCarrera = $row["idCarrera"];
$idPersona = $row["idPersona"];
$activo = $row["activo"];

?>

<div class="container">
	<h1>Estudiante</h1>
	<form name="f1" method="post" action="../enrutador/enr_estudiante.php" class="form-group">
		<label for="idEstudiante"></label>
		<input type="hidden" name="idEstudiante" value="<?php echo $idEstudiante;  ?>" class="form-control">

		<label for="idCarrera">idCarrera:</label>
		<input type="text" name="idCarrera" value="<?php echo $idCarrera;  ?>"  class="form-control">

		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<label for="activo">activo:</label>
		<input type="tinyint" name="activo" value="<?php echo $activo;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>