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
require("../controlador/ctrl_cuaderno.php");

$idCuaderno=$_GET["idCuaderno"] ;

$obj= new ctrl_cuaderno();

$res=$obj->listar_dato($idCuaderno);

$row=mysqli_fetch_array($res);
$fecha = $row["fecha"];
$observacion = $row["observacion"];

?>

<div class="container">
	<h1>documento cuaderno</h1>
	<form name="f1" method="post" action="../enrutador/enr_cuaderno.php" class="form-group">
		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value="<?php echo $idCuaderno;  ?>" class="form-control">

		<label for="fecha">fecha:</label>
		<input type="date" name="fecha" value="<?php echo $fecha;  ?>"  class="form-control">

		<label for="observacion">observacion:</label>
		<input type="text" name="observacion" value="<?php echo $observacion;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar cuaderno" class="btn btn-primary ">
	</form>
</div>
</body>
</html>