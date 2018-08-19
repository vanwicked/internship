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
	<h1> ESTUDIANTE</h1>
	<form name="f1" method="post" action="../enrutador/enr_estudiante.php" class="form-group">
		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value="" class="form-control">

		<label for="celular">celular:</label>
		<input type="number" name="celular" value=""  class="form-control">

		<label for="carrera">carrera:</label>
	    <input type="text" name="carrera" value=""  class="form-control">

	   <label for="idPersona">idPersona:</label>
	    <input type="number" name="idPersona" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar estudiante" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

