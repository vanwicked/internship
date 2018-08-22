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
require("../controlador/ctrl_rol.php");

$idRol=$_GET["idRol"] ;

$obj= new ctrl_rol();

$res=$obj->listar_dato($idRol);

$row=mysqli_fetch_array($res);
$nombre = $row["nombre"];
$activo = $row["activo"];

?>

<div class="container">
	<h1>Rol</h1>
	<form name="f1" method="post" action="../enrutador/enr_carrera.php" class="form-group">
		<label for="idRol"></label>
		<input type="hidden" name="idRol" value="<?php echo $idRol;  ?>"  class="form-control">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value="<?php echo $nombre;  ?>"  class="form-control">

		<label for="activo">activo:</label>
		<input type="number" name="activo" value="<?php echo $activo;  ?>"  class="form-control">
		
		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>