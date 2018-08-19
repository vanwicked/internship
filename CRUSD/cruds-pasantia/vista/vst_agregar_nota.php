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
	<h1> NOTA</h1>
	<form name="f1" method="post" action="../enrutador/enr_nota.php" class="form-group">
		<label for="idNota">idNota:</label>
		<input type="number" name="idNota" value="" class="form-control">

		<label for="notaFinal">notaFinal:</label>
		<input type="number" name="notaFinal" value=""  class="form-control">

		<label for="idPasantia">idPasantia:</label>
	    <input type="number" name="idPasantia" value=""  class="form-control">

	   <label for="idIndicador">idIndicador:</label>
	    <input type="number" name="idIndicador" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar nota" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

