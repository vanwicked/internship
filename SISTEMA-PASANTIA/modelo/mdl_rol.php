<?php 
require("conexion.php");

class mdl_rol
{
	public $idRol;
	public $nombre;
	public $conec;


	function __construct()
	{
	$this->idRol=0;
	$this->nombre="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		$sql="insert into rol (nombre)
		value ('$this->nombre')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
		$sql="SELECT * FROM rol ORDER BY nombre ASC";
		return $this->conec->con_retorno($sql);
	}

	public function eliminar($v){
	    $sql="delete from rol WHERE idRol=$v;";
	    $this->conec->sin_retorno($sql);
    }

	public function listar_dato($v)
	{
			$sql="select * from rol where id_rol='$v'; ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE rol SET nombre='$this->nombre' where id_rol='$this->id_rol'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_rol1.php");

		</script>
	 <?php
	}

}

?>