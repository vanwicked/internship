<?php 
require("../modelo/mdl_tipoDoc.php");


class ctrl_tipoDoc
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_tipoDoc();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idTipoDoc",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idTipoDoc",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);

	$this->objeto_modelo->modificar();
}

}

?>