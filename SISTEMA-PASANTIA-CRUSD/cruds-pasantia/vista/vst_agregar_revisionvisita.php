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
	<h1> REVISION VISITA</h1>
	<form name="f1" method="post" action="../enrutador/enr_revisionvisita.php" class="form-group">
		<label for="idVisita">idVisita:</label>
		<input type="number" name="idVisita" value="" class="form-control">

		<label for="fecha">fecha:</label>
		<input type="date" name="fecha" value=""  class="form-control">

		<label for="fotoVisita">fotoVisita:</label>
	    <input type="text" name="fotoVisita" value=""  class="form-control">

	    <label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value="" class="form-control">

		<input type="submit" name="btn" value="Agregar VISITA" class="btn btn-primary ">
	</form>
</div>
</body>
</html>
