<?php 
require("conexion.php");

class mdl_persona
{
	public $idPersona;
	public $dni;
	public $nombre;
	public $primerAp;
	public $segundoAp;
	public $direccion;
	public $conec;


	function __construct()
	{
	$this->idPersona=0;
	$this->dni="";
	$this->nombre="";
	$this->primerAp="";
	$this->segundoAp="";
	$this->direccion="";
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into persona (idPersona, dni, nombre, primerAp, segundoAp, direccion)
		values('$this->idPersona',
		'$this->dni', '$this->nombre', '$this->primerAp', '$this->segundoAp', '$this->direccion')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM persona ORDER BY dni ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from persona where idPersona='$this->idPersona'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from persona where idPersona='$this->idPersona' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE persona SET dni='$this->dni' , nombre='$this->nombre', primerAp='$this->primerAp', segundoAp='$this->segundoAp', direccion='$this->direccion'  where idPersona='$this->idPersona'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_persona.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM persona ORDER BY dni ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>