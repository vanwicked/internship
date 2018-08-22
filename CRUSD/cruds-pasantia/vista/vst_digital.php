<!DOCTYPE html>
<html>
<head>
	<title></title>
        
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/datatables/css/bootstrap.min.css">

<link rel="stylesheet" href="../bootstrap/datatables/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/datatables/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/datatables/css/responsive.bootstrap.min.css">

<script src="../bootstrap/datatables/js/jquery-1.12.4.js"></script>


<script src="../bootstrap/datatables/js/jquery.dataTables.min.js"></script>
<script src="../bootstrap/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="../bootstrap/datatables/js/dataTables.fixedHeader.min.js"></script>
<script src="../bootstrap/datatables/js/dataTables.responsive.min.js"></script>
<script src="../bootstrap/datatables/js/responsive.bootstrap.min.js"></script>
<script src="../bootstrap/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/funciones.js"></script>
    <script type="text/javascript">
		

		$(document).ready(function()
		{
   		 var table = $('#example').DataTable( 
   		 {
        	responsive: true
   		 } );
 
    	new $.fn.dataTable.FixedHeader( table );
		} );
	</script>
</head>
<body background="../img/144.jpg">
<?php
    require("../controlador/ctrl_digital.php");
    $obj=new ctrl_digital();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de Doc Digital</h1>


<br>
<span>AGREGAR<a href="vst_agregar_digital.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idDigital</th>
                <th>hora_Recepcion</th>
                <th>fecha_recepcion</th>
                <th>gestion</th>
                <th>subir_doc</th>
                <th>idCarrera</th>
                <th>idEstudiante</th>
                <th>idTipoDoc</th>
                <th>ELiminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php

while($row=mysqli_fetch_assoc($resp)){

        // crear variables y vaciar los datos del vector a cada variable

        $idDigital=$row["idDigital"];
      
        echo "<tr>";
        echo "<td>".$row["idDigital"]."</td>";
        echo "<td>".$row["horaRecepcion"]."</td>";
        echo "<td>".$row["fechaRecepcion"]."</td>";
        echo "<td>".$row["gestion"]."</td>";
        echo "<td>".$row["subirDoc"]."</td>";
        echo "<td>".$row["idCarrera"]."</td>";
        echo "<td>".$row["idEstudiante"]."</td>";
        echo "<td>".$row["idTipoDoc"]."</td>";
        echo "<td> <a href='../enrutador/enr_digital.php?idDigital=".$idDigital."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_digital.php?idDigital=".$idDigital."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID_DIGITAL</th>
                <th>HORA_RECEPCION</th>
                <th>FECHA_RECEPCION</th>
                <th>GESTION</th>
                <th>SUBIR_DOC</th>
                <th>ID_CARRERA</th>
                <th>ID_ESTUDIANTE</th>
                <th>ID_TIPO_DOC</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
                
            </tr>
        </tfoot>
    </table>

</div>
</body>
</html>
