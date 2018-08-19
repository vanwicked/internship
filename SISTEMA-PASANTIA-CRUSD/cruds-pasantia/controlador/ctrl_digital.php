<?php 
require("../modelo/mdl_digital.php");
class ctrl_digital
{
	public $objeto_modelo;

	function __construct()
	{
		$this->objeto_modelo=new mdl_digital();
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idDigital",$p["idDigital"]);
	$this->objeto_modelo->set("horaRecepcion",$p["horaRecepcion"]);
	$this->objeto_modelo->set("fechaRecepcion",$p["fechaRecepcion"]);
	$this->objeto_modelo->set("gestion",$p["gestion"]);
	$this->objeto_modelo->set("subirDoc",$p["subirDoc"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idDigital",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idDigital",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idDigital",$p["idDigital"]);
	$this->objeto_modelo->set("horaRecepcion",$p["horaRecepcion"]);
	$this->objeto_modelo->set("fechaRecepcion",$p["fechaRecepcion"]);
	$this->objeto_modelo->set("gestion",$p["gestion"]);
	$this->objeto_modelo->set("subirDoc",$p["subirDoc"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);

	$this->objeto_modelo->modificar();
}

}

?>