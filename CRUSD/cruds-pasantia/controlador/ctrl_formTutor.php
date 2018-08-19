<?php 
require("../modelo/mdl_formTutor.php");


class ctrl_formTutor
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_formTutor();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idFormTutor",$p["idFormTutor"]);
	$this->objeto_modelo->set("nota",$p["nota"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idFormTutor",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idFormTutor",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idFormTutor",$p["idFormTutor"]);
	$this->objeto_modelo->set("nota",$p["nota"]);
	$this->objeto_modelo->set("descripcion",$p["descripcion"]);
	$this->objeto_modelo->set("idCuaderno",$p["idCuaderno"]);
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);

	$this->objeto_modelo->modificar();
}

}

?>