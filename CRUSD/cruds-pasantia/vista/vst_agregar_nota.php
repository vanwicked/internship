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
	<h1>Nota</h1>
	<form name="f1" method="post" action="../enrutador/enr_nota.php" class="form-group">
		<label for="idNota"></label>
		<input type="hidden" name="idNota" value="" class="form-control">

		<label for="notaFinal">notaFinal:</label>
		<input type="number" name="notaFinal" value=""  class="form-control">

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

	   <label for="idIndicador">idIndicador:</label>
	    <input type="number" name="idIndicador" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar nota" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

