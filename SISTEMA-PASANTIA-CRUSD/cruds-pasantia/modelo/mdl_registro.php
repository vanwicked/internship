<?php 
require("conexion.php");

class mdl_registro
{
	public $idRegistro;
	public $cargo;
	public $idEmpleado;
	public $idPersona;
	public $conec;


	function __construct()
	{
	$this->idRegistro=0;
	$this->cargo="";
	$this->idEmpleado=0;
	$this->idPersona=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into registro (idRegistro, cargo, idEmpleado, idPersona)
		values('$this->idRegistro',
		'$this->cargo', '$this->idEmpleado', '$this->idPersona')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM registro ORDER BY cargo ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from registro where idRegistro='$this->idRegistro'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from registro where idRegistro='$this->idRegistro' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE registro SET cargo='$this->cargo' , idEmpleado='$this->idEmpleado', idPersona='$this->idPersona' where idRegistro='$this->idRegistro'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_registro.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM registro ORDER BY cargo ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>