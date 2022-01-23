<?php

    include("conexion.php");

    $idRegistro = $_REQUEST['idRegistro'];

    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    $nmbreOrganizacion = $_POST['nmbreOrganizacion'];
    $tema = $_POST['tema'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];
    $nmbreInstructor = $_POST['nmbreInstructor'];
    $nombre = $_POST['nombre'];
    $funcion = $_POST['funcion'];
    $contacto = $_POST['contacto'];
    $representateSCI = $_POST['representateSCI'];
    $instructor = $_POST['instructor'];

    $query = "UPDATE registrocapacitacion SET logo='$logo', nmbreOrganizacion='$nmbreOrganizacion', tema='$tema', fecha='$fecha', 
    lugar='$lugar', nmbreInstructor='$nmbreInstructor', nombre='$nombre', funcion='$funcion', contacto='$contacto', representateSCI='$representateSCI', 
    instructor='$instructor' WHERE idRegistro = '$idRegistro'";
    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar.php");
    } else {
        echo "No se modifico";
    }

?>