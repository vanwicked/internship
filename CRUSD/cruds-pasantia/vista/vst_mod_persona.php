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
require("../controlador/ctrl_persona.php");

$idPersona=$_GET["idPersona"] ;

$obj= new ctrl_persona();

$res=$obj->listar_dato($idPersona);

$row=mysqli_fetch_array($res);
$dni = $row["dni"];
$nombre = $row["nombre"];
$primerAp = $row["primerAp"];
$segundoAp = $row["segundoAp"];
$direccion = $row["direccion"];

?>

<div class="container">
	<h1>documento persona</h1>
	<form name="f1" method="post" action="../enrutador/enr_persona.php" class="form-group">
		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>" class="form-control">

		<label for="dni">dni:</label>
		<input type="text" name="dni" value="<?php echo $dni;  ?>"  class="form-control">

		<label for="nombre">nombre:</label>
		<input type="text" name="nombre" value="<?php echo $nombre;  ?>"  class="form-control">

		<label for="primerAp">primerAp:</label>
		<input type="text" name="primerAp" value="<?php echo $primerAp;  ?>"  class="form-control">

		<label for="segundoAp">segundoAp:</label>
		<input type="text" name="segundoAp" value="<?php echo $segundoAp;  ?>"  class="form-control">

		<label for="direccion">direccion:</label>
		<input type="text" name="direccion" value="<?php echo $direccion;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar persona" class="btn btn-primary ">
	</form>
</div>
</body>
</html>