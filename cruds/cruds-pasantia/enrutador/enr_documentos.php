<?php 

require("../controlador/ctrl_documentos.php");
$obj_ctrl=new ctrl_documentos();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_documentos.php";

					</script>
			<?php 		

}elseif (isset($_GET["idDocumentos"])) 
	{
		$obj_ctrl->eliminar($_GET["idDocumentos"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_documentos.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_documentos.php";

		</script>
    <?php
	}

?>