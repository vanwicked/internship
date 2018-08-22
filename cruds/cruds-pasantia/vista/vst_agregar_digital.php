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
	<h1>Doc Digital</h1>
	<form name="f1" method="post" action="../enrutador/enr_digital.php" class="form-group">
		<label for="idDigital"></label>
		<input type="hidden" name="idDigital" value="" class="form-control">

		<label for="horaRecepcion">hora_Recepcion:</label>
		<input type="time" name="horaRecepcion" value=""  class="form-control">

		<label for="fechaRecepcion">fecha_recepcion:</label>
		<input type="date" name="fechaRecepcion" value=""  class="form-control">

		<label for="gestion">gestion:</label>
		<input type="text" name="gestion" value=""  class="form-control">

		<label for="subirDoc">subir_doc:</label>
		<input type="file" name="subirDoc" value="" class="form-control">

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

		<label for="idEstudiante">idEstudiante:</label>
	  <input type="number" name="idEstudiante" value="" class="form-control">

		<label for="idTipoDoc">idTipoDoc:</label>
		<input type="number" name="idTipoDoc" value="" class="form-control">


		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>