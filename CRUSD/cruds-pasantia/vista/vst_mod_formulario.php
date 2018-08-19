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
require("../controlador/ctrl_formulario.php");

$idFormulario=$_GET["idFormulario"] ;

$obj= new ctrl_formulario();

$res=$obj->listar_dato($idFormulario);

$row=mysqli_fetch_array($res);
$descripcion = $row["descripcion"];
$fecha = $row["fecha"];
$idCarrera = $row["idCarrera"];
$idTipoFormulario = $row["idTipoFormulario"];

?>

<div class="container">
	<h1>documento formulario</h1>
	<form name="f1" method="post" action="../enrutador/enr_documentos.php" class="form-group">
		<label for="idFormulario">idFormulario:</label>
		<input type="number" name="idFormulario" value="<?php echo $idFormulario;  ?>" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<label for="fecha">fecha:</label>
		<input type="date" name="fecha" value="<?php echo $fecha;  ?>"  class="form-control">

		<label for="idCarrera">idCarrera:</label>
		<input type="number" name="idCarrera" value="<?php echo $idCarrera;  ?>"  class="form-control">

		<label for="idTipoFormulario">idTipoFormulario:</label>
		<input type="number" name="idTipoFormulario" value="<?php echo $idTipoFormulario;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar formulario" class="btn btn-primary ">
	</form>
</div>
</body>
</html>