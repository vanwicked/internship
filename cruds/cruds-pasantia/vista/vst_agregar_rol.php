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
	<h1>Rol</h1>
	<form name="f1" method="post" action="../enrutador/enr_rol.php" class="form-group">
		<label for="idRol"></label>
		<input type="hidden" name="idRol" value="" class="form-control">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value=""  class="form-control">

		<label for="activo">activo:</label>
	    <input type="int" name="activo" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

