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
	<h1> TIPO-DOC</h1>
	<form name="f1" method="post" action="../enrutador/enr_tipoDoc.php" class="form-group">
		<label for="idTipoDoc">idTipoDoc:</label>
		<input type="number" name="idTipoDoc" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar tipo-doc" class="btn btn-primary ">
	</form>
</div>
</body>
</html>