<?php 

require("../controlador/ctrl_persona.php");
$obj_ctrl=new ctrl_persona();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_persona.php";

					</script>
			<?php 		

}elseif (isset($_GET["idPersona"])) 
	{
		$obj_ctrl->eliminar($_GET["idPersona"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_persona.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_persona.php";

		</script>
    <?php
	}

?>