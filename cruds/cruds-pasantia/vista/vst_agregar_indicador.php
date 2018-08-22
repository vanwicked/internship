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
	<h1>Indicador</h1>
	<form name="f1" method="post" action="../enrutador/enr_indicador.php" class="form-group">
		<label for="idIndicador"></label>
		<input type="hidden" name="idIndicador" value="" class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idFormulario">idFormulario:</label>
		<select name="idFormulario" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_formulario.php");
               $obj1=new mdl_formulario();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idFormulario"];
                $rol1=$row1["descripcion"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>
		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>
