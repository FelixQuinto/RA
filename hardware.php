<?php //require_once('conexion.php') 

session_start();
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

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
   
    <title>Componentes Hardware</title>

    
</head>

<body>
    <nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="contenido.php">Inicio</a>
          <div class="btn-group"> 
          
          <img src="img/icon.png" type="button" class="img-fluid" data-bs-toggle="modal" alt="" width="32" height="60">
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
                <a class="nav-link active" aria-current="page" href="View/hardware.php">Hardware</a>
              </li>            

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Cuestionario.php">Cuestionario</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="perfil_usuario.php">Usuarios</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="procesar_Cerrar_Sesion.php">Cerrar Sesion</a>
              </li>
             
            </ul>
           
          </div>
        </div>
      </nav>

 <!--------------------- CONTENIDO DE LA PAGINA ------------------------>

<section class="bg-light">
        <div class="container p-3">
          <br><br>
             <div class="row">
                 <div class="col-md-12 text-center">
                     <h1 class="fw-bold">Componentes del Hardware</h1>
                     <hr>
                 </div>     
             </div>        
           </section>
           
      <div class="album py-6 bg-light" id="componentes">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            

 <!--------------------- Tarjeta del Disco Duro ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/Render en Imagen HDD.png" class="rounded mx-auto d-block img-fluid" width="280" height="280"  alt="...">
    
                <div class="card-body">
                  <h5>Disco Duro</h5>
                  <p class="card-text">Un disco duro es un dispositivo de almacenamiento de datos no volátil que se utiliza en computadoras y otros equipos electrónicos para guardar información...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Ver más
                    </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- MODAL DEL DISCO DURO ------------------------>
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel2">
           Disco Duro  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 py-2">
              <video src="videos/Render HDD.mp4" width=500  height=340 controls poster="vistaprevia.jpg"></video>  
            <!--<img src="img/disco.png" class="img-fluid" alt="" width="340" height="500">
            <img src="img/pattern-marker.png" class="img-fluid" alt="" width="340" height="500">-->
            </div>
            <div class="col-md-6">
              <h5 class="fw-bold text-center">¿Qué es?</h5>
              <br>
              <p>Un disco duro es un dispositivo de almacenamiento de datos no volátil que se utiliza en computadoras y otros equipos electrónicos para guardar información digital de forma permanente. Es decir, la información permanece almacenada incluso cuando el dispositivo se apaga, a diferencia de la memoria RAM que requiere energía constante. </p>
              
              <p>El tipo más tradicional de disco duro se conoce como HDD (Hard Disk Drive). Su funcionamiento se basa en un sistema de grabación magnética:</p>

              <p> ○ Platos (platters): Son discos circulares rígidos, generalmente de aluminio o cristal, recubiertos con un material magnético. Hay uno o varios platos apilados y unidos por un eje central.</p>

              <p> ○ Cabezales de lectura/escritura: Sobre cada superficie de los platos hay un pequeño brazo con cabezales que flotan a una distancia microscópica. Estos cabezales son los encargados de leer y escribir la información magnetizando o desmagnetizando puntos minúsculos en la superficie del plato.</p>

              <p> ○ Motor: Un motor hace girar los platos a muy altas velocidades (comúnmente 5400 o 7200 revoluciones por minuto, RPM).</p>

              <p> ○ Actuador: Un brazo actuador mueve los cabezales rápidamente de un lado a otro sobre la superficie de los platos para acceder a los datos.</p>
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

 <!--------------------- TARJETA DE LA FUENTE DE PODER ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/Fuente_Poder.png" class="rounded mx-auto d-block img-fluid" width="280" height="280" alt="...">
    
                <div class="card-body">
                  <h5>Fuente de Poder</h5>
                  <p class="card-text">Es un aparato electrónico que regula y filtra la electricidad que recibe el computador para que los...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                          Ver más
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 <!--------------------- MODAL DE LA FUENTE DE PODER ------------------------>
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel3">
           Fuente de poder </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 py-2">
              <video src="videos/Fuente Poder.mp4" width=500  height=340 controls poster="vistaprevia.jpg"></video>  
            <!--<img src="img/fuente.png" class="img-fluid" alt="" width="340" height="500">
            <img src="img/pattern-marker.png" class="img-fluid" alt="" width="340" height="500">-->
            </div>
            <div class="col-md-6">
              <h5 class="fw-bold text-center">¿Qué es?</h5>
              <br>
              <p>Es un aparato electrónico que regula y filtra la electricidad que recibe el computador para que los circuitos y el funcionamiento de este no se vea afectado por sobrecargas eléctricas y pueda operar de manera óptima, lo que quiere decir que las fuentes de poder evitan que la computadora arranque u opere hasta que estén presentes todos los niveles correctos de energía. Además de ello, realiza la conversión de la electricidad de corriente alterna a varias formas de corriente directa.</p>
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

 <!--------------------- TARJETA DEL CDROM ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/Render en Imagen Lector CD.png" class="rounded mx-auto d-block img-fluid" width="280" height="280"alt="...">

                <div class="card-body">
                  <h5>Unidad CD-ROM</h5>
                  <p class="card-text">Tiene como función hacer girar el disco a una velocidad constante y transferir programas o...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                          Ver más
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       
 <!--------------------- MODAL DEL CDROM ------------------------>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header bg-primary text-white">
                    <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
                    <h2 class="modal-title fw-bold" id="exampleModalLabel4">
                       Unidad CD-ROM </h2>
                     
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 py-2">
                        <video src="videos/Render Lector CD.mp4" width=500  height=340 controls poster="vistaprevia.jpg"></video>  
                        <!--<img src="img/cd.png" class="img-fluid" alt="" width="340" height="500">
                        <img src="img/pattern-marker.png" class="img-fluid" alt="" width="340" height="500">-->
                        
                          </video>
                        </div>
                        <div class="col-md-6">
                          <h5 class="fw-bold text-center">¿Qué es?</h5>
                          <br>
                          <p>Tiene como función hacer girar el disco a una velocidad constante y transferir programas o datos desde el disco a la computadora o viceversa. Esa operación es realizada a través de un cabezal de lectura y grabación que se mueve hacia atrás y adelante sobre la superficie del disco. Los datos grabados en el disco pueden ser leídos y utilizados como fuente de consulta en una operación. </p>
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

 <!--------------------- TARJETA DE MOTHERBOARD ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/Imagen Render Motherboard 2.png" class="rounded mx-auto d-block img-fluid" width="280" height="280" alt="...">
    
                <div class="card-body">
                  <h5>Tarjeta Madre</h5>
                  <p class="card-text">La tarjeta madre se trata de la placa de circuito impreso principal de una computadora, lo que...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        Ver más
                    </button>                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- MODAL DE MOTHERBOARD ------------------------>
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel7">
           Tarjeta Madre </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 py-2">
            <video src="videos/Render Motherboard.mp4" width=500  height=340 controls poster="vistaprevia.jpg"></video>
            <!--<img src="img/tarjeta.png" class="img-fluid" alt="" width="340" height="500">
            <img src="img/pattern-marker.png" class="img-fluid" alt="" width="340" height="500"> -->
            </div>
            <div class="col-md-6">
              <h5 class="fw-bold text-center">¿Qué es?</h5>
              <br>
              <p>La tarjeta madre se trata de la placa de circuito impreso principal de una computadora, lo que significa que es la pieza principal a la que se conectan las demás piezas que crean el conjunto. La tarjeta madre es la columna vertebral que une los componentes de la computadora en un mismo punto y les permite comunicarse entre sí. Sin ella, ninguna de las piezas de la computadora, como el CPU, la GPU o el disco duro, podrían interactuar. La funcionalidad total de la tarjeta madre es necesaria para que una computadora funcione bien. Si tu tarjeta madre está dañada tendrás grandes problemas.</p>
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

 <!--------------------- Tarjeta del Teclado ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <p>
                <img src="img/Teclado_RenderBase.png" class="rounded mx-auto d-block img-fluid" width="280" height="280"  alt="...">
    </p>
                <div class="card-body">
                  <h5>Teclado</h5>
                  <p class="card-text">Un teclado es un dispositivo de entrada fundamental que se utiliza para introducir datos e interactuar con computadoras y otros dispositivos electrónicos....</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        Ver más
                    </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- MODAL DEL TECLADO ------------------------>
 <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel2">
           Teclado  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 py-2">
            <video src="videos/Video Teclado Render Simple.mp4" width=500  height=340 controls poster="vistaprevia.jpg">
            </div>
            <div class="col-md-6">
              <h5 class="fw-bold text-center">¿Qué es?</h5>
              <br>
              <p>Un teclado es un dispositivo de entrada fundamental que se utiliza para introducir datos e interactuar con computadoras y otros dispositivos electrónicos (como teléfonos inteligentes, tabletas, consolas de videojuegos, etc.). Su función principal es convertir la pulsación de teclas en señales eléctricas o digitales que el dispositivo puede entender y procesar.</p>
              <p>Se compone de un conjunto de teclas o botones dispuestos en una configuración específica, generalmente siguiendo el diseño QWERTY (nombrado así por las primeras seis letras de la fila superior), aunque existen otras distribuciones (como AZERTY o DVORAK). </p>
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

<!--------------------- Tarjeta del Mouse ------------------------>
            <div class="col">
              <div class="card shadow-sm">
                <p>
                <img src="img/Mouse Render.png" class="rounded mx-auto d-block img-fluid" width="280" height="280"  alt="...">
    </p>
                <div class="card-body">
                  <h5>Mouse</h5>
                  <p class="card-text">
Un mouse o ratón es un dispositivo de entrada periférico que se usa para controlar la posición del cursor en la pantalla de una computadora y para interactuar con el entorno gráfico...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        Ver más
                    </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 <!--------------------- MODAL DEL MOUSE ------------------------>
 <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="exampleModalLabel2">
           Mouse o Raton  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 py-2">
            <video src="videos/Video Mouse Render Simple.mp4" width=500  height=340 controls poster="vistaprevia.jpg">
            </div>
            <div class="col-md-6">
              <h5 class="fw-bold text-center">¿Qué es?</h5>
              <br>
              <p>
Un mouse, o ratón, es un dispositivo apuntador que permite interactuar con un entorno gráfico en una computadora, controlando un cursor o puntero en la pantalla mediante el movimiento relativo sobre una superficie. Típicamente cuenta con botones (uno o dos) y una rueda de desplazamiento para ejecutar acciones como seleccionar, hacer clic o mover elementos, y se puede conectar de forma cableada o inalámbrica a la computadora.</p>
              <p>La mayoría de los ratones tienen al menos dos botones: el botón izquierdo que se usa para seleccionar, interactuar, arrastrar y ejecutar funciones, y el boton derecho que permite acceder a menús contextuales o funciones adicionales. Algunos ratones tienen una rueda de desplazamiento entre ambos botones, la cual permite desplazarse hacia arriba y abajo en documentos, páginas web y otros contenidos, y ocasionalmente funcionan como un tercer botón. </p>
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
        <!--------------- Modal de Video de Ayuda-----------------------> 

<div class="modal fade" id="exampleModalayuda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">¿Cómo usar la herramienta de Realidad Aumentada?</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-RA.mp4" type="video/mp4">

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
        <script src="bootstrap-5.0.2-examples/sidebars/sidebars.js"></script>
</body>


</html>
