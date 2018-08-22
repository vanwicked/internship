<?php 
require("conexion.php");

class mdl_formTutor
{
	public $idFormTutor;
	public $nota;
	public $descripcion;
	public $idCuaderno;
	public $idEmpleado;
	public $idEstudiante;
	public $conec;


	function __construct()
	{
	$this->idFormTutor=0;
	$this->nota=0;
	$this->descripcion="";
	$this->idCuaderno=0;
	$this->idEmpleado=0;
	$this->idEstudiante=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		$sql="insert into formulariotutor (idFormTutor, nota, descripcion,idCuaderno, idEmpleado, idEstudiante)
		values('$this->idFormTutor',
		'$this->nota', '$this->descripcion','$this->idCuaderno','$this->idEmpleado','$this->idEstudiante')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM formulariotutor ORDER BY nota ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from formulariotutor where idFormTutor='$this->idFormTutor'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from formulariotutor where idFormTutor='$this->idFormTutor' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE formulariotutor SET nota='$this->nota',descripcion='$this->descripcion',idCuaderno='$this->idCuaderno',idEmpleado='$this->idEmpleado',idEstudiante='$this->idEstudiante' where idFormTutor='$this->idFormTutor'";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_formTutor.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM formulariotutor ORDER BY nota ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>