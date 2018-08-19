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
require("../controlador/ctrl_formEncargado.php");

$idFormEncargado=$_GET["idFormEncargado"] ;

$obj= new ctrl_formEncargado();

$res=$obj->listar_dato($idFormEncargado);

$row=mysqli_fetch_array($res);
$idEncargado = $row["idEncargado"];
$rubro = $row["rubro"];
$idEstudiante = $row["idEstudiante"];
$facCalidad = $row["facCalidad"];
$facResponsabilidad = $row["facResponsabilidad"];
$facOrgTrabajo = $row["facOrgTrabajo"];


?>

<div class="container">
	<h1>documento form-encargado</h1>
	<form name="f1" method="post" action="../enrutador/enr_formEncargado.php" class="form-group">
		<label for="idFormEncargado">idFormEncargado:</label>
		<input type="number" name="idFormEncargado" value="<?php echo $idFormEncargado;  ?>" class="form-control">

		<label for="idEncargado">idEncargado:</label>
		<input type="number" name="idEncargado" value="<?php echo $idEncargado;  ?>"  class="form-control">

		<label for="rubro">rubro:</label>
		<input type="text" name="rubro" value="<?php echo $rubro;  ?>"  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value="<?php echo $idEstudiante;  ?>"  class="form-control">

		<label for="facCalidad">facCalidad:</label>
		<input type="number" name="facCalidad" value="<?php echo $facCalidad;  ?>" class="form-control">

		<label for="facResponsabilidad">facResponsabilidad:</label>
		<input type="number" name="facResponsabilidad" value="<?php echo $facResponsabilidad;  ?>"  class="form-control">

		<label for="facOrgTrabajo">facOrgTrabajo:</label>
		<input type="number" name="facOrgTrabajo" value="<?php echo $facOrgTrabajo;  ?>"  class="form-control">

		<input type="submit" name="modificar" value="modificar form-encargado" class="btn btn-primary ">
	</form>
</div>
</body>
</html>