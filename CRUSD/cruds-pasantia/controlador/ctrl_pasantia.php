<?php 
require("../modelo/mdl_pasantia.php");
class ctrl_pas
{
	public $objeto_modelo;

	function __construct()
	{
		$this->objeto_modelo=new mdl_pas();
	}

public function insertar($p)
{
	$this->objeto_modelo->set("idPasantia",$p["idPasantia"]);
	$this->objeto_modelo->set("fechaInicio",$p["fechaInicio"]);
	$this->objeto_modelo->set("fechaFin",$p["fechaFin"]);
	$this->objeto_modelo->set("numPasantia",$p["numPasantia"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("idInstitucion",$p["idInstitucion"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idPasantia",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idPasantia",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($a)
{
	$this->objeto_modelo->set("idPasantia",$a["idPasantia"]);
	$this->objeto_modelo->set("fechaInicio",$a["fechaInicio"]);
	$this->objeto_modelo->set("fechaFin",$a["fechaFin"]);
	$this->objeto_modelo->set("numPasantia",$a["numPasantia"]);
	$this->objeto_modelo->set("idCarrera",$a["idCarrera"]);
	$this->objeto_modelo->set("idEmpleado",$a["idEmpleado"]);
	$this->objeto_modelo->set("idInstitucion",$a["idInstitucion"]);
	$this->objeto_modelo->set("idEstudiante",$a["idEstudiante"]);

	$this->objeto_modelo->modificar();
}

}

?>