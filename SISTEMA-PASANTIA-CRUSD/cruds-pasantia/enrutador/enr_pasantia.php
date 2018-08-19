<?php 
require("../controlador/ctrl_pasantia.php");
$obj_ctrl=new ctrl_pas();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_vista_pasantia.php";

					</script>
			<?php 		

}elseif (isset($_GET["idPasantia"])) 
	{
		$obj_ctrl->eliminar($_GET["idPasantia"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_vista_pasantia.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_vista_pasantia.php";

		</script>
    <?php
	}

?>