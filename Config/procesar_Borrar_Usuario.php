<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();
$select = $_POST['envio'];
$Identificador = $_POST['Identity'];

$consulta = "SELECT * FROM usuarios WHERE CI = '$Identificador'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {

    if($select=="delete"){
        $sql = "DELETE FROM usuarios WHERE CI = '$Identificador'";

        $query=mysqli_query($con,$sql);
        if (!$query) {

            echo "<script>
        alert('Un error impide continuar con el proceso');
        window.location.assign('http://localhost/AR_System/Control_Sistema.php')
        </script>";
                    
    }else{

        echo "<script>
        alert('El usuario ha sido eliminado del sistema');
        window.location.assign('http://localhost/AR_System/Control_Sistema.php')
        </script>";

    }

    } 
} else {
    echo "<script>
        alert('El usuario no existe dentro del sistema');
        window.location.assign('http://localhost/AR_System/Control_Sistema.php')
        </script>";
}
?>
