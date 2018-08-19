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
$celular = $row["celular"];
$carrera = $row["carrera"];
$idPersona = $row["idPersona"];

?>

<div class="container">
	<h1>documento estudiante</h1>
	<form name="f1" method="post" action="../enrutador/enr_estudiante.php" class="form-group">
		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value="<?php echo $idEstudiante;  ?>" class="form-control">

		<label for="celular">celular:</label>
		<input type="date" name="celular" value="<?php echo $celular;  ?>"  class="form-control">

		<label for="carrera">carrera:</label>
		<input type="text" name="carrera" value="<?php echo $carrera;  ?>"  class="form-control">

		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar revision-visita" class="btn btn-primary ">
	</form>
</div>
</body>
</html>