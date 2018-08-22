<?php 
require("../modelo/mdl_modalidad.php");
class ctrl_modalidad
{
	public $objeto_modelo;

	function __construct()
	{
		$this->objeto_modelo=new mdl_modalidad();
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idModalidad",$p["idModalidad"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idModalidad",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idModalidad",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idModalidad",$p["idModalidad"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);

	$this->objeto_modelo->modificar();
}

}

?>