<?php 
require("conexion.php");
class mdlusuario
{
	private $id_persona;
	public $nombre;
	public $papellido;
	public $sapellido;
	public $ci;
	public $telefono;
	public $direccion;
	public $email;
	public $obj_con;
	public $rol;
	function __construct()
	{
		
	$this->id_persona=0;
	$this->nombre="";
	$this->papellido="";
	$this->sapellido="";
	$this->ci=0;
	$this->telefono=0;
	$this->direccion="";
	$this->email="";
	$this->rol=0;

	$this->obj_con=new conexion();
	}

	public function set($atributo, $valor)
	{
		$this->$atributo=$valor;

	}

	public function insertar_usuario()
	{
		//echo $this->nombre;
		$sql="insert into persona(nombre,papellido,sapellido,ci,telefono,direccion, email) values('$this->nombre','$this->papellido','$this->sapellido', '$this->ci','$this->telefono','$this->direccion', '$this->email');";
		$this->obj_con->sin_retorno($sql);
		//print_r($sql);
	}
	public function listar()
	{
			$sql="select * from persona;";
	return $this->obj_con->con_retorno($sql);
	}

	public function buscar(){
		$sql="select * from persona where id_persona='$this->id_persona';";
		return $this->obj_con->con_retorno($sql);
	}

	public function modificar(){
		$sql="UPDATE persona SET nombre='$this->nombre', papellido='$this->papellido', sapellido='$this->sapellido', ci='$this->ci',telefono='$this->telefono',direccion='$this->direccion', rol='$this->rol' where id_persona='$this->id_persona';";
		//print_r($sql);
		return $this->obj_con->con_retorno($sql);
	}
	public function eliminar($v){
	    $sql="delete from persona WHERE id_persona=$v;";
	    $this->obj_con->sin_retorno($sql);
    }

}
?>