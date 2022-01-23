<?php 

session_start();

if (!isset($_SESSION['nombre'])) {
    header("Location: ");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Bienvenidos</title>
</head>
<body>

    <style>
        h1 {
            font-family: Verdana, sans-serif;
            font-size: 17px;
            margin: 0;
            height: 44px;
            text-align: right;
        }

        a {
            font-family:Verdana, sans-serif;
            text-align: right;
            font-size: 17px;
            margin: 0;
            height: 44px;
        }
    </style>
    <?php echo "<h1>Bienvenidos " . $_SESSION['nombre']. "</h1>"; ?>
    <a  href="logout.php">Cerrar sesión</a>

    <form action="registrar.php" method="post" class="form-register">
                <h2 class="form__titulo"> <strong>Registro</strong></h2>
                <div class="contenedor-inputs">
                    <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
                    <input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required>
                    <input type="text" name="telefono" placeholder="Teléfono" class="input-48" required> 
                    <input type="email" name="email" placeholder="Email" class="input-100" required>
                    <input type="text" name="direccion" placeholder="Dirección" class="input-100" required>
                    <input type="text" name="colonia" placeholder="Colonia" class="input-100" required>
                    <input type="text" name="num exterior" placeholder="Num Exterior" class="input-48" required>
                    <input type="text" name="num interior" placeholder="Num Interior" class="input-48" required>
                    
                    <p>Estado: </p><select class="select-css">
                        <option>Seleccione una opción</option>
                        <option>Oaxaca</option>
                        <option>Puebla</option>
                        <option>Querétaro</option>
                        <option>Estado de México</option>
                        <option>Sinaloa</option>
                
                    </select>
                    <input type="submit" value="Registrar" class="btn-enviar">
                    <p class="form__link"> <br> ¿Ya tienes una cuenta? <a href="#">Ingresa aquí</a></p>
                </div>
        </form>


</body>
</html>