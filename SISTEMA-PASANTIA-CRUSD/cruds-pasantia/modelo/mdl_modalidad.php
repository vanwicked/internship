<?php 
require("conexion.php");

class mdl_modalidad
{
	public $idModalidad;
	public $nombre;
	public $conec;


	function __construct()
	{
	$this->idModalidad=0;
	$this->nombre="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into modalidad (idModalidad, nombre )
		values('$this->idModalidad',
		'$this->nombre')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM modalidad ORDER BY nombre ASC";
				return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from modalidad where idModalidad='$this->idModalidad'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from modalidad where idModalidad='$this->idModalidad' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE modalidad SET nombre='$this->nombre' where idModalidad='$this->idModalidad'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_modalidad.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM modalidad ORDER BY nombre ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>