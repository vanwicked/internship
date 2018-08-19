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
	<h1> revision</h1>
	<form name="f1" method="post" action="../enrutador/enr_revision.php" class="form-group">
		<label for="idRevision">idRevision:</label>
		<input type="number" name="idRevision" value="" class="form-control">
		
		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value=""  class="form-control">

		<label for="idPasantia">idPasantia:</label>
		<input type="number" name="idPasantia" value=""  class="form-control">

		<label for="idVisita">idVisita:</label>
	    <input type="number" name="idVisita" value=""  class="form-control">

	    <label for="idNumVisita">idNumVisita:</label>
	    <input type="number" name="idNumVisita" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar revision" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

