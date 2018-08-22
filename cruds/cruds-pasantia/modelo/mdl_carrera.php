<?php 
require("conexion.php");

class mdl_carrera
{
	public $idCarrera;
	public $nombre;
	public $idModalidad;
	public $conec;


	function __construct()
	{
	$this->idCarrera=0;
	$this->nombre="";
	$this->idModalidad=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into carrera (idCarrera, nombre, idModalidad)
		values('$this->idCarrera',
		'$this->nombre', '$this->idModalidad')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM carrera ORDER BY nombre ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from carrera where idCarrera='$this->idCarrera'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from carrera where idCarrera='$this->idCarrera' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE carrera SET nombre='$this->nombre' , idModalidad='$this->idModalidad' where idCarrera='$this->idCarrera'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_carrera.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM carrera ORDER BY nombre ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>