<?php 

require("../controlador/ctrl_formTutor.php");
$obj_ctrl=new ctrl_formTutor();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_formTutor.php";

					</script>
			<?php 		

}elseif (isset($_GET["idFormTutor"])) 
	{
		$obj_ctrl->eliminar($_GET["idFormTutor"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_formTutor.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_formTutor.php";

		</script>
    <?php
	}

?>