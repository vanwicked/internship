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
    require("../controlador/ctrl_revision.php");
    $obj=new ctrl_revision();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de Revision</h1>


<br>
<span>AGREGAR<a href="vst_agregar_revision.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idRevision</th>
                <th>descripcion</th>
                <th>idCuaderno</th>
                <th>idPasantia</th>
                <th>idVisita</th>
                <th>idNumVisita</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php


while($row=mysqli_fetch_assoc($resp)){


        // crear variables y vaciar los datos del vector a cada variable

        $idRevision=$row["idRevision"];
      
        echo "<tr>";
        echo "<td>".$row["idRevision"]."</td>";
        echo "<td>".$row["descripcion"]."</td>";
        echo "<td>".$row["idCuaderno"]."</td>";
        echo "<td>".$row["idPasantia"]."</td>";
        echo "<td>".$row["idVisita"]."</td>";
        echo "<td>".$row["idNumVisita"]."</td>";
        echo "<td> <a href='../enrutador/enr_revision.php?idRevision=".$idRevision."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_revision.php?idRevision=".$idRevision."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
        <tfoot>
            <tr>
                <th>ID_REVISION</th>
                <th>OBSERVACION</th>
                <th>IDCUADERNO</th>
                <th>IDPASANTIA</th>
                <th>IDVISITA</th>
                <th>IDNUMVISITA</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
                
            </tr>
        </tfoot>
    </table>

</div>


</body>
</html>



