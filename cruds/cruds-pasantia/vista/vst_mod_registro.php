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
require("../controlador/ctrl_registro.php");

$idRegistro=$_GET["idRegistro"] ;

$obj= new ctrl_registro();

$res=$obj->listar_dato($idRegistro);

$row=mysqli_fetch_array($res);
$cargo = $row["cargo"];
$idEmpleado = $row["idEmpleado"];
$idPersona = $row["idPersona"];

?>

<div class="container">
	<h1>Registro</h1>
	<form name="f1" method="post" action="../enrutador/enr_registro.php" class="form-group">
		<label for="idRegistro"></label>
		<input type="hidden" name="idRegistro" value="<?php echo $idRegistro;  ?>" class="form-control">

		<label for="cargo">cargo:</label>
		<input type="text" name="cargo" value="<?php echo $cargo;  ?>"  class="form-control">

		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="<?php echo $idEmpleado;  ?>"  class="form-control">

		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>