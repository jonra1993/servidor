
<?php 
	session_start(); 

	//https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database
	
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Página principal</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p> <strong><?php echo $_SESSION['username']; ?></strong>Te amo !! :)</p>
			<img src="images/a1.jpg" alt="chip" width="400" height="200">
			<p> <a href="index.php?logout='1'" style="color: red;">Salir</a> </p>
		<?php endif ?>

		
	</div>
		
</body>
</html>