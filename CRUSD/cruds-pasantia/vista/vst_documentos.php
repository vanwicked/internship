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
    require("../controlador/ctrl_documentos.php");
    $obj=new ctrl_documentos();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de Documentos</h1>


<br>
<span>AGREGAR <a href="vst_agregar_documentos.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idDocumentos</th>
                <th>fechaEntrega</th>
                <th>hora</th>
                <th>estado</th>
                <th>idTipoDoc</th>
                <th>idRegistro</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php


while($row=mysqli_fetch_assoc($resp)){


        // crear variables y vaciar los datos del vector a cada variable

        $idDocumentos=$row["idDocumentos"];
      
        echo "<tr>";
        echo "<td>".$row["idDocumentos"]."</td>";
        echo "<td>".$row["fechaEntrega"]."</td>";
        echo "<td>".$row["hora"]."</td>";
        echo "<td>".$row["estado"]."</td>";
        echo "<td>".$row["idTipoDoc"]."</td>";
        echo "<td>".$row["idRegistro"]."</td>";
        echo "<td> <a href='../enrutador/enr_documentos.php?idDocumentos=".$idDocumentos."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_documentos.php?idDocumentos=".$idDocumentos."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
        <tfoot>
            <tr>
                <th>IDDOCUMENTOS</th>
                <th>FECHA ENTREGA</th>
                <th>HORA</th>
                <th>ESTADO</th>
                <th>IDTIPODOC</th>
                <th>IDREGISTRO</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
                
            </tr>
        </tfoot>
    </table>

</div>


</body>
</html>



