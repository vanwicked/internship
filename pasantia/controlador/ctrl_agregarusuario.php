<?php
require("../modelo/mdl_login.php");
if($_GET['id_persona']){
    $borrar=new ctrlUsuario();
    $borrar->eliminar($_GET['id_persona']);
}
class ctrlUsuario
{  public $obj_mod;
	
	function __construct()
	{
		$this->obj_mod=new mdl_login();
	}

	public function insertar_usuario($n)
	{
	$this->obj_mod->set("nombre", $n["nombre"]);
	$this->obj_mod->set("papellido", $n["papellido"]);
	$this->obj_mod->set("sapellido", $n["sapellido"]);
	$this->obj_mod->set("ci", $n["ci"]);
	$this->obj_mod->set("telefono", $n["telefono"]);
	$this->obj_mod->set("direccion", $n["direccion"]);
	$this->obj_mod->set("email", $n["email"]);
	$this->obj_mod->insertar_usuario();
	echo "<script> window.location.href='../admin/docs/index.php';</script>";

	}
	public function listar()
	{
	return $this->obj_mod->listar();
	}

	public function buscar($dato)
	{
	$this->obj_mod->set("id_persona", $dato);
    return $this->obj_mod->buscar();
	}
	public function eliminar ($v){
		    $this->obj_mod->eliminar($v);
	    echo "<script> window.location.href='../admin/production/index.php';</script>";
	}
	public function modificar($p)
	{
	$this->obj_mod->set("id_persona", $p["id_persona"]);
	$this->obj_mod->set("nombre", $p["nombre"]);
	$this->obj_mod->set("papellido", $p["papellido"]);
	$this->obj_mod->set("sapellido", $p["sapellido"]);
	$this->obj_mod->set("ci", $p["ci"]);
	$this->obj_mod->set("telefono", $p["telefono"]);
	$this->obj_mod->set("direccion", $p["direccion"]);
	$this->obj_mod->set("rol", $p["rol"]);
	return $this->obj_mod->modificar();
	        echo "<script> window.location.href='../vista/vst_roles_usuarios.php;</script>";

	}
}