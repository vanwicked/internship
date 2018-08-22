<?php 

require("../controlador/ctrl_rol.php");
$obj_ctrl=new ctrl_rol();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_rol.php";

					</script>
			<?php 		

}elseif (isset($_GET["idCarrera"])) 
	{
		$obj_ctrl->eliminar($_GET["idCarrera"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_rol.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_rol.php";

		</script>
    <?php
	}

?>