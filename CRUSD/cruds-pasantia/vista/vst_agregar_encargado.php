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
	<h1> ENCARGADO</h1>
	<form name="f1" method="post" action="../enrutador/enr_encargado.php" class="form-group">
		<label for="idEncargado">idEncargado:</label>
		<input type="number" name="idEmpleado" value="" class="form-control">

		<label for="telefono">telefono:</label>
		<input type="number" name="telefono" value=""  class="form-control">

		<label for="cargo">cargo:</label>
	    <input type="text" name="cargo" value=""  class="form-control">

	    <label for="idPersona">idPersona:</label>
	    <input type="number" name="idPersona" value=""  class="form-control">

	    <label for="idInstitucion">idInstitucion:</label>
	    <input type="number" name="idInstitucion" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar encargado" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

