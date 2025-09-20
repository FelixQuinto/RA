<?php
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$Email_U = $_POST['Correo'];
$_SESSION['Usuario'] = $Email_U;

$consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'";

$resultado = $con->query($consulta);

if ($resultado->num_rows === 1) {
  $registro = $resultado->fetch_assoc();
    $encriptada = $registro['pregunta'];
} else {
  echo "<script>
          alert('EL CORREO NO ESTA REGISTRADO EN EL SISTEMA');
          window.location.assign('http://localhost/AR_System/index.php')
          </script>";
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

    <title>Recuperar Contraseña</title>
</head>

<body>
<nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#"><img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="60" height="80"></a>
          <div class="btn-group">
          <img src="img/icon.png" type="button" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal2" alt="" width="32" height="60">
          &nbsp;
          &nbsp; 

 <!--------------------- MODAL DE INICIO DE SESION ------------------------>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Iniciar Sesión
            </button>
          </div>
    
        </div>
      </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title " id="exampleModalLabel">Inicio de Sesión</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="form-signin"> 
                    <div class="text-center">
                      
                    <form action="Controller/procesar_inicio_sesion.php" method="POST">
                    
                    <h2 class="h2 mb-4 fw-normal">Ingrese los Datos</h2>
                    </div>
                
                        <div class="mb-3">
                          <label for="Correo" class="form-label">Email</label>
                          <input type="email" class="form-control" name="Correo" aria-describedby="emailHelp" required>
                          <div id="emailHelp" class="form-text">Ej: user@gmail.com</div>
                        </div>
                        <div class="mb-3">
                          <label for="Clave" class="form-label">Contraseñas</label>
                          <input type="password" class="form-control" name="Clave" required>
                        </div>         
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit"  class="btn btn-primary">Ingresar</button>
                </div>
                </form>   
                
                         
              </div>
            </div>
        </div>
      </div>
</div>

 <!--------------------- PREGUNTA DE SEGURIDAD ------------------------>
<?php    ?>  
      <section class="bg-light">
        <form action="Cambiar_Contraseña.php" method="POST">     
          <div class="container col px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                      <div class="mb-3">
                      <p class="text-dark">
                                  <label for="text" class="form-label">Bienvenido/a </label>
                                  <label for="text" class="form-label" name="usuario"><?php echo $Email_U ?></label>
                                  <p><label for="text" class="form-label">Por favor, ingrese la respuesta a tu pregunta de seguridad</label></p>
                                  <input type="text" class="form-control" size="50" maxlength="50" name="respuesta" placeholder="<?php echo $encriptada ?>" required>
                                  <p><p><button type="submit" name="recuperar" class="btn btn-primary">Continuar</button></p></p>
                                  </p>
                        </div>
                </div>
            </div>
        </form>
      </section>
   <?php    ?>     
 <!--------------------- MODAL DE VIDEO DE AYUDA ------------------------>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Recuperacion de Contraseña</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-recuperar.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                                </video>
                                
                            </div>
                            <hr>
                                      
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                          
                              
                      </div>
                    </div>
                </div>
              </div>

      
 <!--------------------- PIE DE PAGINA ------------------------>
      
<div class="container-fluid">
  <footer class="pt-5 my-5 text-muted border-top bg-light">

    <div class="row">
      <div class="col-6">
                          
      <h5>Instituto:</h5>
        <p>UNIVERSIDAD POLITECNICA TERRITORIAL DEL ESTADO ARAGUA
              “FEDERICO BRITO FIGUEROA”
          </p>
      </div>

     <div class="col-3">
      <h5>Autores:</h5>
        <ul class="list-unstyled">
          <li>Br Raizman Anaya</li>
          <li>Br Quintana Felix</li>
        </ul>
      </div>
      
        <div class="col-3">
          <h5>Tutor:</h5>
          <p>Ing. Jackson Perez</p>  
         </div>

      
    </div>

    <div class="row">
      <div class="col-12">
          <h5>Nombre de proyecto:</h5>                
          <p>PLATAFORMA WEB DE COMUNICACIÓN PARA LA ENSEÑANZA DE LA UNIDAD CURRICULAR ARQUITECTURA DEL COMPUTADOR Y REDES USANDO REALIDAD AUMENTADA EN LA UNIVERSIDAD POLITECNICA TERRITORIAL DEL ESTADO ARAGUA “FEDERICO BRITO FIGUEROA”
         </p>
      </div>
    </div>
  </footer>
</div>

  <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>