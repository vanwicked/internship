<?php 

require("../controlador/ctrl_indicador.php");
$obj_ctrl=new ctrl_indicador();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_indicador.php";

					</script>
			<?php 		

}elseif (isset($_GET["idIndicador"])) 
	{
		$obj_ctrl->eliminar($_GET["idIndicador"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_indicador.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_indicador.php";

		</script>
    <?php
	}

?>