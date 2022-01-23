<?php

    include("conexion.php");

    $idControl = $_REQUEST['idControl'];


    $query = "DELETE FROM controlacopio WHERE idControl = '$idControl'";
    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar_control_acopio.php");
    } else {
        echo "No se elimino";
    }

?>