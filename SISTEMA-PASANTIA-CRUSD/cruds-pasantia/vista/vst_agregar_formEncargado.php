<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

	<script src="../bootstrap/js/jquery.min.js"> </script>

	<script src="../bootstrap/js/bootstrap.js"> </script>
</head>
<body>
      
<div class="container">
	<h1> FORM-ENCARGADO</h1>
	<form name="f1" method="post" action="../enrutador/enr_formEncargado.php" class="form-group">
		<label for="idFormEncargado">idFormEncargado:</label>
		<input type="number" name="idFormEncargado" value="" class="form-control">

		<label for="idEncargado">idEncargado:</label>
		<input type="number" name="idEncargado" value=""  class="form-control">

		<label for="rubro">rubro:</label>
		<input type="text" name="rubro" value=""  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value=""  class="form-control">

		<label for="facCalidad">facCalidad:</label>
		<input type="number" name="facCalidad" value="" class="form-control">

		<label for="facResponsabilidad">facResponsabilidad:</label>
		<input type="number" name="facResponsabilidad" value=""  class="form-control">

		<label for="facOrgTrabajo">facOrgTrabajo:</label>
		<input type="number" name="facOrgTrabajo" value=""  class="form-control">


		<input type="submit" name="btn" value="Agregar Formulario de Encargado" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

