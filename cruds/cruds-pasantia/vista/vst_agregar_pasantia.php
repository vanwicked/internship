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
	<h1>Pasantia</h1>
	<form name="f1" method="post" action="../enrutador/enr_pasantia.php" class="form-group">
		<label for="idPasantia"></label>
		<input type="hidden" name="idPasantia" class="form-control">

		<label for="fechaInicio">fecha_Inicio</label>
		<input type="date" name="fechaInicio"  class="form-control">

		<label for="fechaFin">fecha_Fin</label>
		<input type="date" name="fechaFin"  class="form-control">

		<label for="numPasantia">num_pasantia</label>
		<input type="text" name="numPasantia"   class="form-control">

		<label for="idCarrera">id_Carrera</label>
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

		<label for="idEmpleado">id_Empleado</label>
		<input type="number" name="idEmpleado"   class="form-control">

		<label for="idInstitucion">id_Institucion</label>
		<input type="number" name="idInstitucion"  class="form-control">

		<label for="idEstudiante">id_Estudiante:</label>
		<input type="number" name="idEstudiante"   class="form-control">


		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

