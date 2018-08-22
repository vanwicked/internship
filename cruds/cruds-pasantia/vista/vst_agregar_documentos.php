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
	<h1> Documentos</h1>
	<form name="f1" method="post" action="../enrutador/enr_documentos.php" class="form-group">
		<label for="idDocumentos"></label>
		<input type="hidden" name="idDocumentos" value="" class="form-control">
		
		<label for="fechaEntrega">fechaEntrega:</label>
		<input type="date" name="fechaEntrega" value=""  class="form-control">

		<label for="hora">hora:</label>
		<input type="time" name="hora" value=""  class="form-control">

		<label for="estado">estado:</label>
		<input type="text" name="estado" value=""  class="form-control">

		<label for="idTipoDoc">idTipoDoc:</label>

	    <select name="idTipoDoc" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_tipoDoc.php");
               $obj1=new mdl_tipoDoc();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idTipoDoc"];
                $rol1=$row1["descripcion"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

	    <label for="idRegistro">idRegistro:</label>

	    <select name="idRegistro" class="form-control">
          <option value="0">seleccionar</option>
        
          <?php
               require("../modelo/mdl_registro.php");
               $obj1=new mdl_registro();
               $resp1=$obj1->listar();
               print_r($resp1);
               while($row1=mysqli_fetch_assoc($resp1)){
                $cod1=$row1["idRegistro"];
                $rol1=$row1["cargo"];
                echo "<option value='".$cod1."'>".$rol1."<option>";
              }
              ?>
         </select>

		<input type="submit" name="btn" value="Agregar" class="btn btn-primary ">
	</form>
</div>
</body>
</html>

