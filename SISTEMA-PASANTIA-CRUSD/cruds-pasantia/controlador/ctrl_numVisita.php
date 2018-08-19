<?php 
require("../modelo/mdl_numVisita.php");


class ctrl_numVisita
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_numVisita();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idNumVisita",$p["idNumVisita"]);
	$this->objeto_modelo->set("numVisita",$p["numVisita"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idNumVisita",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idNumVisita",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idNumVisita",$p["idNumVisita"]);
	$this->objeto_modelo->set("numVisita",$p["numVisita"]);

	$this->objeto_modelo->modificar();
}

}

?>