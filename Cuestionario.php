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
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .checkbox-container {
            font-size: 10px; /* Aumenta el tamaño del texto */
            padding: 10px; /* Añade espacio alrededor */
        }

        .checkbox-container input[type="checkbox"] {
            transform: scale(1.5); /* Aumenta el tamaño del checkbox */
        }
    </style>
    
    <title>Cuestionario</title>

    
</head>

<body>
<nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">

          <a class="navbar-brand fw-bold" href="Contenido.php">Inicio</a>

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

    <div>
      
    <section class="">
        <div class="container p-3">
          
             <div class="row">
                 <div class="col-md-12 text-center">
                     <h1 class="fw-bold" >Cuestionario</h1>
                     <hr>
                 </div>     
             </div> 
        </div>         
     </section>

          </div>

            
      </div>    
  </div>
      <form action="respuestas_cuestionario.php" method="POST">
      <?php 
      $i=1;
      for($i; $i<=10; $i++){
      
      //Se aleatoriza las preguntas de la encuesta y sus debidas respuestas
      $Question = random_int(1,20);    
      $consulta = "SELECT * FROM encuesta WHERE ID = '$Question'";
      $sql = $consulta; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
      if ($query->num_rows === 1) {
      $pregunta = $fila['Pregunta'];
      $Ok = $fila['Respuesta'];
      }

      $Q1 = random_int(1,20); $Duda1 = "SELECT * FROM encuesta WHERE ID = '$Q1'";
      $sql = $Duda1; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
      if ($query->num_rows === 1) {
      $Op1 = $fila['Respuesta'];
      }

      $Q2 = random_int(1,20); $Duda2 = "SELECT * FROM encuesta WHERE ID = '$Q2'";
      $sql = $Duda2; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
      if ($query->num_rows === 1) {
      $Op2 = $fila['Respuesta'];
      }
      
      $Q3 = random_int(1,20); $Duda3 = "SELECT * FROM encuesta WHERE ID = '$Q3'";
      $sql = $Duda3; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
      if ($query->num_rows === 1) {
      $Op3 = $fila['Respuesta'];
      }
           ?>

<div class="album py-3 bg-light" id="encuesta">
                  <div class="container p-3">
                 <div class="col-bg-12">
              <div class="card shadow-sm">
                  <div class="card-body">
                      <div class="fw-bold"><?php echo "Pregunta ", $i, ": ", "¿", $pregunta ?></div> 
                      
                  </div>     
              </div>  
               
              

      <div class="choice">
   
      <div class="checkbox-container input">
      <p><h6><input type="checkbox" name="eleccion[]" value="<?php echo $Ok; ?>" id="opt0"><label for="opt0" id="lb0" required>&nbsp;<?php echo "   ". $Ok ?></label></h6></p>
      <p><h6><input type="checkbox" name="eleccion[]" value="<?php echo $Op1; ?>" id="opt1"><label for="opt1" id="lb1"> &nbsp; <?php echo "  ".$Op1 ?></label></h6></p>
      <p><h6><input type="checkbox" name="eleccion[]" value="<?php echo $Op2; ?>" id="opt2"><label for="opt2" id="lb2">&nbsp;<?php echo "  ". $Op2 ?></label></h></p>
      <p><h6><input type="checkbox" name="eleccion[]" value="<?php echo $Op3; ?>" id="opt3"><label for="opt3" id="lb3">&nbsp;<?php echo "  ". $Op3 ?></label></h></p>
      <div class="options"><input type="hidden" name="evaluado[]" value="<?php echo $pregunta; ?>" id="opt0" ></label></div>
      </h4> </div></div>

      </div> </div>     </div>            
  </section>

      <?php  }    ?>

      <br><br>
       <div class="ans-btn">

       <div class="col-md-12 text-center">
        <div class="px-3">
          <?php if($_SESSION['roles'] === "admin" || $_SESSION['roles'] === "editor"){  ?>
            <button type="button" class="btn btn-primary "><a href="Cambiar_Cuestionario.php" class="choose-lang text-white text-decoration-none">Modificar</a></button>

            <?php } ?>

            <br>
          <br>
            
       <div class="col-md-12 text-center"> 
          <button type="submit" class="submit-answer btn btn-primary">Enviar Respuesta</button></form>
          </div>
          
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
                                                  
                                <h2 class="h2 mb-4 fw-normal">Cuestionario</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-cuestionario.mp4" type="video/mp4">

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