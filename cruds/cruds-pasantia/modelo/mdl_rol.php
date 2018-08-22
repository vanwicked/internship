<?php 
require("conexion.php");

class mdl_rol
{
	public $idRol;
	public $nombre;
	public $activo;
	public $conec;


	function __construct()
	{
	$this->idRol=0;
	$this->nombre="";
	$this->activo=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into rol (idRol, nombre, activo)
		values('$this->idRol',
		'$this->nombre', '$this->activo')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM rol ORDER BY nombre ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from rol where idRol='$this->idRol'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from rol where idRol='$this->idRol' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE rol SET nombre='$this->nombre' , activo='$this->activo' where idRol='$this->idRol'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_carrera.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM rol ORDER BY nombre ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>