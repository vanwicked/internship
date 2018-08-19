<?php 

require("../controlador/ctrl_revision.php");
$obj_ctrl=new ctrl_revision();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_revision.php";

					</script>
			<?php 		

}elseif (isset($_GET["idRevision"])) 
	{
		$obj_ctrl->eliminar($_GET["idRevision"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_revision.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_revision.php";

		</script>
    <?php
	}

?>