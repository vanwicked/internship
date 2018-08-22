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
	<h1>Persona</h1>
	<form name="f1" method="post" action="../enrutador/enr_persona.php" class="form-group">
		<label for="idPersona"></label>
		<input type="hidden" name="idPersona" value="" class="form-control">

		<label for="dni">dni:</label>
		<input type="text" name="dni" value=""  class="form-control">

		<label for="nombre">nombre:</label>
	    <input type="text" name="nombre" value=""  class="form-control">

	    <label for="primerAp">primerAp:</label>
	    <input type="text" name="primerAp" value=""  class="form-control">

	    <label for="segundoAp">segundoAp:</label>
		<input type="text" name="segundoAp" value=""  class="form-control">

		<label for="telefono">telefono:</label>
		<input type="number" name="telefono" value=""  class="form-control">

		<label for="direccion">direccion:</label>
		<input type="text" name="direccion" value=""  class="form-control">

		<label for="email">email:</label>
		<input type="text" name="email" value=""  class="form-control">

		<label for="activo">activo:</label>
		<input type="tinyint" name="activo" value=""  class="form-control">

	    <label for="idRol">idRol:</label>
		<select name="idRol" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_rol.php");
               $obj1=new mdl_rol();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idRol"];
                $rol1=$row1["nombre"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

