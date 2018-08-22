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
require("../controlador/ctrl_carrera.php");

$idCarrera=$_GET["idCarrera"] ;

$obj= new ctrl_carrera();

$res=$obj->listar_dato($idCarrera);

$row=mysqli_fetch_array($res);
$nombre = $row["nombre"];
$idModalidad = $row["idModalidad"];

?>

<div class="container">
	<h1>Carrera</h1>
	<form name="f1" method="post" action="../enrutador/enr_carrera.php" class="form-group">
		<label for="idCarrera"></label>
		<input type="hidden" name="idCarrera" value="<?php echo $idCarrera;  ?>"  class="form-control">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value="<?php echo $nombre;  ?>"  class="form-control">

		<label for="idModalidad">idModalidad:</label>
		<input type="number" name="idModalidad" value="<?php echo $idModalidad;  ?>"  class="form-control">
		
		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>