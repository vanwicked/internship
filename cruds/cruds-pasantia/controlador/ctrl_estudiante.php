<?php 
require("../modelo/mdl_estudiante.php");


class ctrl_estudiante
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_estudiante();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("activo",$p["activo"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idEstudiante",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idEstudiante",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	$this->objeto_modelo->set("activo",$p["activo"]);

	$this->objeto_modelo->modificar();
}

}

?>