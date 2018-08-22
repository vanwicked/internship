<?php 
require("../modelo/mdl_rol.php");


class ctrl_rol
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_rol();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idRol",$p["idRol"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("activo",$p["activo"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idRol",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idRol",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idRol",$p["idRol"]);
	$this->objeto_modelo->set("nombre",$p["nombre"]);
	$this->objeto_modelo->set("activo",$p["activo"]);

	$this->objeto_modelo->modificar();
}

}

?>