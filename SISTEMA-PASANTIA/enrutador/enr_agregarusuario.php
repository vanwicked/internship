<?php
require("../controlador/ctrl_agregarusuario.php");
$obj=new ctrlUsuario();

if (isset($_POST["suscripcion"])) {
	$obj->insertar_usuario($_POST);
}
elseif (isset($_POST["modificar"])) {

	$obj->modificar($_POST);
}
?>