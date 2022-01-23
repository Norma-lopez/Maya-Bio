<?php

    include("conexion.php");

    $idControl = $_REQUEST['idControl'];

    $nombreOrganizacion = $_POST['nombreOrganizacion'];
    $cicloProductivo = $_POST['cicloProductivo'];
    $nombreProductor = $_POST['nombreProductor'];
    $codigo = $_POST['codigo'];
    $cantidadEntregado = $_POST['cantidadEntregado'];
    $proyeccionActual = $_POST['proyeccionActual'];
    $primeraCantidad = $_POST['primeraCantidad'];
    $segundaCantidad = $_POST['segundaCantidad'];
    $terceraCantidad = $_POST['terceraCantidad'];
    $cuartaCantidad = $_POST['cuartaCantidad'];
    $quintaCantidad = $_POST['quintaCantidad'];
    $totalEntregado = $_POST['totalEntregado'];
    $encargado = $_POST['encargado'];

    $query = "UPDATE controlacopio SET nombreOrganizacion='$nombreOrganizacion', cicloProductivo='$cicloProductivo', nombreProductor='$nombreProductor', codigo='$codigo',
    cantidadEntregado='$cantidadEntregado', proyeccionActual='$proyeccionActual', primeraCantidad='$primeraCantidad', segundaCantidad='$segundaCantidad', terceraCantidad='$terceraCantidad',
    cuartaCantidad='$cuartaCantidad', quintaCantidad='$quintaCantidad', totalEntregado='$totalEntregado', encargado='$encargado' 
        WHERE idControl = '$idControl'";

    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar_control_acopio.php");
    } else {
        echo "No se modifico";
    }

?>