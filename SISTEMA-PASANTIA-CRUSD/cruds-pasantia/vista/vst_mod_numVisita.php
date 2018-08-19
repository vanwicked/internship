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
require("../controlador/ctrl_numVisita.php");

$idNumVisita=$_GET["idNumVisita"] ;

$obj= new ctrl_numVisita();

$res=$obj->listar_dato($idNumVisita);

$row=mysqli_fetch_array($res);
$numVisita = $row["numVisita"];

?>

<div class="container">
	<h1>documento numvisita</h1>
	<form name="f1" method="post" action="../enrutador/enr_numVisita.php" class="form-group">
		<label for="idNumVisita">idNumVisita:</label>
		<input type="number" name="idNumVisita" value="<?php echo $idNumVisita;  ?>" class="form-control">

		<label for="numVisita">numVisita:</label>
		<input type="number" name="numVisita" value="<?php echo $numVisita;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar form-tutor" class="btn btn-primary ">
	</form>
</div>
</body>
</html>