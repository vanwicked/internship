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
require("../controlador/ctrl_tipoForm.php");

$idTipoFormulario=$_GET["idTipoFormulario"] ;

$obj= new ctrl_tipoForm();

$res=$obj->listar_dato($idTipoFormulario);

$row=mysqli_fetch_array($res);
$descripcion = $row["descripcion"];
$idFormEncargado = $row["idFormEncargado"];
$idFormTutor = $row["idFormTutor"];

?>

<div class="container">
	<h1>Tipo-Formulario</h1>
	<form name="f1" method="post" action="../enrutador/enr_tipoForm.php" class="form-group">
		<label for="idTipoFormulario"></label>
		<input type="hidden" name="idTipoFormulario" value="<?php echo $idTipoFormulario;  ?>" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<label for="idFormEncargado">idFormEncargado:</label>
		<input type="number" name="idFormEncargado" value="<?php echo $idFormEncargado;  ?>"  class="form-control">

        <label for="idFormTutor">idFormTutor:</label>
		<input type="number" name="idFormTutor" value="<?php echo $idFormTutor;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar " class="btn btn-primary ">
	</form>
</div>
</body>
</html>