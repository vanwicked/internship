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
$cargo = $row["cargo"];
$sueldo = $row["sueldo"];
$idPersona = $row["idPersona"];

?>

<div class="container">
	<h1>documento empleado</h1>
	<form name="f1" method="post" action="../enrutador/enr_empleado.php" class="form-group">
		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="<?php echo $idEmpleado;  ?>" class="form-control">

		<label for="cargo">cargo:</label>
		<input type="text" name="cargo" value="<?php echo $cargo;  ?>"  class="form-control">

		<label for="sueldo">sueldo:</label>
		<input type="number" name="sueldo" value="<?php echo $sueldo;  ?>"  class="form-control">

		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar empleado" class="btn btn-primary ">
	</form>
</div>
</body>
</html>