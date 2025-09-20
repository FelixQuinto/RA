<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'sistema';
$nombre_archivo = 'RespaldoBD.sql';

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    echo "<script>
            alert('Error al exportar la Base de Datos');
            window.location.assign('http://localhost/AR_System/Control_Sistema.php')
            </script>";
}

$archivo = fopen($nombre_archivo, 'w');

// Obtener todas las tablas
$resultado = $conexion->query("SHOW TABLES");
while ($fila = $resultado->fetch_row()) {
    $tabla = $fila[0];

    // Obtener la estructura de la tabla
    $resultado2 = $conexion->query("SHOW CREATE TABLE {$tabla}");
    $fila2 = $resultado2->fetch_row();
    fwrite($archivo, "\n\n" . $fila2[1] . ";\n\n");

    // Obtener los datos de la tabla
    $resultado2 = $conexion->query("SELECT * FROM {$tabla}");
    while ($fila2 = $resultado2->fetch_row()) {
        $valores = array_map(function ($valor) use ($conexion) {
            return $valor === null ? 'NULL' : "'" . $conexion->real_escape_string($valor) . "'";
        }, $fila2);
        fwrite($archivo, "INSERT INTO {$tabla} VALUES (" . implode(',', $valores) . ");\n");
    }
}

fclose($archivo);
$conexion->close();

        echo "<script>
            alert('Respaldo de la Base de Datos guardada con exito');
            window.location.assign('http://localhost/AR_System/Control_Sistema.php')
            </script>";
?>