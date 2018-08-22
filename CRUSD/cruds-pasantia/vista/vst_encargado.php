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
    require("../controlador/ctrl_encargado.php");
    $obj=new ctrl_encargado();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de Encargado</h1>


<br>
<span>AGREGAR <a href="vst_agregar_encargado.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idEncargado</th>
                <th>idPersona</th>
                <th>idInstitucion</th>
                <th>telefono</th>
                <th>cargo</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php


while($row=mysqli_fetch_assoc($resp)){


        // crear variables y vaciar los datos del vector a cada variable

        $idEncargado=$row["idEncargado"];
      
        echo "<tr>";
        echo "<td>".$row["idEncargado"]."</td>";
        echo "<td>".$row["idPersona"]."</td>";
        echo "<td>".$row["idInstitucion"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "<td>".$row["cargo"]."</td>";
        echo "<td> <a href='../enrutador/enr_encargado.php?idEncargado=".$idEncargado."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_encargado.php?idEncargado=".$idEncargado."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
        <tfoot>
            <tr>
                <th>IDENCARGADO</th>
                <th>IDPERSONA</th>
                <th>IDINSTITUCION</th>
                <th>TELEFONO</th>
                <th>CARGO</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
                
            </tr>
        </tfoot>
    </table>

</div>


</body>
</html>



