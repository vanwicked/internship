<?php
require("conexion.php");
class mdl_login{
	private $id;
	public $user;
	public $password;
	public $email;
    public $pasadmin;
    public $idRol;
    public $obj_con;


	function __construct(){
    	$this->id=0;
    	$this->user="";
    	$this->password="";
    	$this->email="";
        $this->pasadmin="";
        $this->idRol=0;

        $this->obj_con=new conexion();
	}

    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }

    public function insertar(){
        $sql="INSERT INTO user (user,password,email) VALUES ('$this->user','$this->password','$this->email');";
        $this->obj_con->sin_retorno($sql);

	}
    public function listar(){
        $sql="select id, user, email, idRol from login ORDER BY id ;";
        return $this->obj_con->con_retorno($sql);
    }
    public function eliminar($v){
        $sql="delete from login WHERE id=$v;";
        $this->obj_con->sin_retorno($sql);
    }
}

?>