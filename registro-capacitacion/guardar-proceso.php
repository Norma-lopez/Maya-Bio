<?php

    include("conexion.php");

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

    $query = "INSERT INTO registrocapacitacion(logo,nmbreOrganizacion,tema,fecha,lugar,nmbreInstructor,nombre,funcion,contacto,representateSCI,instructor) VALUES('$logo','$nmbreOrganizacion','$tema',' $fecha','$lugar','$nmbreInstructor','$nombre',
    '$funcion','$contacto','$representateSCI','$instructor')";

    $resultado = $conexion->query($query);

    if ($resultado) {
        header("Location: mostrar.php");
    }
    else {
        echo "No se inserto";
    }



?>