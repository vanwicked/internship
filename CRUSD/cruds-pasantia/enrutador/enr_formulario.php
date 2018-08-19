<?php 

require("../controlador/ctrl_formulario.php");
$obj_ctrl=new ctrl_formulario();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_formulario.php";

					</script>
			<?php 		

}elseif (isset($_GET["idFormulario"])) 
	{
		$obj_ctrl->eliminar($_GET["idFormulario"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_formulario.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_formulario.php";

		</script>
    <?php
	}

?>