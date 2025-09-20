<?php //require_once('conexion.php') 
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$_SESSION['roles'] = "admin";

if($_SESSION['roles'] == "admin"){

} else {
  echo "<script>
          alert('DEBES SER ADMINISTRADOR PARA VER EL CONTENIDO');
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
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Configuración de Cuestionario</title>

    
</head>

<body class="bg-light">
<nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="contenido.php">Inicio</a>
          <div class="btn-group"> 
          
          <img src="img/icon.png" type="button" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModalayuda" alt="" width="32" height="60">
          &nbsp;
          &nbsp;     
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          </div>
    
          <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
             

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
             <form action="procesar_Mod_cuestionario" method="POST">
                 <div class="col-md-12 text-center">
                     <h1 class="fw-bold" >Modificar Cuestionario</h1>
                     <hr>
                  </div>     
          </div>
        </div>        
      </section>



      <?php 

      for($i=1; $i<=20; $i++){
      
      //Se muestra todos los elementos de la tabla en la BD
        
      $consulta = "SELECT * FROM encuesta WHERE ID = '$i'";
      $sql = $consulta; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
      
      if ($query->num_rows === 1) {
        $pregunta = $fila['Pregunta'];
        $num = $fila['ID'];
      
        ?>
          
      <form action="Config/procesar_Mod_cuestionario.php" method="POST">
      <section class="container">
      <div class="row">
                 <div class=" col-md-12  fw-bold text-left"><ul><ul>
                     <li><h6 class="col-md-8  fw-bold text-left" ><?php echo $num, ".)     ¿", $pregunta; ?>                    
                     </h6></li>
                     
                     <div class="col-md-4">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mod_question" >
                        Modificar</button></div>
                      <hr>  
                     </ul></ul></div>     
             </div> 
              
        
             <div class="modal fade" id="mod_question" tabindex="-1" aria-labelledby="mod_question" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="mod_question"> Modificar Pregunta y Respuesta  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          <div class=" col-md-12  fw-bold text-left"><ul><ul>
                    <h8 class="col-md-12  fw-bold text-left" >Ingrese el numero de la pregunta: </h8>
                     <input type="text" class="form-control" size="2" name="Valores">
                     <br>
                     <h8 class="col-md-12  fw-bold text-left" >Ingrese la nueva pregunta:</h8>
                     <input type="text" class="form-control" size="100" maxlength="100" name="Question" placeholder="<?php echo $num;  ?>">
                     <br>
                     <h8 class="col-md-12  fw-bold text-left" >Ingrese su debida respuesta:</h8>
                     <input type="text" class="form-control" size="100" maxlength="100" name="Solution">
                     <br>
                     <hr>
                     </ul></ul></div>     
             </div>  
            </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary " src="procesar_Mod_cuestionario">Procesar</button>
          </div>
        </section>
        </form>      
      </div>
    </div>
  </div>
   
        <?php } } ?>

        <div class="col-md-12 text-center">
        <a href="Cuestionario.php" class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary ">Regresar</button></a>
        </div>

 <!--------------------- Modal de Video de Ayuda ------------------------>

<div class="modal fade" id="exampleModalayuda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Modificar Encuesta</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-modificar.mp4" type="video/mp4">

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

