<?php
    $con = mysqli_connect("localhost", "root", "", "sistema",3306);
    if ($con->connect_error) {
       echo "<script>
                    alert('Error de Conexion');
            </script>";
            
    }else {echo "<script>
                    alert('Conexion Establecida');
            </script>";
        header('Location: http://localhost/procesar_inicio_sesion.php/');
        return $con;        
    }
?>

