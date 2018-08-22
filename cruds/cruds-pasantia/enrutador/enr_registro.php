<?php 

require("../controlador/ctrl_registro.php");
$obj_ctrl=new ctrl_registro();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_registro.php";

					</script>
			<?php 		

}elseif (isset($_GET["idRegistro"])) 
	{
		$obj_ctrl->eliminar($_GET["idRegistro"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_registro.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_registro.php";

		</script>
    <?php
	}

?>