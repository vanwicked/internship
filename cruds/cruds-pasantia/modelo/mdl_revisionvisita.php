<?php 
require("conexion.php");

class mdl_revisionvisita
{
	public $idVisita;
	public $fecha;
	public $fotoVisita;
	public $idEmpleado;
	public $conec;


	function __construct()
	{
	$this->idVisita=0;
	$this->fecha="";
	$this->fotoVisita="";
	$this->idEmpleado=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into revisionvisita (idVisita, fecha, fotoVisita, idEmpleado)
		values('$this->idVisita',
		'$this->fecha', '$this->fotoVisita', '$this->idEmpleado')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM revisionvisita ORDER BY fecha ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from revisionvisita where idVisita='$this->idVisita'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from revisionvisita where idVisita='$this->idVisita' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE revisionvisita SET fecha='$this->fecha' , fotoVisita='$this->fotoVisita', idEmpleado='$this->idEmpleado' where idVisita='$this->idVisita'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_revisionvisita.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM revisionvisita ORDER BY fecha ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>