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
require("../controlador/ctrl_indicador.php");

$idIndicador=$_GET["idIndicador"] ;

$obj= new ctrl_indicador();

$res=$obj->listar_dato($idIndicador);

$row=mysqli_fetch_array($res);
$descripcion = $row["descripcion"];
$idFormulario = $row["idFormulario"];

?>

<div class="container">
	<h1>documento indicador</h1>
	<form name="f1" method="post" action="../enrutador/enr_indicador.php" class="form-group">
		<label for="idIndicador">idIndicador:</label>
		<input type="number" name="idIndicador" value="<?php echo $idIndicador;  ?>" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<label for="idFormulario">idFormulario:</label>
		<input type="number" name="idFormulario" value="<?php echo $idFormulario;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar indicador" class="btn btn-primary ">
	</form>
</div>
</body>
</html>