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

    <p><a href="productos.php">Catálogo</a> &raquo; Eliminado:</p>

    <?php
        if (isset($_GET["idProducto"])) {
            $idProducto=$_GET["idProducto"];
            
            require_once("conexion.php");

            $eliminar=mysqli_query($conexion, "DELETE FROM productos WHERE idProducto='$idProducto' ");
            
            
        }
        if ($resultado === TRUE) {
            header('Location: productos.php?mensaje=eliminado');
        } else {
            header('Location: productos.php?mensaje=error');
        }
    ?>



</body>
</html>