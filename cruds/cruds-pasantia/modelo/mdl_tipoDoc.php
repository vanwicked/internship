<?php 
require("conexion.php");

class mdl_tipoDoc
{
	public $idTipoDoc;
	public $descripcion;
	public $conec;


	function __construct()
	{
	$this->idTipoDoc=0;
	$this->descripcion="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into tipodocumento (idTipoDoc, descripcion)
		values('$this->idTipoDoc',
		'$this->descripcion')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM tipodocumento ORDER BY descripcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from tipodocumento where idTipoDoc='$this->idTipoDoc'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from tipodocumento where idTipoDoc='$this->idTipoDoc' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE tipodocumento SET descripcion='$this->descripcion' where idTipoDoc='$this->idTipoDoc'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_tipoDoc.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM tipodocumento ORDER BY descripcion ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>