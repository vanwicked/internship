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
	<h1>Estudiante</h1>
	<form name="f1" method="post" action="../enrutador/enr_estudiante.php" class="form-group">
		<label for="idEstudiante"></label>
		<input type="hidden" name="idEstudiante" value="" class="form-control">

		<label for="idCarrera">idCarrera:</label>
	    <input type="text" name="idCarrera" value=""  class="form-control">

	   <label for="idPersona">idPersona:</label>
	    <select name="idPersona" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_persona.php");
               $obj1=new mdl_persona();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idPersona"];
                $rol1=$row1["nombre"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

         <label for="activo">activo:</label>
	    <input type="number" name="activo" value=""  class="form-control">

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

