<?php 
require("../modelo/mdl_revision.php");


class ctrl_revision
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_revision();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idRevision",$p["idRevision"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idPasantia",$p["idPasantia"]);
	$this->objeto_modelo->set("idVisita",$p["idVisita"]);
	$this->objeto_modelo->set("idNumVisita",$p["idNumVisita"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idRevision",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idRevision",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idRevision",$p["idRevision"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idPasantia",$p["idPasantia"]);
	$this->objeto_modelo->set("idVisita",$p["idVisita"]);
	$this->objeto_modelo->set("idNumVisita",$p["idNumVisita"]);

	$this->objeto_modelo->modificar();
}

}

?>