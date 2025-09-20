<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$select = $_POST['Valores'];
$Identificador = $_POST['Question'];
$Solucion = $_POST['Solution'];
$Usser = $_SESSION['email'];

function registrarEventoDB($con, $usuario, $evento, $detalles = "") {
    $usuario = $con->real_escape_string($usuario);
    $evento = $con->real_escape_string($evento);
    $detalles = $con->real_escape_string($detalles);
  
    $sql = "INSERT INTO bitacora (usuario, evento, detalles) VALUES ('$usuario', '$evento', '$detalles')";
  
    $con->query($sql);
  }

$consulta = "SELECT * FROM encuesta WHERE ID = '$select'";

$resultado = $con->query($consulta);

if ($resultado->num_rows != 1) {
  $sql = "INSERT INTO encuesta(ID, Pregunta, Respuesta) VALUES ('$select','$Identificador','$Solucion')"; 
  $query=mysqli_query($con,$sql);
  if (!$query) {
      echo "<script>
          alert('Error de Conexion');
           window.location.assign('http://localhost/AR_System/Cambiar_Cuestionario.php')
      </script>";
    
  }else {
      echo "<script>
  alert('Los cambios han sido efectuados');
  window.location.assign('http://localhost/AR_System/Cambiar_Cuestionario.php')
      </script>";
  }

}

if ($resultado->num_rows === 1) {


    $sql = "UPDATE encuesta SET Pregunta = '$Identificador', Respuesta = '$Solucion' WHERE ID = '$select'"; 
    $query=mysqli_query($con,$sql);
    if (!$query) {
        echo "<script>
        alert('La modificacion no ha podido realizarse');
        window.location.assign('http://localhost/AR_System/Cambiar_Cuestionario.php')
        </script>";
    } else {
        registrarEventoDB($con, $Usser, "Cambio de Pregunta", "Cambio la pregunta $select y su respuesta correspondiente");
      echo "<script>
            alert('Los cambios han sido efectuados');
          window.location.assign('http://localhost/AR_System/Cambiar_Cuestionario.php')
        </script>";
    }
}
?>