<?php 

include 'config.php';


error_reporting(0);

session_start();

if (isset($_SESSION['nombre'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (nombre, apellidos, email, password)
					VALUES ('$nombre', '$apellidos', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registro de usuario completado.')</script>";
				$nombre = "";
				$apellidos = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Algo salió mal.')</script>";
			}
		} else {
			echo "<script>alert('Woops! El Email ya existe.')</script>";
		}
		
	} else {
		echo "<script>alert('Contraseña no coincidente.')</script>";
	}
}

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles.css">

	<title>Formulario de registro</title>
	<link href="../css/styles.css" rel="stylesheet" />
	
</head>
	<style>
		.logo img {
			padding: 9px; 
			margin: 1px; 
			left: -right;
			width: 90px;

		}
		.sb-topnav {
			padding-left: 0;
			height: 55px;
			z-index: 1039;
		}
		.container {
			width: 500px;
			min-height: 500px;
			background: #FFF;
			border-radius: 9px;
			box-shadow: 0 0 5px rgba(0,0,0,.3);
			padding: 10px 20px;
			
		}
		.login-email form{
			height: 67px;
		}
		

    </style>


<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<div class="logo">
			<a class="navbar-brand" href="../principal/index.html" > <img src="../images/MAYABIO-BN.png" alt="#"></a>
		</div>
		<br><br><br><br>
		<!-- Navbar-->
	</nav> 
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 700;">Crear cuenta</p>
			<div class="input-group">
				<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $nombre; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required>
			</div>

			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registrar</button>
			</div>
			<p class="login-register-text">¿Tiene una cuenta? <a href="index.php">Ingresa aquí</a>.</p>
		</form>
	</div>
</body>
</html>