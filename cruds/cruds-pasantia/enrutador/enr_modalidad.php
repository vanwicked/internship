<?php 

require("../controlador/ctrl_modalidad.php");
$obj_ctrl=new ctrl_modalidad();


if (isset($_POST["btn"]))
{
		$obj_ctrl->insertar($_POST);
			?>
					<script type="text/javascript">
						window.location.href="../vista/vst_modalidad.php";

					</script>
			<?php 		

}elseif (isset($_GET["idModalidad"])) 
	{
		$obj_ctrl->eliminar($_GET["idModalidad"]);

?>
		<script type="text/javascript">
			window.location.href="../vista/vst_modalidad.php";

		</script>
<?php
	}	
	elseif (isset($_POST["modificar"])) 
	{
		$obj_ctrl->modificar($_POST);
		?>
		
		<script type="text/javascript">
			window.location.href="../vista/vst_modalidad.php";

		</script>
    <?php
	}
 
?>