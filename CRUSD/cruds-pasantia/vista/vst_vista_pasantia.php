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
<script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>

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
<body  background="../img/144.jpg">
<?php
    require("../controlador/ctrl_pasantia.php");
    $obj=new ctrl_pas();
    $resp=$obj->listar();
    //print_r($resp);
    // convertir el resultado en vectores php

?>


<div class="container">
<h1>Lista pasantia</h1>
<br>
<span>Agregar pasantia<a href="vst_pasantia.html" target="_blank" class="glyphicon glyphicon-plus"></a>
</span> 
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id_pasantia</th>
                <th>fecha_inicio</th>
                <th>fecha_Fin</th>
                <th>num_pasantia</th>
                <th>id_carrera</th>
                <th>id_empleado</th>
                <th>id_institucion</th>
                <th>id_estudiante</th>
                <th>ELiminar</th>
                <th>Modificar</th>
                </tr>
        </thead>
        <tbody>
<?php

while($row=mysqli_fetch_assoc($resp)){

        // crear variables y vaciar los datos del vector a cada variable

        $idPasantia=$row["idPasantia"];
      
        echo "<tr>";
        echo "<td>".$row["idPasantia"]."</td>";
        echo "<td>".$row["fechaInicio"]."</td>";
        echo "<td>".$row["fechaFin"]."</td>";
        echo "<td>".$row["numPasantia"]."</td>";
        echo "<td>".$row["idCarrera"]."</td>";
        echo "<td>".$row["idEmpleado"]."</td>";
        echo "<td>".$row["idInstitucion"]."</td>";
        echo "<td>".$row["idEstudiante"]."</td>";
        echo "<td> <a href='../enrutador/enr_pasantia.php?idPasantia=".$idPasantia."' class='glyphicon glyphicon-trash'></a></td>";
        echo "<td><a href='vst_mod_pasantia.php?idPasantia=".$idPasantia."' class='glyphicon glyphicon-edit'></a></td>";
        echo "</tr>";


    }
?>
      
        </tbody>
    </table>

</div>
</body>
</html>












