<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
    $stmt = $conexion->prepare("INSERT INTO usuarios(nombre, empresa, telefono, email, mensaje)VALUES(:nombre, :empresa, :telefono, :email, :mensaje)");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':empresa'    => $_POST["empresa"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':mensaje'    => $_POST["mensaje"]
            // ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $stmt = $conexion->prepare("UPDATE usuarios SET nombre=:nombre, empresa=:empresa, telefono=:telefono, email=:email, mensaje=:mensaje WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':empresa'    => $_POST["empresa"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':mensaje'    => $_POST["mensaje"],
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}