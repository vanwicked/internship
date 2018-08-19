<?php 
require("conexion.php");

class mdl_numVisita
{
	public $idNumVisita;
	public $numVisita;
	public $conec;


	function __construct()
	{
	$this->idNumVisita=0;
	$this->numVisita=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into numvisita (idNumVisita, numVisita)
		values('$this->idNumVisita',
		'$this->numVisita')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM numvisita ORDER BY numVisita ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from numvisita where idNumVisita='$this->idNumVisita'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from numvisita where idNumVisita='$this->idNumVisita' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE numvisita SET numVisita='$this->numVisita' where idNumVisita='$this->idNumVisita'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_numVisita.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM numvisita ORDER BY numVisita ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>