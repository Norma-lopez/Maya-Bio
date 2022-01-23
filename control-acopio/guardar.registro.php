<?php

    include("conexion.php");

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

    $query = "INSERT INTO controlacopio(nombreOrganizacion,cicloProductivo,nombreProductor,codigo,cantidadEntregado,proyeccionActual,primeraCantidad,segundaCantidad, terceraCantidad,cuartaCantidad, quintaCantidad,totalEntregado,encargado) 
        VALUES('$nombreOrganizacion', '$cicloProductivo', '$nombreProductor', '$codigo', '$cantidadEntregado', '$proyeccionActual', '$primeraCantidad',
               '$segundaCantidad', '$terceraCantidad', '$cuartaCantidad', '$quintaCantidad', '$totalEntregado', '$encargado')";

    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar_control_acopio.php");
    }
    else {
        echo "No se inserto";
    }



?>