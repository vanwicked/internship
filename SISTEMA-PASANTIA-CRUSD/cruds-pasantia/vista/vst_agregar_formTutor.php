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
	<h1> FORM-TUTOR</h1>
	<form name="f1" method="post" action="../enrutador/enr_formTutor.php" class="form-group">
		<label for="idFormTutor">idFormTutor:</label>
		<input type="number" name="idFormTutor" value="" class="form-control">

		<label for="nota">nota:</label>
		<input type="number" name="nota" value=""  class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value="" class="form-control">

		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value=""  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value=""  class="form-control">


		<input type="submit" name="btn" value="Agregar Formulario de tutor" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

