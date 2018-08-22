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
require("../controlador/ctrl_encargado.php");

$idEncargado=$_GET["idEncargado"] ;

$obj= new ctrl_encargado();

$res=$obj->listar_dato($idEncargado);

$row=mysqli_fetch_array($res);
$idPersona = $row["idPersona"];
$idInstitucion = $row["idInstitucion"];
$telefono = $row["telefono"];
$cargo = $row["cargo"];

?>

<div class="container">
	<h1>Encargado</h1>
	<form name="f1" method="post" action="../enrutador/enr_encargado.php" class="form-group">
		<label for="idEncargado"></label>
		<input type="hidden" name="idEncargado" value="<?php echo $idEncargado;  ?>" class="form-control">

		<label for="telefono">telefono:</label>
		<input type="number" name="telefono" value="<?php echo $telefono;  ?>"  class="form-control">

		<label for="cargo">cargo:</label>
		<input type="text" name="cargo" value="<?php echo $cargo;  ?>"  class="form-control">
		
		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="<?php echo $idPersona;  ?>"  class="form-control">

		<label for="idInstitucion">idInstitucion:</label>
		<input type="number" name="idInstitucion" value="<?php echo $idInstitucion;  ?>"  class="form-control">


		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>