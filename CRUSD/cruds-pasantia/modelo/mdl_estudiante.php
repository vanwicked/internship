<?php 
require("conexion.php");

class mdl_estudiante
{
	public $idEstudiante;
	public $celular;
	public $carrera;
	public $idPersona;
	public $conec;


	function __construct()
	{
	$this->idEstudiante=0;
	$this->celular=0;
	$this->carrera="";
	$this->idPersona=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into estudiante (idEstudiante, celular, carrera, idPersona)
		values('$this->idEstudiante',
		'$this->celular', '$this->carrera', '$this->idPersona')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM estudiante ORDER BY celular ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from estudiante where idEstudiante='$this->idEstudiante'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from estudiante where idEstudiante='$this->idEstudiante' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE estudiante SET celular='$this->celular' , carrera='$this->carrera', idPersona='$this->idPersona' where idEstudiante='$this->idEstudiante'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_estudiante.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM estudiante ORDER BY celular ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>