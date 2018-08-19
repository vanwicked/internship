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
require("../controlador/ctrl_modalidad.php");

$idModalidad=$_GET["idModalidad"] ;

$obj= new ctrl_modalidad();

$res=$obj->listar_dato($idModalidad);

$row=mysqli_fetch_array($res);
$nombre = $row["nombre"];

?>

<div class="container">
	<h1>documento Modalidad</h1>
	<form name="f1" method="post" action="../enrutador/enr_modalidad.php" class="form-group">
		<label for="idModalidad">idModalidad:</label>
		<input type="number" name="idModalidad" value="<?php echo $idModalidad;  ?>" class="form-control">

		<label for="nombre">nombre:</label>
		<input type="text" name="nombre" value="<?php echo $nombre;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar modalidad" class="btn btn-primary ">
	</form>
</div>
</body>
</html>