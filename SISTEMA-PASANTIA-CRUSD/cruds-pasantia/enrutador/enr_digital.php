<?php 

require("../controlador/ctrl_digital.php");
$obj_ctrl=new ctrl_digital();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_digital.php";

					</script>
			<?php 		

}elseif (isset($_GET["idDigital"])) 
	{
		$obj_ctrl->eliminar($_GET["idDigital"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_digital.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_digital.php";

		</script>
    <?php
	}

?>