<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<!-- <link rel="stylesheet" type="text/css" href="estilos/estilos.css"> -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>INTERSHIP</title>
</head>
<body background="img/login/lo">
	<div class="boxlogin">
		<center><h2 style="color: #FCF5F5; ">Login</h2>
		<form action="validar.php" method="post">
			<label>Correo:</label>
			<input type="text" name="mail" required>
			<label>Contraseña: </label>
			<input type="password" name="pass" required>
		<br>
			<input class="btn btn-danger" type="submit" value="Ingresar">
		</form>
	</div>
	<div class="descripcion">
		<h2>Sistema de Control y Seguimiento de Pasantias</h2>
	</div>
	<div class="logo">
		<img src="img/login/ojo5.png" alt="logo">
	</div>
</body>
</html>