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
require("../controlador/ctrl_documentos.php");

$idDocumentos=$_GET["idDocumentos"] ;

$obj= new ctrl_documentos();

$res=$obj->listar_dato($idDocumentos);

$row=mysqli_fetch_array($res);
$fechaEntrega = $row["fechaEntrega"];
$hora = $row["hora"];
$estado = $row["estado"];
$idTipoDoc = $row["idTipoDoc"];
$idRegistro = $row["idRegistro"];

?>

<div class="container">
	<h1>documento documentos</h1>
	<form name="f1" method="post" action="../enrutador/enr_documentos.php" class="form-group">
		<label for="idDocumentos">idDocumentos:</label>
		<input type="number" name="idDocumentos" value="<?php echo $idDocumentos;  ?>" class="form-control">

		<label for="fechaEntrega">fechaEntrega:</label>
		<input type="date" name="fechaEntrega" value="<?php echo $fechaEntrega;  ?>"  class="form-control">

		<label for="hora">hora:</label>
		<input type="text" name="hora" value="<?php echo $hora;  ?>"  class="form-control">

		<label for="estado">estado:</label>
		<input type="text" name="estado" value="<?php echo $estado;  ?>"  class="form-control">

		<label for="idTipoDoc">idTipoDoc:</label>
		<input type="text" name="idTipoDoc" value="<?php echo $idTipoDoc;  ?>"  class="form-control">

		<label for="idRegistro">idRegistro:</label>
		<input type="text" name="idRegistro" value="<?php echo $idRegistro;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar documentos" class="btn btn-primary ">
	</form>
</div>
</body>
</html>