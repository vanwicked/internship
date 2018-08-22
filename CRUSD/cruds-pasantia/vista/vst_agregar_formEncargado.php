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
	<h1> Form-Encargado</h1>
	<form name="f1" method="post" action="../enrutador/enr_formEncargado.php" class="form-group">
		<label for="idFormEncargado"></label>
		<input type="hidden" name="idFormEncargado" value="" class="form-control">

		<label for="idEncargado">idEncargado:</label>
		<select name="idEncargado" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_encargado.php");
               $obj1=new mdl_encargado();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idEncargado"];
                $rol1=$row1["cargo"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

		<label for="rubro">rubro:</label>
		<input type="text" name="rubro" value=""  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value=""  class="form-control">

		<label for="facCalidad">facCalidad:</label>
		<input type="number" name="facCalidad" value="" class="form-control">

		<label for="facResponsabilidad">facResponsabilidad:</label>
		<input type="number" name="facResponsabilidad" value=""  class="form-control">

		<label for="facOrgTrabajo">facOrgTrabajo:</label>
		<input type="number" name="facOrgTrabajo" value=""  class="form-control">


		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

