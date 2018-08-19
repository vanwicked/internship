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
	<h1> persona</h1>
	<form name="f1" method="post" action="../enrutador/enr_persona.php" class="form-group">
		<label for="idPersona">idPersona:</label>
		<input type="number" name="idPersona" value="" class="form-control">

		<label for="dni">dni:</label>
		<input type="text" name="dni" value=""  class="form-control">

		<label for="nombre">nombre:</label>
	    <input type="text" name="nombre" value=""  class="form-control">

	    <label for="primerAp">primerAp:</label>
	    <input type="text" name="primerAp" value=""  class="form-control">

	    <label for="segundoAp">segundoAp:</label>
		<input type="date" name="segundoAp" value=""  class="form-control">

		<label for="direccion">direccion:</label>
	    <input type="text" name="direccion" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar persona" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

