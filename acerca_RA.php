<?php //require_once('conexion.php') 

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
   
    <title>Acerca de la Realidad Aumentada</title>

    
</head>

<body>
<nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="contenido.php">Inicio</a>
          <div class="btn-group"> 
          
          <img src="img/icon.png" type="button"  class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModalayuda" alt="" width="32" height="60">
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
      
            

 <!--------------------- CONTENIDO DE LA PAGINA ------------------------>

      <section class="bg-light">
        <div class="container p-3">
          
             <div class="row">
                 <div class="col-md-12 text-center">
                     <h1 class="fw-bold" >Acerca de la Realidad Aumentada</h1>
                     <hr>
                 </div>     
             </div>        
           </section>

           <div class="album py-5 bg-light" id="software">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">                              
 <!--------------------- Tarjeta Realidad Aumentada ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/realidad-aumentada-smartphone.jpg" class="rounded mx-auto d-block img-fluid p-1" width="180" height="180" alt="...">
    
                <div class="card-body">
                  <h5>¿Qué es la Realidad Aumentada?</h5>
                  <p class="card-text">La Realidad Aumentada es un tipo de tecnología que nos permite añadir capas de información visual sobre el mundo real que nos rodea...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Ver más
                    </button>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- Modal de Realidad Aumentada ------------------------>
             <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header bg-primary text-white">
                    <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
                    <h2 class="modal-title fw-bold" id="exampleModalLabel1">
                       Realidad Aumentada  </h2>
                     
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 py-5">
                          <img src="img/Ejemplos de realidad aumentada para la educación-35.webp" class="rounded img-fluid p-4" alt="">
                        </div>
                        <div class="col-md-6">
                          <h3 class="fw-bold text-center">¿Qué es?</h3>
                          <br>
                          <p>La Realidad Aumentada es un tipo de tecnología que nos permite añadir capas de información visual sobre el mundo real que nos rodea. Esto nos ayuda a generar experiencias que aportan un conocimiento relevante sobre nuestro entorno y que nos permiten recibir esa información en tiempo real. Mediante la realidad aumentada el mundo virtual se entremezcla con el mundo real, de manera contextualizada, y siempre con el objetivo de comprender mejor todo lo que nos rodea.</p>
                        </div>
                        
                      </div>
                    </div>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- Tarjeta de Tipos de Realidad Aumentada ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/futuro_realidad_aumentada_empresas-1.jpg" class="rounded mx-auto d-block img-fluid p-1" width="180" height="180"  alt="...">
    
                <div class="card-body">
                  <h5>Tipos de Realidad Aumentada</h5>
                  <p class="card-text">El tipo de Realidad Aumentada suele depender de la forma o requerimientos en las que se proyectan en la realidad, siendo estas las RA que usan Marcadores...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Ver más
                    </button>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
 <!--------------------- Modal de Tipos de Realidad Aumentada ------------------------>
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="rounded img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel2">
           Tipos de RA  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 py-4">
              <br><br>
              <img src="ar/tipos-de-ar.jpg" class="rounded img-fluid" alt="">
            </div>
            <div class="col-md-6">
              <h3 class="fw-bold text-center">Clasificación</h3>
              <br>
              <br>
                    •	Realidad aumentada sobre marcadores: es aquella que usa marcadores visuales. Entre ellos se destacan los códigos QR o las imágenes. Se ejecuta a partir de la superposición de elementos virtuales.  
                    <br>
                    •	Realidad aumentada geolocalizada: es utilizada principalmente para la geolocalización de lugares específicos. Se ve en aplicaciones de turismo o entornos de navegación. 
                    <br>
                    •	Realidad aumentada sin marcadores: para su ejecución utiliza reconocimiento de imágenes y características del propio entorno. Todo ello con el objetivo de no necesitar de los marcados visuales.   
                    <br>
                    •	Realidad aumentada basada en reconocimiento facial: con algoritmos de detección y seguimiento facial permite superponer elementos visuales sobre los rostros de las personas. Lo verás principalmente en negocios de belleza o similar. 
                    <br>
                    •	Realidad aumentada holográfica: se hacen proyecciones tridimensionales de un objeto virtual en un espacio real. Así, se genera una experiencia inmersiva y realista. Es muy común en el sector de la arquitectura o medicina. 
            </div>
        
          </div>
        </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

 <!--------------------- Tarjeta de los Marcadores ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/Concept-markers-feos-1-1024x567.jpg" class="rounded mx-auto d-block img-fluid p-1" width="160" height="160" alt="...">
    
                <div class="card-body">
                  <h5>¿Qué son los "Marcadores"?</h5>
                  <p class="card-text">Son patrones distintos que las cámaras pueden reconocer y procesar fácilmente para delimitar donde aparecera la proyeccion...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                          Ver más
                      </button>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
 <!--------------------- Modal de Marcadores ------------------------>
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="rounded img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel3">
           Marcadores</h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 py-4">
              <img src="ar/marker_example.jpg" class="rounded img-fluid p-4" alt="">
            </div>
            <div class="col-md-6">
              <h3 class="fw-bold text-center">¿Qué es?</h3>
              <br>
              <p>Un marcador le proporciona a la propia aplicación de Realidad Aumentada (RA) una clave visual o activadora sobre dónde posicionar el contenido de RA.
              <br>  
              Un marcador puede ser una imagen, un logo, codigo QR, o cualquier tipo de objeto 2D que pueda ser distinguido y reconocido por la cámara. Debido a su uso como reconocimiento de imagen, este tipo de RA es también llamado RA basado en reconocimiento.</p>
            </div>
        
          </div>
        </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

<div class="p-5 p-md-6 mb-2 text-center">
        <div class="px-3">
          <?php if($_SESSION['roles'] == "admin"  || $_SESSION['roles'] == "editor"){  ?>
            <button type="button" class="btn btn-primary "><a href="#" class="choose-lang text-white text-decoration-none"><h5>Modificar</h5></a></button>
            <?php } else { }?>
          </div>
</div>

 <!--------------------- Modal de Video de ayuda ------------------------>

 <div class="modal fade" id="exampleModalayuda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Acerca de la Realidad Aumentada</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-acerca.mp4" type="video/mp4">

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