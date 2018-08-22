<?php 
require("conexion.php");

class mdl_formulario
{
	public $idFormulario;
	public $descripcion;
	public $fecha;
	public $idCarrera;
	public $idTipoFormulario;
	public $conec;


	function __construct()
	{
	$this->idFormulario=0;
	$this->descripcion="";
	$this->fecha="";
	$this->idCarrera=0;
	$this->idTipoFormulario=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into formulario (idFormulario, descripcion, fecha, idCarrera, idTipoFormulario)
		values('$this->idFormulario',
		'$this->descripcion', '$this->fecha', '$this->idCarrera', '$this->idTipoFormulario')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM formulario ORDER BY descripcion ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from formulario where idFormulario='$this->idFormulario'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from formulario where idFormulario='$this->idFormulario' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE formulario SET descripcion='$this->descripcion' , fecha='$this->fecha', idCarrera='$this->idCarrera', idTipoFormulario='$this->idTipoFormulario'  where idFormulario='$this->idFormulario'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_formulario.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM formulario ORDER BY descripcion ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>