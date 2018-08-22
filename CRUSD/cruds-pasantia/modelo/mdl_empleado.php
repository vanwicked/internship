<?php 
require("conexion.php");

class mdl_empleado
{
	public $idEmpleado;
	public $idPersona;
	public $activo;
	public $conec;


	function __construct()
	{
	$this->idEmpleado=0;
	$this->idPersona=0;
	$this->activo=0;
	$this->conec=new conexion();
	}

	public function set($atributo, $valor)
	{
	$this->$atributo=$valor;
	}
	public function insertar()
	{
		
		$sql="insert into empleado (idEmpleado, idPersona, activo)
		values('$this->idEmpleado', '$this->idPersona', '$this->activo')";
		$this->conec->sin_retorno($sql);
	}

	public function listar()
	{
			$sql="SELECT * FROM empleado ORDER BY idPersona ASC";
			return $this->conec->con_retorno($sql);
	}

	public function eliminar()
	{
		$sql="delete from empleado where idEmpleado='$this->idEmpleado'";
		$this->conec->sin_retorno($sql);

	}

	public function listar_dato()
	{
			$sql="select * from empleado where idEmpleado='$this->idEmpleado' ";
			$resp=$this->conec->con_retorno($sql);
			return $resp;
	}

	public function modificar()
	{
		 $sql="UPDATE empleado SET idPersona='$this->idPersona' , activo='$this->activo' where idEmpleado='$this->idEmpleado'  ";
		 $this->conec->sin_retorno($sql);
		  ?>
		<script type="text/javascript">
			window.location.href("../vista/vst_empleado.php");

		</script>
	 <?php
	}
public function get_combo_modalidad(){
	$sql="SELECT * FROM empleado ORDER BY idPersona ASC";
					
			return $this->conec->con_retorno($sql);
	}
}

?>