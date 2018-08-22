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
	<h1>Registro</h1>
	<form name="f1" method="post" action="../enrutador/enr_registro.php" class="form-group">
		<label for="idRegistro"></label>
		<input type="hidden" name="idRegistro" value="" class="form-control">

		<label for="cargo">cargo:</label>
		<input type="text" name="cargo" value=""  class="form-control">

		<label for="idEmpleado">idEmpleado:</label>
	    
	    <select name="idEmpleado" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_empleado.php");
               $obj1=new mdl_empleado();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idEmpleado"];
                $rol1=$row1["cargo"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

	   <label for="idPersona">idPersona:</label>
      <input type="number" name="idPersona" value="" class="form-control">
		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

