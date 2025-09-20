<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();
$_SESSION['puntaje'];
$Email_U = $_SESSION['email'];
$Puntuacion = $_SESSION['puntaje'];

$consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {

        $sql = "UPDATE usuarios SET Puntaje = '$Puntuacion' WHERE correo = '$Email_U'";
        $query=mysqli_query($con,$sql);
        if (!$query) {
            echo "<script>
                alert('Error de Conexion');
                 window.location.assign('http://localhost/AR_System/respuestas_cuestionario.php')
            </script>";
          
        } else {
     
        
            echo "<script>
        alert('Puntuacion guardada con exito');
        window.location.assign('http://localhost/AR_System/perfil_usuario.php')
            </script>";
    }
}
    
?>