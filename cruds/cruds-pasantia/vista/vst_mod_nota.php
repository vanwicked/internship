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
require("../controlador/ctrl_nota.php");

$idNota=$_GET["idNota"] ;

$obj= new ctrl_nota();

$res=$obj->listar_dato($idNota);

$row=mysqli_fetch_array($res);
$notaFinal = $row["notaFinal"];
$idPasantia = $row["idPasantia"];
$idIndicador = $row["idIndicador"];

?>

<div class="container">
	<h1>Nota</h1>
	<form name="f1" method="post" action="../enrutador/enr_nota.php" class="form-group">
		<label for="idNota"></label>
		<input type="Hidden" name="idNota" value="<?php echo $idNota;  ?>" class="form-control">

		<label for="notaFinal">notaFinal:</label>
		<input type="number" name="notaFinal" value="<?php echo $notaFinal;  ?>"  class="form-control">

		<label for="idPasantia">idPasantia:</label>
		<input type="number" name="idPasantia" value="<?php echo $idPasantia;  ?>"  class="form-control">

		<label for="idIndicador">idIndicador:</label>
		<input type="number" name="idIndicador" value="<?php echo $idIndicador;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>