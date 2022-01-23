<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST["txtNombre"];
    $apellidos = $_POST["txtApellidos"];
    $telefono = $_POST["txtTelefono"];
    $estado = $_POST["txtEstado"];
    $municipio = $_POST["txtMunicipio"];
    $colonia = $_POST["txtColonia"];
    $calle = $_POST["txtCalle"];
    $email = $_POST["txtEmail"];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, apellidos = ?, telefono = ?, estado = ?, municipio = ?, colonia = ?, calle = ?, email = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $telefono, $estado,  $municipio, $colonia, $calle, $email, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>