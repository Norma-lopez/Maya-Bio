<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/productos.css">
    <title>Producto eliminado</title>

</head>
<body>
    <h1>Producto eliminado</h1>
    <hr>

    <p><a href="cosecha.php">Registro de Cosechas</a> &raquo; Eliminado:</p>

    <?php
        if (isset($_GET["idCosecha"])) {
            $idCosecha=$_GET["idCosecha"];
            
            require_once("conexion.php");

            $eliminar=mysqli_query($conexion, "DELETE FROM cosecha WHERE idCosecha='$idCosecha' ");
            
            
        }
        if ($resultado === TRUE) {
            header('Location: cosecha.php?mensaje=eliminado');
        } else {
            header('Location: cosecha.php?mensaje=error');
        }
    ?>



</body>
</html>