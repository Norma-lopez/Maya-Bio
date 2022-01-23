<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Parcelas</title>

    <link rel="stylesheet" href="/productos/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1>Registro de parcela eliminado</h1>

    <p><a href="parcelas.php">Parcelas</a> &raquo; Eliminado:</p>

    <?php
        if (isset($_GET["idParcelas"])) {
            $idParcelas=$_GET["idParcelas"];

            require_once("conexion.php");
            $eliminar=mysqli_query($conexion, "DELETE FROM parcelas WHERE idParcelas='$idParcelas' ");

            echo"<h2 class='eliminado'>Parcelas eliminado con éxito</h2>";
        }
    ?>

</body>
</html>