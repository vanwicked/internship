<?php 
require("../modelo/mdl_encargado.php");


class ctrl_encargado
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_encargado();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idEncargado",$p["idEncargado"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("idInstitucion",$p["idInstitucion"]);
	$this->objeto_modelo->set("telefono",$p["telefono"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idEncargado",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idEncargado",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idEncargado",$p["idEncargado"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("idInstitucion",$p["idInstitucion"]);
	$this->objeto_modelo->set("telefono",$p["telefono"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);

	$this->objeto_modelo->modificar();
}

}

?>