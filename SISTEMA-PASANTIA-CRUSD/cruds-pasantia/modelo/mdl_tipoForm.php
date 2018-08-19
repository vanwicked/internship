<?php 
require("conexion.php");

class mdl_tipoForm
{
	public $idTipoFormulario;
	public $descripcion;
	public $idFormEncargado;
	public $idFormTutor;
	public $conec;


	function __construct()
	{
	$this->idTipoFormulario=0;
	$this->descripcion="";
	$this->idFormEncargado=0;
	$this->idFormTutor=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into tipoformulario (idTipoFormulario, descripcion, idFormEncargado, idFormTutor)
		values('$this->idTipoFormulario',
		'$this->descripcion', '$this->idFormEncargado', '$this->idFormTutor')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM tipoformulario ORDER BY descripcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from tipoformulario where idTipoFormulario='$this->idTipoFormulario'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from tipoformulario where idTipoFormulario='$this->idTipoFormulario' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE tipoformulario SET  descripcion='$this->descripcion', idFormEncargado='$this->idFormEncargado', idFormTutor='$this->idFormTutor' where idTipoFormulario='$this->idTipoFormulario'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_indicador.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM tipoformulario ORDER BY descripcion ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>