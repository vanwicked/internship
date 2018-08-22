<?php 
require("../modelo/mdl_carrera.php");


class ctrl_carrera
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_carrera();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("idModalidad",$p["idModalidad"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idCarrera",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idCarrera",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idCarrera",$p["idCarrera"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("idModalidad",$p["idModalidad"]);

	$this->objeto_modelo->modificar();
}

}

?>