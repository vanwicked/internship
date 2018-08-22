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
require("../controlador/ctrl_revision.php");

$idRevision=$_GET["idRevision"] ;

$obj= new ctrl_revision();

$res=$obj->listar_dato($idRevision);

$row=mysqli_fetch_array($res);
$descripcion = $row["descripcion"];
$idCuaderno = $row["idCuaderno"];
$idPasantia = $row["idPasantia"];
$idVisita = $row["idVisita"];
$idNumVisita = $row["idNumVisita"];

?>

<div class="container">
	<h1>Revision</h1>
	<form name="f1" method="post" action="../enrutador/enr_revision.php" class="form-group">
		<label for="idRevision"></label>
		<input type="hidden" name="idRevision" value="<?php echo $idRevision;  ?>" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="date" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<input type="text" name="idCuaderno" value="<?php echo $idCuaderno;  ?>"  class="form-control">

		<label for="idPasantia">idPasantia:</label>
		<input type="number" name="idPasantia" value="<?php echo $idPasantia;  ?>"  class="form-control">

		<label for="idVisita">idVisita:</label>
		<input type="text" name="idVisita" value="<?php echo $idVisita;  ?>"  class="form-control">

		<label for="idNumVisita">idNumVisita:</label>
		<input type="number" name="idNumVisita" value="<?php echo $idNumVisita;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>