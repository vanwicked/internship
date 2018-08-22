<?php 
require("../modelo/mdl_revisionvisita.php");


class ctrl_revisionvisita
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_revisionvisita();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idVisita",$p["idVisita"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("fotoVisita",$p["fotoVisita"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idVisita",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idVisita",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idVisita",$p["idVisita"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("fotoVisita",$p["fotoVisita"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);

	$this->objeto_modelo->modificar();
}

}

?>