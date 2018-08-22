<?php 
require("conexion.php");

class mdl_estudiante
{
	public $idEstudiante;
	public $idCarrera;
	public $idPersona;
	public $activo;
	public $conec;


	function __construct()
	{
	$this->idEstudiante=0;
	$this->idCarrera=0;
	$this->idPersona=0;
	$this->activo=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into estudiante (idEstudiante, idCarrera, idPersona, activo)
		values('$this->idEstudiante',
		 '$this->idCarrera', '$this->idPersona','$this->activo')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM estudiante ORDER BY idCarrera ASC";
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
		 $sql="UPDATE estudiante SET idCarrera='$this->idCarrera', idPersona='$this->idPersona' , activo='$this->activo' where idEstudiante='$this->idEstudiante'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_estudiante.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM estudiante ORDER BY idCarrera ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>