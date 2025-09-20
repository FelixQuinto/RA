<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'sistema';
$nombre_archivo = 'RespaldoBD.sql';

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Eliminar la base de datos
$conexion->query("DROP DATABASE IF EXISTS {$base_datos}");

// Crear la nueva base de datos
$conexion->query("CREATE DATABASE {$base_datos}");

// Seleccionar la nueva base de datos
$conexion->select_db($base_datos);

$consultas = file_get_contents($nombre_archivo);
$conexion->multi_query($consultas);

if ($conexion->errno) {
    echo "<script>
            alert('Error al cargar la Base de Datos');
            window.location.assign('http://localhost/AR_System/Control_Sistema.php')
            </script>"; 
            $conexion->error;
} else {
    echo "<script>
            alert('Base de datos cargada con exito');
            window.location.assign('http://localhost/AR_System/Control_Sistema.php')
            </script>";;
}

?>