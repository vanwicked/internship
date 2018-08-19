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
	<h1> EMPLEADO</h1>
	<form name="f1" method="post" action="../enrutador/enr_empleado.php" class="form-group">
		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="" class="form-control">

		<label for="cargo">cargo:</label>
		<input type="text" name="cargo" value=""  class="form-control">

		<label for="sueldo">sueldo:</label>
	    <input type="number" name="sueldo" value=""  class="form-control">

	   <label for="idPersona">idPersona:</label>
	    <input type="number" name="idPersona" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar empleado" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

