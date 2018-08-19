<?php 
require("../modelo/mdl_persona.php");


class ctrl_persona
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_persona();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("dni",$p["dni"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("primerAp",$p["primerAp"]);
	$this->objeto_modelo->set("segundoAp",$p["segundoAp"]);
	$this->objeto_modelo->set("direccion",$p["direccion"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idPersona",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idPersona",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("dni",$p["dni"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("primerAp",$p["primerAp"]);
	$this->objeto_modelo->set("segundoAp",$p["segundoAp"]);
	$this->objeto_modelo->set("direccion",$p["direccion"]);

	$this->objeto_modelo->modificar();
}

}

?>