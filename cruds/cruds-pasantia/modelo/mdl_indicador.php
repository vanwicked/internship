<?php 
require("conexion.php");

class mdl_indicador
{
	public $idIndicador;
	public $descripcion;
	public $idFormulario;
	public $conec;


	function __construct()
	{
	$this->idIndicador=0;
	$this->descripcion="";
	$this->idFormulario=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into indicador (idIndicador, descripcion, idFormulario)
		values('$this->idIndicador',
		'$this->descripcion', '$this->idFormulario')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM indicador ORDER BY descripcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from indicador where idIndicador='$this->idIndicador'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from indicador where idIndicador='$this->idIndicador' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE indicador SET  descripcion='$this->descripcion', idFormulario='$this->idFormulario' where idIndicador='$this->idIndicador'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_indicador.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM indicador ORDER BY descripcion ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>