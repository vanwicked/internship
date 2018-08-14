<?php
require("../modelo/mdl_rol.php");
if($_GET['id_rol']){
    $borrar=new ctrl_rol();
    $borrar->eliminar($_GET['id_rol']);
} 
class ctrl_rol
{
	public $objeto_modelo;

	function __construct()
	{
		$this->objeto_modelo=new mdl_rol();
	}


public function insertar($p)
{
	$this->objeto_modelo->set("nombre",$p["nombre"]);

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar ($v){
	$this->objeto_modelo->eliminar($v);
	echo "<script> window.location.href='../admin/production/rol.php';</script>";
}
public function modificar($P)
{
	$this->objeto_modelo->set("id_rol",$P["id_rol"] );
	$this->objeto_modelo->set("nombre",$P["nombre"] );

	$this->objeto_modelo->modificar();
}

}

?>