<?php 
require("conexion.php");

class mdl_revision
{
	public $idRevision;
	public $descripcion;
	public $idCuaderno;
	public $idPasantia;
	public $idVisita;
	public $idNumVisita;
	public $conec;


	function __construct()
	{
	$this->idRevision=0;
	$this->descripcion="";
	$this->idCuaderno=0;
	$this->idPasantia=0;
	$this->idVisita=0;
	$this->idNumVisita=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into revision (idRevision, descripcion, idCuaderno, idPasantia, idVisita, idNumVisita)
		values('$this->idRevision',
		'$this->descripcion', '$this->idCuaderno', '$this->idPasantia', '$this->idVisita', '$this->idNumVisita')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM revision ORDER BY descripcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from revision where idRevision='$this->idRevision'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from revision where idRevision='$this->idRevision' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE revision SET descripcion='$this->descripcion' , idCuaderno='$this->idCuaderno', idPasantia='$this->idPasantia', idVisita='$this->idVisita', idNumVisita='$this->idNumVisita'  where idRevision='$this->idRevision'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_revision.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM revision ORDER BY descripcion ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>