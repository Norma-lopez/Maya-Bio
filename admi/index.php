<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nombre'])) {
    header("Location: ../principal/index.html");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nombre'] = $row['nombre'];
		header("Location: ../principal/index.html");
	} else {
		echo "<script>alert('El correo electrónico o la contraseña son incorrectos.')</script>";
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
	<link href="../css/styles.css" rel="stylesheet" />

	<title>Iniciar Sesión</title>
	

</head>
	<style>
		.logo img {
			padding: 10px; 
			margin: 1px; 
			left: -right;
			width: 100px;

		}
		.container {
			width: 400px;
			min-height: 400px;
			background: #FFF;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0,0,0,.3);
			padding: 40px 30px;
		}

    </style>


<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<div class="logo">
			<a class="navbar-brand" href="../principal/index.html" > <img src="../images/MAYABIO-BN.png" alt="#"></a>
		</div>
	</nav>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Iniciar Sesión</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">¿Aún no tienes cuenta? <a href="register.php">Crear cuenta</a>.</p>
			<p class="salir-text"><a href="../index.html">Salir</a></p>
		</form>
	</div>
</body>
</html>