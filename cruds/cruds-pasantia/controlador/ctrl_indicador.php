<?php 
require("../modelo/mdl_indicador.php");


class ctrl_indicador
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_indicador();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idIndicador",$p["idIndicador"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idFormulario",$p["idFormulario"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idIndicador",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idIndicador",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idIndicador",$p["idIndicador"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idFormulario",$p["idFormulario"]);

	$this->objeto_modelo->modificar();
}

}

?>