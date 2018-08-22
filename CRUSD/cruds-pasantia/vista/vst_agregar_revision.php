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
	<h1>Revision</h1>
	<form name="f1" method="post" action="../enrutador/enr_revision.php" class="form-group">
		<label for="idRevision"></label>
		<input type="hidden" name="idRevision" value="" class="form-control">
		
		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<input type="number" name="idCuaderno" value=""  class="form-control">

		<label for="idPasantia">idPasantia:</label>
		<select name="idPasantia" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_pasantia.php");
               $obj1=new mdl_pas();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idPasantia"];
                $rol1=$row1["numPasantia"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

		<label for="idVisita">idVisita:</label>
	    <input type="number" name="idVisita" value=""  class="form-control">

	    <label for="idNumVisita">idNumVisita:</label>
	    <input type="number" name="idNumVisita" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

