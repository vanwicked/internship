<?php 

require("../controlador/ctrl_nota.php");
$obj_ctrl=new ctrl_nota();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_nota.php";

					</script>
			<?php 		

}elseif (isset($_GET["idNota"])) 
	{
		$obj_ctrl->eliminar($_GET["idNota"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_nota.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_nota.php";

		</script>
    <?php
	}

?>