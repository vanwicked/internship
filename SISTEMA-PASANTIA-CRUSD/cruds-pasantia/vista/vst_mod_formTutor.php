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
require("../controlador/ctrl_formTutor.php");

$idFormTutor=$_GET["idFormTutor"] ;

$obj= new ctrl_formTutor();

$res=$obj->listar_dato($idFormTutor);

$row=mysqli_fetch_array($res);
$nota = $row["nota"];
$descripcion = $row["descripcion"];
$idCuaderno = $row["idCuaderno"];
$idEmpleado = $row["idEmpleado"];
$idEstudiante = $row["idEstudiante"];

?>

<div class="container">
	<h1>documento form-tutor</h1>
	<form name="f1" method="post" action="../enrutador/enr_formTutor.php" class="form-group">
		<label for="idFormTutor">idFormTutor:</label>
		<input type="number" name="idFormTutor" value="<?php echo $idFormTutor;  ?>" class="form-control">

		<label for="nota">nota:</label>
		<input type="number" name="nota" value="<?php echo $nota;  ?>"  class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value="<?php echo $idCuaderno;  ?>"  class="form-control">

		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="<?php echo $idEmpleado;  ?>"  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value="<?php echo $idEstudiante;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar form-tutor" class="btn btn-primary ">
	</form>
</div>
</body>
</html>