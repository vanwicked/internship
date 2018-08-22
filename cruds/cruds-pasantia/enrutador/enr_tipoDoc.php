<?php 

require("../controlador/ctrl_tipoDoc.php");
$obj_ctrl=new ctrl_tipoDoc();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_tipoDoc.php";

					</script>
			<?php 		

}elseif (isset($_GET["idTipoDoc"])) 
	{
		$obj_ctrl->eliminar($_GET["idTipoDoc"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_tipoDoc.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_tipoDoc.php";

		</script>
    <?php
	}

?>