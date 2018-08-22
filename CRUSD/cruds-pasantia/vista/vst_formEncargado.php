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
    require("../controlador/ctrl_formEncargado.php");
    $obj=new ctrl_formEncargado();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista de Form-Encargado</h1>


<br>
<span>AGREGAR <a href="vst_agregar_formEncargado.php" target="_blank" class="glyphicon glyphicon-plus"></a></span>
<br><br><br>

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>idFormEncargado</th>
                <th>idEncargado</th>
                <th>rubro</th>
                <th>idEstudiante</th>
                <th>facCalidad</th>
                <th>facResponsabilidad</th>
                <th>facOrgTrabajo</th>
                <th>ELiminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>

<?php


while($row=mysqli_fetch_assoc($resp)){


        // crear variables y vaciar los datos del vector a cada variable

         $idFormEncargado=$row["idFormEncargado"];
      
        echo "<tr>";
        echo "<td>".$row["idFormEncargado"]."</td>";
        echo "<td>".$row["idEncargado"]."</td>";
        echo "<td>".$row["rubro"]."</td>";
        echo "<td>".$row["idEstudiante"]."</td>";
        echo "<td>".$row["facCalidad"]."</td>";
        echo "<td>".$row["facResponsabilidad"]."</td>";
        echo "<td>".$row["facOrgTrabajo"]."</td>";
        echo "<td> <a href='../enrutador/enr_formEncargado.php?idFormEncargado=".$idFormEncargado."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_formEncargado.php?idFormEncargado=".$idFormEncargado."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
        <tfoot>
            <tr>
               <th>idFormEncargado</th>
                <th>idEncargado</th>
                <th>rubro</th>
                <th>idEstudiante</th>
                <th>facCalidad</th>
                <th>facResponsabilidad</th>
                <th>facOrgTrabajo</th>
                <th>ELiminar</th>
                <th>Modificar</th>
                
            </tr>
        </tfoot>
    </table>

</div>


</body>
</html>



