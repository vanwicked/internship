<!DOCTYPE html>
<html>
<head>
	<title></title>
    </style>
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
    require("../controlador/ctrl_tipoForm.php");
    $obj=new ctrl_tipoForm();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de TipoForm</h1>


<br>
<span>AGREGAR<a href="vst_agregar_tipoForm.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idTipoFormulario</th>
                <th>descripcion</th>
                <th>idFomEncargado</th>
                <th>idFormTutor</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php


while($row=mysqli_fetch_assoc($resp)){


        // crear variables y vaciar los datos del vector a cada variable

        $idTipoFormulario=$row["idTipoFormulario"];
      
        echo "<tr>";
        echo "<td>".$row["idTipoFormulario"]."</td>";
        echo "<td>".$row["descripcion"]."</td>";
        echo "<td>".$row["idFormEncargado"]."</td>";
        echo "<td>".$row["idFormTutor"]."</td>";
        echo "<td> <a href='../enrutador/enr_tipoForm.php?idTipoFormulario=".$idTipoFormulario."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_tipoForm.php?idTipoFormulario=".$idTipoFormulario."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
        <tfoot>
            <tr>
                <th>idTipoFormulario</th>
                <th>descripcion</th>
                <th>idFomEncargado</th>
                <th>idFormTutor</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                
            </tr>
        </tfoot>
    </table>

</div>


</body>
</html>