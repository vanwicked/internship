<?php 
require("conexion.php");

class mdl_pas
{
	public $idPasantia;
	public $fechaInicio;
	public $fechaFin;
	public $numPasantia;
	public $idCarrera;
	public $idEmpleado;
	public $idInstitucion;
	public $idEstudiante;
	public $conec;

	function __construct()
	{
	$this->idPasantia=0;
	$this->fechaInicio="";
	$this->fechaFin="";
	$this->numPasantia="";
	$this->idCarrera=0;
	$this->idEmpleado=0;
	$this->idInstitucion=0;
	$this->idEstudiante=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into pasantia (idPasantia, fechaInicio, fechaFin,numPasantia, idCarrera, idEmpleado, idInstitucion,idEstudiante)
		values('$this->idPasantia',
		'$this->fechaInicio', '$this->fechaFin','$this->numPasantia','$this->idCarrera','$this->idEmpleado','$this->idInstitucion','$this->idEstudiante')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM pasantia ORDER BY idPasantia ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from pasantia where idPasantia='$this->idPasantia'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="SELECT * FROM pasantia WHERE idPasantia='$this->idPasantia' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE pasantia SET fechaInicio='$this->fechaInicio' , fechaFin='$this->fechaFin',numPasantia='$this->numPasantia',idCarrera='$this->idCarrera',idEmpleado='$this->idEmpleado',idInstitucion='$this->idInstitucion',idEstudiante='$this->idEstudiante' where idPasantia='$this->idPasantia'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_vista_pasantia.php");

		</script>
	 <?php
	}

}

?>