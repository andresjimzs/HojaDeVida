<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["nombre"] = $fila["nombre"];
        $salida["empresa"] = $fila["empresa"];
        $salida["telefono"] = $fila["telefono"];
        $salida["email"] = $fila["email"];
        $salida["mensaje"] = $fila["mensaje"];
        
    }

    echo json_encode($salida);
}