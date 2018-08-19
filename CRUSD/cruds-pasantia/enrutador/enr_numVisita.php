<?php 

require("../controlador/ctrl_numVisita.php");
$obj_ctrl=new ctrl_numVisita();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_numVisita.php";

					</script>
			<?php 		

}elseif (isset($_GET["idNumVisita"])) 
	{
		$obj_ctrl->eliminar($_GET["idNumVisita"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_numVisita.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_numVisita.php";

		</script>
    <?php
	}

?>