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
	<h1>Form-Tutor</h1>
	<form name="f1" method="post" action="../enrutador/enr_formTutor.php" class="form-group">
		<label for="idFormTutor"></label>
		<input type="hidden" name="idFormTutor" value="" class="form-control">

		<label for="nota">nota:</label>
		<input type="number" name="nota" value=""  class="form-control">

		<label for="descripcion">descripcion:</label>
		<input type="text" name="descripcion" value=""  class="form-control">

		<label for="idCuaderno">idCuaderno:</label>
		<select name="idCuaderno" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_cuaderno.php");
               $obj1=new mdl_cuaderno();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idCuaderno"];
                $rol1=$row1["fecha"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

		<label for="idEmpleado">idEmpleado:</label>
		<input type="number" name="idEmpleado" value=""  class="form-control">

		<label for="idEstudiante">idEstudiante:</label>
		<input type="number" name="idEstudiante" value=""  class="form-control">


		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

