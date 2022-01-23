<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/productos.css">
    <title>Solicitud eliminado</title>

</head>
<body>
    <h1>Solicitud eliminado</h1>
    <hr>

    <p><a href="solicitud.php">Solicitud</a> &raquo; Eliminado:</p>

    <?php
        if (isset($_GET["idSolicitud"])) {
            $idSolicitud=$_GET["idSolicitud"];
            
            require_once("conexion.solicitud.php");

            $eliminar=mysqli_query($conexion, "DELETE FROM solicitud WHERE idSolicitud='$idSolicitud' ");
            
            echo "<h2 class='eliminado'>Solicitud eliminado con éxito</h2>";
        }
    ?>
</body>
</html>