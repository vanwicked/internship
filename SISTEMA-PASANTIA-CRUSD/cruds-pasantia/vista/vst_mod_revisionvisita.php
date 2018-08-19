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
require("../controlador/ctrl_revisionvisita.php");

$idVisita=$_GET["idVisita"] ;

$obj= new ctrl_revisionvisita();

$res=$obj->listar_dato($idVisita);

$row=mysqli_fetch_array($res);
$fecha = $row["fecha"];
$fotoVisita = $row["fotoVisita"];
$idEmpleado = $row["idEmpleado"];

?>

<div class="container">
	<h1>documento revision-visita</h1>
	<form name="f1" method="post" action="../enrutador/enr_revisionvisita.php" class="form-group">
		<label for="idVisita">idVisita:</label>
		<input type="number" name="idVisita" value="<?php echo $idVisita;  ?>" class="form-control">

		<label for="fecha">fecha:</label>
		<input type="date" name="fecha" value="<?php echo $fecha;  ?>"  class="form-control">

		<label for="fotoVisita">fotoVisita:</label>
		<input type="text" name="fotoVisita" value="<?php echo $fotoVisita;  ?>"  class="form-control">

		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="<?php echo $idEmpleado;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar revision-visita" class="btn btn-primary ">
	</form>
</div>
</body>
</html>