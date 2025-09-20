<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$Email_U = $_SESSION['Usuario'];
$Contraseña_U = $_POST['Password'];
$Verificar_C = $_POST['Password2'];

if($Contraseña_U=filter_var($Contraseña_U, FILTER_SANITIZE_STRING) AND $Verificar_C=filter_var($Verificar_C, FILTER_SANITIZE_STRING)){
    if($Contraseña_U != $Verificar_C){
        echo "<script>
        alert('Las contraseñas no coinciden');
         window.location.assign('http://localhost/AR_System/index.php')
    </script>";     

    }else{
        $Contraseña_U = password_hash($Contraseña_U, PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios SET contrasena = '$Contraseña_U' WHERE correo = '$Email_U'"; 
        $query=mysqli_query($con,$sql);
        if (!$query) {
            echo "<script>
                alert('Error de Conexion');
                 window.location.assign('http://localhost/AR_System/index.php')
            </script>";
          
        } else {
     
        
            echo "<script>
        alert('Contraseña cambiada con exito');
        window.location.assign('http://localhost/AR_System/index.php')
            </script>";
    }
}
}
    
?>