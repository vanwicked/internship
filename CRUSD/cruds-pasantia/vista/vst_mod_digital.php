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
require("../controlador/ctrl_digital.php");

$idDigital=$_GET["idDigital"] ;

$obj= new ctrl_digital();

$res=$obj->listar_dato($idDigital);

$row=mysqli_fetch_array($res);
$hora_Recepcion = $row["horaRecepcion"];
$fecha_recepcion = $row["fechaRecepcion"];
$gestion = $row["gestion"];
$subir_doc = $row["subirDoc"];
$idCarrera = $row["idCarrera"];
$idEstudiante = $row["idEstudiante"];
$idTipoDoc = $row["idTipoDoc"];

?>

<div class="container">
	<h1>documento digital</h1>
	<form name="f1" method="post" action="../enrutador/enr_digital.php" class="form-group">
		<label for="idDigital"></label>
		<input type="hidden" name="idDigital" value="<?php echo $idDigital;  ?>" class="form-control">

		<label for="horaRecepcion">hora_Recepcion:</label>
		<input type="time" name="horaRecepcion" value="<?php echo $horaRecepcion;  ?>"  class="form-control">

		<label for="fechaRecepcion">fecha_Recepcion:</label>
		<input type="date" name="fechaRecepcion" value="<?php echo $fechaRecepcion;  ?>"  class="form-control">

		<label for="gestion">gestion:</label>
		<input type="text" name="gestion" value="<?php echo $gestion;  ?>"  class="form-control">

		<label for="subirDoc">subirDoc:</label>
		<input type="file" name="subirDoc" value="<?php echo $subirDoc;  ?>" class="form-control">

		<label for="idCarrera">idCarrera:</label>
		<input type="number" name="idCarrera" value="<?php echo $idCarrera;  ?>" class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value="<?php echo $idEstudiante;  ?>" class="form-control">

		<label for="idTipoDoc">idTipoDoc:</label>
		<input type="number" name="idTipoDoc" value="<?php echo $idTipoDoc;  ?>" class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>