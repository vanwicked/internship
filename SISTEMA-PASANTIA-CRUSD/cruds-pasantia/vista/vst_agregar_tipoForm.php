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
	<h1> tipo FormTutor</h1>
	<form name="f1" method="post" action="../enrutador/enr_tipoForm.php" class="form-group">
		<label for="idTipoFormulario">idTipoFormulario:</label>
		<input type="number" name="idTipoFormulario" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idFormEncargado">idFormEncargado:</label>
	    <input type="number" name="idFormEncargado" value=""  class="form-control">

	    <label for="idFormTutor">idFormTutor:</label>
	    <input type="number" name="idFormTutor" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar FormTutor" class="btn btn-primary ">
	</form>
</div>
</body>
</html>|	