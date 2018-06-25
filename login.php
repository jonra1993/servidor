<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Registro WAMP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Ingreso 2</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Nombre de usuario</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Aún no eres miembro? <a href="register.php">Registrate</a>
		</p>
	</form>


</body>
</html>