<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();
$select = $_POST['envio'];
$Identificador = $_POST['Identity'];
$Permisos = $_POST['Role'];
$Email_U = $_SESSION['email'];

function registrarEventoDB($con, $usuario, $evento, $detalles = "") {
    $usuario = $con->real_escape_string($usuario);
    $evento = $con->real_escape_string($evento);
    $detalles = $con->real_escape_string($detalles);

    $sql = "INSERT INTO bitacora (usuario, evento, detalles) VALUES ('$usuario', '$evento', '$detalles')";

    $con->query($sql);
}

$consulta = "SELECT * FROM usuarios WHERE CI = '$Identificador'";
$sql = $consulta;
            $query = mysqli_query($con, $sql);
            $fila = mysqli_fetch_array($query);
            $name = $fila['nombre'];
            $last_n= $fila['apellido'];

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {

 if($select=="confi"){
        $sql = "UPDATE usuarios SET rol = '$Permisos' WHERE CI = '$Identificador'"; 
        $query=mysqli_query($con,$sql);
        if (!$query) {
            echo "<script>
    alert('Un error impide continuar con el proceso');
    window.location.assign('http://localhost/AR_System/Control_Sistema.php')
    </script>";
            
    } else {

        registrarEventoDB($con, $Email_U,"Cambiar Permisos", "Ha modificado los permisos de [$name $last_n] a [$Permisos]");
        echo "<script>
            alert('Los permisos han sido modificados');
            window.location.assign('http://localhost/AR_System/Control_Sistema.php')
            </script>";
    }

    }
} else {

    echo "<script>
        alert('El usuario ingresado no existe en el registro');
        window.location.assign('http://localhost/AR_System/Control_Sistema.php')
        </script>";
                
}
?>
