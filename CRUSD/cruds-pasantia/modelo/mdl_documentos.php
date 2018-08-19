<?php 
require("conexion.php");

class mdl_documentos
{
	public $idDocumentos;
	public $fechaEntrega;
	public $hora;
	public $estado;
	public $idTipoDoc;
	public $idRegistro;
	public $conec;


	function __construct()
	{
	$this->idDocumentos=0;
	$this->fechaEntrega="";
	$this->hora="";
	$this->estado="";
	$this->idTipoDoc=0;
	$this->idRegistro=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into documentos (idDocumentos, fechaEntrega, hora, estado, idTipoDoc, idRegistro)
		values('$this->idDocumentos',
		'$this->fechaEntrega', '$this->hora', '$this->estado', '$this->idTipoDoc', '$this->idRegistro')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM documentos ORDER BY fechaEntrega ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from documentos where idDocumentos='$this->idDocumentos'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from documentos where idDocumentos='$this->idDocumentos' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE documentos SET fechaEntrega='$this->fechaEntrega' , hora='$this->hora', estado='$this->estado', idTipoDoc='$this->idTipoDoc', idRegistro='$this->idRegistro'  where idDocumentos='$this->idDocumentos'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_documentos.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM documentos ORDER BY fechaEntrega ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>