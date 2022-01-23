<?php

    include("conexion.php");

    $idRegistro = $_REQUEST['idRegistro'];


    $query = "DELETE FROM registrocapacitacion WHERE idRegistro = '$idRegistro'";
    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar.php");
    } else {
        echo "No se elimino";
    }

?>