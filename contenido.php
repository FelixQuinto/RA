<?php //require_once('conexion.php') 
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$_SESSION['roles'];
$Email_U = $_SESSION['email'];

if($_SESSION['roles'] === "admin" || $_SESSION['roles'] === "estudiante" || $_SESSION['roles'] == "editor"){ 

} else {

  $consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'";
  $resultado = $con->query($consulta);

  if ($resultado->num_rows === 1) {

} else {
  echo "<script>
          alert('DEBES INICIAR SESION PARA VER EL CONTENIDO');
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
   
    <title>Pagina Principal</title>

    
</head>

<body>
<nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">

          <a class="navbar-brand fw-bold" href="contenido.php">Inicio</a>  

          <div class="btn-group"> 
          
          <img src="img/icon.png" type="button" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal2" alt="" width="32" height="60">
          &nbsp;
          &nbsp;     
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          </div>
    
          <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
             
 <!--------------------- MENU DE NAVEGACION ------------------------>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acerca_RA.php">Acerca de la Realidad Aumentada</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="hardware.php">Hardware</a>
              </li>            

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Cuestionario.php">Cuestionario</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="perfil_usuario.php">Usuarios</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="procesar_Cerrar_Sesion.php">Cerrar Sesión</a>
              </li>
             
            </ul>

            

          </div>
          
        </div>
        
      </nav>



 <!--------------------- PORTADA DE LA PAGINA ------------------------>
 

       <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="ar/realidad-aumentada-que-es1.png" alt="" width="100%" height="80%">
    
            <div class="container">
              <div class="carousel-caption text-end">
                <br>
              <h1>Aprende sobre los componentes del computador</h1>
              <p>Aprende y proyecta los modelos animados de los componentes del computador...</p>

              <!--llamado al modal del Hardware-->
              <button type="button" class="btn btn-primary "><a href="hardware.php" class="choose-lang text-white text-decoration-none">Ver más</a></button>

              </div>
            </div>

          </div>
          <div class="carousel-item">
            <img src="ar/AR3.2.PNG" alt="" width="100%" height="80%">
    
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 >Conoce de la Realidad Aumentada</h1>
                <p> Y sus variantes con: Marcadores, geolocalizadas, sin marcadores, holografica...</p>
                <!--llamado al Modal del Software-->
                <button type="button" class="btn btn-primary "><a href="acerca_RA.php" class="choose-lang text-white text-decoration-none"> Ver más</a></button>


            </button>
              </div>
            </div>

          </div>
          <div class="carousel-item">
            <img src="ar/AR6.2.png" alt="" width="100%" height="80%">
    
    
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Accede al Cuestionario</h1>
                <p>Y pon a prueba tus conocimientos en el hardware...</p>
               <!--llamado al modal de cuestionario-->
               <button type="button" class="btn btn-primary "><a href="Cuestionario.php" class="choose-lang text-white text-decoration-none"> Ver más</a></button>


            </button>
              </div>
            </div>

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

   <!--------------- modal de ayuda-----------------------> 

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Página Principal</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-contenido.mp4" type="video/mp4">

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