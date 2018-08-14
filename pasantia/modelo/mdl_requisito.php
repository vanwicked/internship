<?php
require("conexion.php");
class mdl_requisito
{
    private $id_requisito;
    public $nombre;
    public $obj_con;
    function __construct()
    {
        $this->id_requisito=0;
        $this->nombre="";
        $this->obj_con=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;

    }

    public function insertar_requisito()
    {
        $sql="insert into requisito_plantilla (nombre) value ('$this->nombre');";
        $this->obj_con->sin_retorno($sql);
    }
    public function  listar_requisito(){
        $sql="select * from requisito_plantilla";
        return $this->obj_con->con_retorno($sql);
    }
}