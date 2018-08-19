<?php 
require("../modelo/mdl_empleado.php");


class ctrl_empleado
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_empleado();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);
	$this->objeto_modelo->set("sueldo",$p["sueldo"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idEmpleado",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idEmpleado",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idEmpleado",$p["idEmpleado"]);
	$this->objeto_modelo->set("cargo",$p["cargo"]);
	$this->objeto_modelo->set("sueldo",$p["sueldo"]);
	$this->objeto_modelo->set("idPersona",$p["idPersona"]);

	$this->objeto_modelo->modificar();
}

}

?>