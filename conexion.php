<?php
// Configuración para InfinityFree (ajusta con tus datos reales)
$host = "localhost";
$usuario = "root"; // reemplaza con tu nombre de usuario real
$contrasena = ""; // reemplaza con tu contraseña real
$base_datos = "cafeteria_capibara"; // prefijo obligatorio en InfinityFree

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Opcional: para que acepte acentos y caracteres especiales
mysqli_set_charset($conexion, "utf8");
?>

