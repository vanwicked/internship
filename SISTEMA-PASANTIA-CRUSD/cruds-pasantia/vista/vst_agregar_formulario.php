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
	<h1> formulario</h1>
	<form name="f1" method="post" action="../enrutador/enr_formulario.php" class="form-group">
		<label for="idFormulario">idFormulario:</label>
		<input type="number" name="idFormulario" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="fecha">fecha:</label>
	    <input type="date" name="fecha" value=""  class="form-control">

	    <label for="idCarrera">idCarrera:</label>
	    <input type="number" name="idCarrera" value=""  class="form-control">

	    <label for="idTipoFormulario">idTipoFormulario:</label>
	    <input type="number" name="idTipoFormulario" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar formulario" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

