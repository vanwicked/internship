<?php 
require("conexion.php");

class mdl_digital
{
	public $idDigital;
	public $horaRecepcion;
	public $fechaRecepcion;
	public $gestion;
	public $subirDoc;
	public $idCarrera;
	public $idEstudiante;
	public $idTipoDoc;
	public $conec;


	function __construct()
	{
	$this->idDigital=0;
	$this->horaRecepcion="";
	$this->fechaRecepcion="";
	$this->gestion="";
	$this->subirDoc="";
	$this->idCarrera=0;
	$this->idEstudiante=0;
	$this->idTipoDoc=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into digital (idDigital, horaRecepcion, fechaRecepcion,gestion, subirDoc, idCarrera, idEstudiante,idTipoDoc)
		values('$this->idDigital',
		'$this->horaRecepcion', '$this->fechaRecepcion','$this->gestion','$this->subirDoc','$this->idCarrera','$this->idEstudiante','$this->idTipoDoc')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM digital ORDER BY horaRecepcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from digital where idDigital='$this->idDigital'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from digital where idDigital='$this->idDigital' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE digital SET horaRecepcion='$this->horaRecepcion' , fechaRecepcion='$this->fechaRecepcion',gestion='$this->gestion',subirDoc='$this->subirDoc',idCarrera='$this->idCarrera',idEstudiante='$this->idEstudiante',idTipoDoc='$this->idTipoDoc' where idDigital='$this->idDigital'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_digital.php");

		</script>
	 <?php
	}

}

?>