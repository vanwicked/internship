<?php

require("../modelo/mdl_login.php");

class ctrl_login{
public $obj_mod;

public function __construct(){
	$this->obj_mod=new mdl_login();
}
    
public function insertar($p){
    $resp=$this->obj_mod->buscar_correo($p['nick']);
	$row=mysqli_fetch_assoc($resp);
		$this->obj_mod->set("usuario" ,$p['nick']);
        $this->obj_mod->set("clave" ,md5($p['1clave']));
        $this->obj_mod->set("persona_id_persona" ,$row['id_persona']);
	    $this->obj_mod->insertar();
}

public function validar_ingreso($p){
    $usuario=$p['nick'];
    $clave=md5($p['clave']);
   $resp=$this->obj_mod->validar($usuario,$clave);
   $row=mysqli_fetch_assoc($resp);
   if($row['usuario'] && $row['clave']){
       echo "<script> window.location.href='../admin/docs/index.php';</script>";
   }
   else {
       echo "<script>alert('usuario o clave incorrecta')</script>";
       echo "<script> window.location.href='../admin/docs/page-login.html';</script>";
   }
}
}
                            