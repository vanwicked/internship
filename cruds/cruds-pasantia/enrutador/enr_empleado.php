<?php 

require("../controlador/ctrl_empleado.php");
$obj_ctrl=new ctrl_empleado();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_empleado.php";

					</script>
			<?php 		

}elseif (isset($_GET["idEmpleado"])) 
	{
		$obj_ctrl->eliminar($_GET["idEmpleado"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_empleado.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_empleado.php";

		</script>
    <?php
	}

?>