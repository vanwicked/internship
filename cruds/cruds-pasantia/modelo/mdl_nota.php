<?php 
require("conexion.php");

class mdl_nota
{
	public $idNota;
	public $notaFinal;
	public $idPasantia;
	public $idIndicador;
	public $conec;


	function __construct()
	{
	$this->idNota=0;
	$this->notaFinal=0;
	$this->idPasantia=0;
	$this->idIndicador=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into nota (idNota, notaFinal, idPasantia, idIndicador)
		values('$this->idNota',
		'$this->notaFinal', '$this->idPasantia', '$this->idIndicador')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM nota ORDER BY notaFinal ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from nota where idNota='$this->idNota'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from nota where idNota='$this->idNota' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE nota SET notaFinal='$this->notaFinal' , idPasantia='$this->idPasantia', idIndicador='$this->idIndicador' where idNota='$this->idNota'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_estudiante.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM nota ORDER BY notaFinal ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>