<?php 
require("../modelo/mdl_documentos.php");


class ctrl_documentos
{
	public $objeto_modelo;


	function __construct()
	{
		$this->objeto_modelo=new mdl_documentos();
		
	}


public function insertar($p)
{
	/*print_r($p);
	echo $p["horaRecepcion"]."-------";*/
	$this->objeto_modelo->set("idDocumentos",$p["idDocumentos"]);
	$this->objeto_modelo->set("fechaEntrega",$p["fechaEntrega"]);
	$this->objeto_modelo->set("hora",$p["hora"]);
	$this->objeto_modelo->set("estado",$p["estado"]);
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);
	$this->objeto_modelo->set("idRegistro",$p["idRegistro"]);
	

	$this->objeto_modelo->insertar();
}

public function listar()
{
	return $this->objeto_modelo->listar();
}

public function eliminar($eli)
{
	$this->objeto_modelo->set("idDocumentos",$eli );
	$this->objeto_modelo->eliminar();
}

public function listar_dato($dato)
{
		$this->objeto_modelo->set("idDocumentos",$dato);

		$resp=$this->objeto_modelo->listar_dato();

		return $resp;
}

public function modificar($p)
{
	$this->objeto_modelo->set("idDocumentos",$p["idDocumentos"]);
	$this->objeto_modelo->set("fechaEntrega",$p["fechaEntrega"]);
	$this->objeto_modelo->set("hora",$p["hora"]);
	$this->objeto_modelo->set("estado",$p["estado"]);
	$this->objeto_modelo->set("idTipoDoc",$p["idTipoDoc"]);
	$this->objeto_modelo->set("idRegistro",$p["idRegistro"]);

	$this->objeto_modelo->modificar();
}

}

?>