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
	<h1> CARRERA</h1>
	<form name="f1" method="post" action="../enrutador/enr_cuaderno.php" class="form-group">
		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value="" class="form-control">

		<label for="fecha">fecha:</label>
		<input type="date" name="fecha" value=""  class="form-control">

		<label for="observacion">observacion:</label>
	    <input type="text" name="observacion" value=""  class="form-control">
		<input type="submit" name="btn" value="Agregar cuaderno" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

