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
require("../controlador/ctrl_empleado.php");

$idEmpleado=$_GET["idEmpleado"] ;

$obj= new ctrl_empleado();

$res=$obj->listar_dato($idEmpleado);

$row=mysqli_fetch_array($res);
$idPersona = $row["idPersona"];
$activo = $row["activo"];

?>

<div class="container">
	<h1>Empleado</h1>
	<form name="f1" method="post" action="../enrutador/enr_empleado.php" class="form-group">
		<label for="idEmpleado"></label>
		<input type="hidden" name="idEmpleado" value="<?php echo $idEmpleado;  ?>" class="form-control">

		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<label for="activo">activo:</label>
		<input type="tinyint" name="activo" value="<?php echo $activo;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>