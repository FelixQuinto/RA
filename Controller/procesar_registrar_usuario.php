<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

$Nombre_U = $_POST['firstName'];
$Apellido_U = $_POST['lastName'];
$Email_U = $_POST['Correo'];
$Contraseña_U = $_POST['password'];
$Verificar_C = $_POST['password2'];
$Segura_Pregunta = $_POST['pregunta'];
$Segura_Respuesta = $_POST['respuesta'];
$Identidad = $_POST['CI'];

$consulta = "SELECT * FROM usuarios WHERE CI = '$Identidad'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {
    echo "<script>
        alert('El usuario ya esta registrado en el sistema');
         window.location.assign('http://localhost/AR_System/index.php')
    </script>";    
} else {

if($Nombre_U=filter_var($Nombre_U, FILTER_SANITIZE_STRING) AND $Apellido_U=filter_var($Apellido_U, FILTER_SANITIZE_STRING) AND $Email_U=filter_var($Email_U, FILTER_SANITIZE_EMAIL) AND $Contraseña_U=filter_var($Contraseña_U, FILTER_SANITIZE_STRING) AND $Verificar_C=filter_var($Verificar_C, FILTER_SANITIZE_STRING) AND $Segura_Pregunta=filter_var($Segura_Pregunta, FILTER_SANITIZE_STRING) AND $Segura_Respuesta=filter_var($Segura_Respuesta, FILTER_SANITIZE_STRING) AND $Identidad=filter_var($Identidad, FILTER_SANITIZE_STRING)) { 
    if($Contraseña_U != $Verificar_C){
        echo "<script>
        alert('Las contraseñas no coinciden');
         window.location.assign('http://localhost/AR_System/index.php')
    </script>";     

    }else{
        $Contraseña_U = password_hash($Contraseña_U, PASSWORD_DEFAULT);
        $Seguridad_Respuesta = password_hash($Seguridad_Respuesta, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios(ID, nombre, apellido, CI, correo, contrasena, pregunta, respuesta, rol, Puntaje) VALUES ('','$Nombre_U','$Apellido_U', '$Identidad', '$Email_U','$Contraseña_U', '$Segura_Pregunta', '$Seguridad_Respuesta', 'estudiante', '0')"; 
        $query=mysqli_query($con,$sql);
        if (!$query) {
            echo "<script>
                alert('Error de Conexion');
                 window.location.assign('http://localhost/AR_System/index.php')
            </script>";
          
        }else {
            echo "<script>
        alert('Registro Insertado con Exito');
        window.location.assign('http://localhost/AR_System/index.php')
            </script>";
        }
}
}else {
    echo "<script>
        alert('Error en los tipos de Datos');
        window.location.assign('http://localhost/AR_System/index.php')
    </script>";
}
}
?>