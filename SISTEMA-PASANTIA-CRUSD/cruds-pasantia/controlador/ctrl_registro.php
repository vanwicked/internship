<?php 
require("../modelo/mdl_registro.php");


class ctrl_registro
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_registro();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idRegistro",$p["idRegistro"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idRegistro",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idRegistro",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idRegistro",$p["idRegistro"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);

	$this->objeto_modelo->modificar();
}

}

?>