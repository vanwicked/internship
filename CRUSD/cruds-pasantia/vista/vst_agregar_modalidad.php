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
	<h1>Modalidad</h1>
	<form name="f1" method="post" action="../enrutador/enr_modalidad.php" class="form-group">
		<label for="idModalidad"></label>
		<input type="hidden" name="idModalidad" value="" class="form-control">

		<label for="nombre">nombre:</label>
		<input type="text" name="nombre" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>