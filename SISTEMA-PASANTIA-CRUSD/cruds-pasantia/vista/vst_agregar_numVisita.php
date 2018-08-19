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
	<h1> NUM-VISITA</h1>
	<form name="f1" method="post" action="../enrutador/enr_numVisita.php" class="form-group">
		<label for="idNumVisita">idNumVisita:</label>
		<input type="number" name="idNumVisita" value="" class="form-control">

		<label for="numVisita">numVisita:</label>
		<input type="number" name="numVisita" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar numVisita" class="btn btn-primary ">
	</form>
</div>
</body>
</html>