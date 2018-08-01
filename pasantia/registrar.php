<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Intership</title>
</head>
<body  background="images/144.jpg">
	
 <style type="text/css">
  fieldset {   color: black; 
               font-family: Helvetica; 
                 font-variant: small-caps;

           }

  body{position: absolute; top: 130px; left: 600px; color: black; font-size: x-large}



   input{
   background:url("images/96.jpg");
   }
   .opacity{
   background-color:rgb(255,0,0);
   opacity:0.6; /* Opacidad 60% */
   width:200px;
   height:70px;



}
</style>

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 30pt" ><b>Registro</b></legend>
    <div style="background-color:hsla(0, 100%, 100%, 0.25)">
    <div class="form-group">
      <label style="font-size: 16pt"><b>Ingresar Nombre:</b></label>
      <input type="text" name="realname"  class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 16pt; color: black;"><b>Ingresar Email:</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 16pt; color: black;"><b>Ingresar Password:</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 16pt"><b>Repetir Password:</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>

</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>

</body>
</html>