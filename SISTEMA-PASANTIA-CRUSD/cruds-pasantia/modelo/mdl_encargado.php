<?php 
require("conexion.php");

class mdl_encargado
{
	public $idEncargado;
	public $telefono;
	public $cargo;
	public $idPersona;
	public $idInstitucion;
	public $conec;


	function __construct()
	{
	$this->idEncargado=0;
	$this->telefono=0;
	$this->cargo="";
	$this->idPersona=0;
	$this->idInstitucion=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into encargado (idEncargado, telefono, cargo, idPersona, idInstitucion)
		values('$this->idEncargado',
		'$this->telefono','$this->cargo', '$this->idPersona', '$this->idInstitucion')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM encargado ORDER BY telefono ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from encargado where idEncargado='$this->idEncargado'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from encargado where idEncargado='$this->idEncargado' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE encargado SET telefono='$this->telefono' , cargo='$this->cargo', idPersona='$this->idPersona', idInstitucion='$this->idInstitucion' where idEncargado='$this->idEncargado'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_encargado.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM encargado ORDER BY telefono ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>