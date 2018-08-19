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
	<h1> INDICADOR</h1>
	<form name="f1" method="post" action="../enrutador/enr_indicador.php" class="form-group">
		<label for="idIndicador">idIndicador:</label>
		<input type="number" name="idIndicador" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idFormulario">idFormulario:</label>
	    <input type="number" name="idFormulario" value=""  class="form-control">
		<input type="submit" name="btn" value="Agregar indicador" class="btn btn-primary ">
	</form>
</div>
</body>
</html>
