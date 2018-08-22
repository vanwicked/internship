<?php 

require("../controlador/ctrl_formEncargado.php");
$obj_ctrl=new ctrl_formEncargado();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_formEncargado.php";

					</script>
			<?php 		

}elseif (isset($_GET["idFormEncargado"])) 
	{
		$obj_ctrl->eliminar($_GET["idFormEncargado"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_formEncargado.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_formEncargado.php";

		</script>
    <?php
	}

?>