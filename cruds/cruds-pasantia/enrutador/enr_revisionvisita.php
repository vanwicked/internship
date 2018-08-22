<?php 

require("../controlador/ctrl_revisionvisita.php");
$obj_ctrl=new ctrl_revisionvisita();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_revisionvisita.php";

					</script>
			<?php 		

}elseif (isset($_GET["idVisita"])) 
	{
		$obj_ctrl->eliminar($_GET["idVisita"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_revisionvisita.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_revisionvisita.php";

		</script>
    <?php
	}

?>