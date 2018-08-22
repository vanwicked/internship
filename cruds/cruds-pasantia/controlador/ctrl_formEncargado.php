<?php 
require("../modelo/mdl_formEncargado.php");


class ctrl_formEncargado
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_formEncargado();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idFormEncargado",$p["idFormEncargado"]);
	$this->objeto_modelo->set("idEncargado",$p["idEncargado"]);
	$this->objeto_modelo->set("rubro",$p["rubro"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("facCalidad",$p["facCalidad"]);
	$this->objeto_modelo->set("facResponsabilidad",$p["facResponsabilidad"]);
	$this->objeto_modelo->set("facOrgTrabajo",$p["facOrgTrabajo"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idFormEncargado",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idFormEncargado",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idFormEncargado",$p["idFormEncargado"]);
	$this->objeto_modelo->set("idEncargado",$p["idEncargado"]);
	$this->objeto_modelo->set("rubro",$p["rubro"]);
	$this->objeto_modelo->set("idEstudiante",$p["idEstudiante"]);
	$this->objeto_modelo->set("facCalidad",$p["facCalidad"]);
	$this->objeto_modelo->set("facResponsabilidad",$p["facResponsabilidad"]);
	$this->objeto_modelo->set("facOrgTrabajo",$p["facOrgTrabajo"]);

	$this->objeto_modelo->modificar();
}

}

?>