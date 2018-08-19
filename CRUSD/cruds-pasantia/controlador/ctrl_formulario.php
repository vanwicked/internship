<?php 
require("../modelo/mdl_formulario.php");


class ctrl_formulario
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_formulario();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idFormulario",$p["idFormulario"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idTipoFormulario",$p["idTipoFormulario"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idFormulario",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idFormulario",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idFormulario",$p["idFormulario"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("fecha",$p["fecha"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idTipoFormulario",$p["idTipoFormulario"]);

	$this->objeto_modelo->modificar();
}

}

?>