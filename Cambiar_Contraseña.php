<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$Email_U = $_SESSION['Usuario'];
$Respuesta = $_POST['respuesta'];

$consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {
  $registro = $resultado->fetch_assoc();
    $encriptada = $registro['respuesta'];
  
    if ($Respuesta === $encriptada) {

    }else{

    echo "<script>
            alert('Respuesta Incorrecta');
            window.location.assign('http://localhost/AR_System/index.php')
            </script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modificar Contraseña</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
           <div class="container-fluid">
    <a class="navbar-brand fw-bold"><img src="img/Logo-UPTA blanco.png" class="d-block mx-lg-auto img-fluid" alt="imagen-principal" width="100" height="80" href='index.php'>
              </div>
      </nav>
 <!--------------------- MODIFICACION DE CONTRASEÑA ------------------------>
      <form action="Config/Procesar_Mod_Clave.php" method="POST">
      <section class="bg-light">
    <div class="container col px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="mb-3">
              <p class="text-dark">
                          <label for="text" class="form-label">Bienvenido/a </label>
                          <label for="text" class="form-label" name="usuario"><?php echo $Email_U ?></label>
                          <p><label for="text" class="form-label">Por favor, ingrese la nueva contraseña: </p>
                          <input type="text" class="form-control" size="50" maxlength="50" name="Password" required>
                          <p><label for="text" class="form-label">Por favor, ingrese la nueva contraseña nuevamente para verificar: </p>
                          <input type="text" class="form-control" size="50" maxlength="50" name="Password2" required>
                          <p><p><button type="submit" name="recuperar" class="btn btn-primary" name="forget">Continuar</button></p></p>
                          </p>
                </div>
        </div>
    </div>
      </section>
      </form>
      
    
    </body>
</html>