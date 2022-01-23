<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/productos.css">
    <title>Actividad eliminado</title>

</head>
<body>
    <h1>Actividad eliminado</h1>
    <hr>

    <p><a href="mostrar_actividades.php">Registro</a> &raquo; Eliminado:</p>

    <?php
        if (isset($_GET["idActividades"])) {
            $idActividades=$_GET["idActividades"];
            
            require_once("conexion-registro.php");

            $eliminar=mysqli_query($conexion, "DELETE FROM registroactividades WHERE idActividades='$idActividades' ");
            
            
        }
        if ($resultado === TRUE) {
            header('Location: mostrar_actividades.php?mensaje=eliminado');
        } else {
            header('Location: mostrar_actividades.php?mensaje=error');
        }
    ?>



</body>
</html>