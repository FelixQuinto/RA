<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$Email_U = $_POST['Correo'];
$contraseña = $_POST['Clave'];
function registrarEventoDB($con, $usuario, $evento, $detalles = "") {
    $usuario = $con->real_escape_string($usuario);
    $evento = $con->real_escape_string($evento);
    $detalles = $con->real_escape_string($detalles);

    $sql = "INSERT INTO bitacora (usuario, evento, detalles) VALUES ('$usuario', '$evento', '$detalles')";

    $con->query($sql);
}

$consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {
    $registro = $resultado->fetch_assoc();
    $encriptada = $registro['contrasena'];

    if (password_verify($contraseña, $encriptada)) {
        $sql = $consulta;
            $query = mysqli_query($con, $sql);
            $fila = mysqli_fetch_array($query);
            $rol = $fila['rol'];

            $_SESSION['roles'] = $rol;
            $_SESSION['email'] = $Email_U;
            $_SESSION['puntaje'] = 0;

            registrarEventoDB($con, $Email_U, "Inicio Sesión", 'El usuario inicio sesión');
        
        echo "<script>
            window.location.assign('http://localhost/AR_System/contenido.php')
            </script>";        
    }else{

         echo "<script>
            alert('CONTRASEÑA O USUARIO ERRONEO');
            window.location.assign('http://localhost/AR_System/index.php')
            </script>";

    }
}