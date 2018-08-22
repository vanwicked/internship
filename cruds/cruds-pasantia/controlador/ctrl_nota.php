<?php 
require("../modelo/mdl_nota.php");


class ctrl_nota
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_nota();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idNota",$p["idNota"]);
	$this->objeto_modelo->set("notaFinal",$p["notaFinal"]);
	$this->objeto_modelo->set("idPasantia",$p["idPasantia"]);
	$this->objeto_modelo->set("idIndicador",$p["idIndicador"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idNota",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idNota",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idNota",$p["idNota"]);
	$this->objeto_modelo->set("notaFinal",$p["notaFinal"]);
	$this->objeto_modelo->set("idPasantia",$p["idPasantia"]);
	$this->objeto_modelo->set("idIndicador",$p["idIndicador"]);

	$this->objeto_modelo->modificar();
}

}

?>