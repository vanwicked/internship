<?php 
require("../modelo/mdl_tipoForm.php");


class ctrl_tipoForm
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_tipoForm();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idTipoFormulario",$p["idTipoFormulario"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idFormEncargado",$p["idFormEncargado"]);
	$this->objeto_modelo->set("idFormTutor",$p["idFormTutor"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idTipoFormulario",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idTipoFormulario",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idTipoFormulario",$p["idTipoFormulario"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idFomEncargado",$p["idFomEncargado"]);
	$this->objeto_modelo->set("idFormTutor",$p["idFormTutor"]);

	$this->objeto_modelo->modificar();
}

}

?>