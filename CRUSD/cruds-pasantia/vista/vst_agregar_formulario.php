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
	<h1>Formulario</h1>
	<form name="f1" method="post" action="../enrutador/enr_formulario.php" class="form-group">
		<label for="idFormulario"></label>
		<input type="hidden" name="idFormulario" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="fecha">fecha:</label>
	    <input type="date" name="fecha" value=""  class="form-control">

	    <label for="idCarrera">idCarrera:</label>
	    <select name="idCarrera" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_carrera.php");
               $obj1=new mdl_carrera();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idCarrera"];
                $rol1=$row1["nombre"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

	    <label for="idTipoFormulario">idTipoFormulario:</label>
	    <input type="number" name="idTipoFormulario" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar formulario" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

