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
require("../controlador/ctrl_tipoDoc.php");

$idTipoDoc=$_GET["idTipoDoc"] ;

$obj= new ctrl_tipoDoc();

$res=$obj->listar_dato($idTipoDoc);

$row=mysqli_fetch_array($res);
$descripcion = $row["descripcion"];

?>

<div class="container">
	<h1>Tipo-Doc</h1>
	<form name="f1" method="post" action="../enrutador/enr_tipoDoc.php" class="form-group">
		<label for="idTipoDoc"></label>
		<input type="hidden" name="idTipoDoc" value="<?php echo $idTipoDoc;  ?>" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value="<?php echo $descripcion;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>