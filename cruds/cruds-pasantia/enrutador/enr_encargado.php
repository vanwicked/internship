<?php 

require("../controlador/ctrl_encargado.php");
$obj_ctrl=new ctrl_encargado();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_encargado.php";

					</script>
			<?php 		

}elseif (isset($_GET["idEncargado"])) 
	{
		$obj_ctrl->eliminar($_GET["idEncargado"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_encargado.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_encargado.php";

		</script>
    <?php
	}

?>