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
	<h1> DOCUMENTOS</h1>
	<form name="f1" method="post" action="../enrutador/enr_documentos.php" class="form-group">
		<label for="idDocumentos">idDocumentos:</label>
		<input type="number" name="idDocumentos" value="" class="form-control">
		
		<label for="fechaEntrega">fechaEntrega:</label>
		<input type="date" name="fechaEntrega" value=""  class="form-control">

		<label for="hora">hora:</label>
		<input type="time" name="hora" value=""  class="form-control">

		<label for="estado">estado:</label>
		<input type="text" name="estado" value=""  class="form-control">

		<label for="idTipoDoc">idTipoDoc:</label>
	    <input type="number" name="idTipoDoc" value=""  class="form-control">

	    <label for="idRegistro">idRegistro:</label>
	    <input type="number" name="idRegistro" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar documentos" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

