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
	<h1> Carrera</h1>
	<form name="f1" method="post" action="../enrutador/enr_carrera.php" class="form-group">
		<label for="idCarrera"></label>
		<input type="hidden" name="idCarrera" value="" class="form-control">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value=""  class="form-control">

		<label for="idModalidad">idModalidad:</label>
		<select name="idModalidad" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_modalidad.php");
               $obj1=new mdl_modalidad();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idModalidad"];
                $rol1=$row1["nombre"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

<br>

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

