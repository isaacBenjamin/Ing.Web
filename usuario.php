<?php

include_once 'config.php';

function login($nombre, $contrasena)
{
    global $conexion;

    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $contrasena = mysqli_real_escape_string($conexion, $contrasena);

    $query = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contrasena='$contrasena'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        return $usuario;
    } else {
        return false;
    }
}
function esAdmin($usuario)
{
    return $usuario["tipo_usuario"] == "admin";
}


?>
