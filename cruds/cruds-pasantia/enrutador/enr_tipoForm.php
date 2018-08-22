<?php 

require("../controlador/ctrl_tipoForm.php");
$obj_ctrl=new ctrl_tipoForm();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_tipoForm.php";

					</script>
			<?php 		

}elseif (isset($_GET["idTipoFormulario"])) 
	{
		$obj_ctrl->eliminar($_GET["idTipoFormulario"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_tipoForm.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_tipoForm.php";

		</script>
    <?php
	}

?>