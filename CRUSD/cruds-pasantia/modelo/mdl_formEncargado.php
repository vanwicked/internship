<?php 
require("conexion.php");

class mdl_formEncargado
{
	public $idFormEncargado;
	public $idEncargado;
	public $rubro;
	public $idEstudiante;
	public $facCalidad;
	public $facResponsabilidad;
	public $facOrgTrabajo;
	public $conec;


	function __construct()
	{
	$this->idFormEncargado=0;
	$this->idEncargado=0;
	$this->rubro="";
	$this->idEstudiante=0;
	$this->facCalidad=0;
	$this->facResponsabilidad=0;
	$this->facOrgTrabajo=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		$sql="insert into formularioencargado (idFormEncargado, idEncargado, rubro,idEstudiante, facCalidad, facResponsabilidad, facOrgTrabajo)
		values('$this->idFormEncargado',
		'$this->idEncargado', '$this->rubro','$this->idEstudiante','$this->facCalidad','$this->facResponsabilidad','$this->facOrgTrabajo')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM formularioencargado ORDER BY idEncargado ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from formularioencargado where idFormEncargado='$this->idFormEncargado'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from formularioencargado where idFormEncargado='$this->idFormEncargado' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE formularioencargado SET idEncargado='$this->idEncargado',rubro='$this->rubro',idEstudiante='$this->idEstudiante',facCalidad='$this->facCalidad',facResponsabilidad='$this->facResponsabilidad',facOrgTrabajo='$this->facOrgTrabajo' where idFormEncargado='$this->idFormEncargado'";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_formulario.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM formularioencargado ORDER BY idEncargado ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>