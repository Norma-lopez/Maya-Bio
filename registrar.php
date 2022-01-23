<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellidos"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtEstado"])
    || empty($_POST["txtMunicipio"]) || empty($_POST["txtColonia"]) || empty($_POST["txtCalle"]) || empty($_POST["txtEmail"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellidos = $_POST["txtApellidos"];
    $telefono = $_POST["txtTelefono"];
    $estado = $_POST["txtEstado"];
    $municipio = $_POST["txtMunicipio"];
    $colonia = $_POST["txtColonia"];
    $calle = $_POST["txtCalle"];
    $email = $_POST["txtEmail"];

    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,apellidos,telefono,estado,municipio,colonia,calle,email) VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellidos,$telefono,$estado,$municipio,$colonia,$calle,$email]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>