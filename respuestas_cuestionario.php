<?php $con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();

$_SESSION['roles'];
$Usser = $_SESSION['email'];

function registrarEventoDB($con, $usuario, $evento, $detalles = "") {
  $usuario = $con->real_escape_string($usuario);
  $evento = $con->real_escape_string($evento);
  $detalles = $con->real_escape_string($detalles);

  $sql = "INSERT INTO bitacora (usuario, evento, detalles) VALUES ('$usuario', '$evento', '$detalles')";

  $con->query($sql);
}

if($_SESSION['roles'] == "admin" || $_SESSION['roles'] == "estudiante"){

} else {
  echo "<script>
          alert('DEBES INICIAR SESION PARA VER EL CONTENIDO');
          window.location.assign('http://localhost/AR_System/index.php')
          </script>";
}

if ($_POST['eleccion'] === Null) {
  echo "<script>
          alert('El cuestionario no ha sido llenado correctamente');
          window.location.assign('http://localhost/AR_System/Cuestionario.php')
          </script>";
} 

for($i=0; $i < 10; $i++) { 
  $Preguntados= $_POST['evaluado'];
  foreach ($Preguntados as $question) {
  }

  $Seleccionadas= $_POST['eleccion'];
  foreach ($Seleccionadas as $opcion) {
    if(isset($Seleccionadas)){
      //Comienzo del Foreach
      
    }
  } //fin del foreach 
    $consulta = "SELECT * FROM encuesta WHERE Pregunta = '$Preguntados[$i]'";
    $resultado = $con->query($consulta);
    if ($resultado->num_rows === 1) {
        $registro = $resultado->fetch_assoc();
        $encriptada = $registro['Respuesta']; 
        
        if(isset($Preguntados[$i])){
        if(isset($Seleccionadas[$i])){          
        } else { //Por si no se han marcado todas las casillas
          echo "<script>
          alert('Por favor, completar el cuestionario adecuadamente');
          window.location.assign('http://localhost/AR_System/Cuestionario.php')
          </script>";
        }
        } else {
          echo "<script>
          alert('Error en el Cuestionario');
          window.location.assign('http://localhost/AR_System/Cuestionario.php')
          </script>";
        }
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
    
    <title>Resultados Cuestionario </title>

    <style>
        .card-body1 {
            width: 300px;
            height: 130px;
            background-color:rgb(255, 255, 255);
            border: 1px solid #ccc;
            margin: 0 auto;
        }

        .card-body2 {
            width: 300px;
            height: 150px;
            background-color:rgb(255, 255, 255);
            border: 1px solid #ccc;
            margin: 0 auto;
        }
    </style>

    
</head>
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
             
<!--------------------- Menu de Navegacion ------------------------>   

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
                <a class="nav-link active" aria-current="page" href="procesar_Cerrar_Sesion.php">Cerrar Sesion</a>
              </li>
             
            </ul>
           
          </div>
        </div>
      </nav>
<body>


<!--------------------- Evaluacion de los resultados ------------------------>   
      <section >
      <div class="col-md-12 text-center">
                     <h1 class="fw-bold" >RESULTADOS</h1>
                     <hr>
                 </div>  

                 
                 <div class="col-bg-12 text-center">
              
                  <div class="card-body1">
                  <h6><b>Recuerde:  </b></h6><br>
                  <h6>Respuestas correctas = O</h>
                  <h6>Respuestas Incorrectas = X</h>
                  </div>
                  </div>
                  </div> </div>  <br>
                 <?php 
              
                                 
                 $total = 0;
                 $j=1;
                 for($i=0; $i < 10; $i++, $j++) { 
                  $Preguntados= $_POST['evaluado'];
                  foreach ($Preguntados as $question) {
                  }
  
                  $Seleccionadas= $_POST['eleccion'];
                  foreach ($Seleccionadas as $opcion) {
                    if(isset($Seleccionadas)){
                      //Comienzo del Foreach
                      
                    }
                  } //fin del foreach 
                    $consulta = "SELECT * FROM encuesta WHERE Pregunta = '$Preguntados[$i]'";
                    $resultado = $con->query($consulta);
                    if ($resultado->num_rows === 1) {
                        $registro = $resultado->fetch_assoc();
                        $encriptada = $registro['Respuesta']; 
                        
                        if(isset($Preguntados[$i])){
                        if(isset($Seleccionadas[$i])){
                          if($Seleccionadas[$i]===$encriptada){
                            $mensaje = "O";
                            $total++;
                        }else {
                          $mensaje = "X";
                          }
                        } else { $mensaje = "No Datos"; } 
                        } else { $mensaje = "No Datos pregunta"; }//Fin del isset
                        
                    }
                        ?>
        <div class="album py-12 md-light" id="score">
                          <div class="container p-2">
                            <div class="row row">
                            <div class="col-bg-6 text-center">
                      <div class="card shadow-sm">
                          <div class="card-body">
                            <h6 class="fw-bold" ><?php echo "La pregunta (", $j, ") resulto ser: ", $mensaje;  ?></h6>
                            </div> 
                            </div>   
                          </div>
                            </div>
                         
                        </div> 
                      </div> 
     
                                   
                 
                <?php } ?>
                
                <br><br>
                

<!--------------------- Resumen de los resultados ------------------------>   
              
                <div class="col-md-12 text-center">
                     <h6 class="fw-bold" ><?php echo "Su puntuacion final ha sido de: ", $total, "/10"    ?></h6>
                     
                 </div>  

                <?php if($total >= 3 && $total<=6){ ?>
                    <div class="col-md-12 text-center">
                    <h6 class="fw-bold" > Ha alcanzado la mitad de las preguntas. ¡Esfuercese un poco mas!</h6></div>
                    <?php } ?>

                    <?php if($total >= 7){ ?>
                    <div class="col-md-12 text-center">
                    <h6 class="fw-bold" > Que buena puntuacion. ¡Siga Asi!</h></div>
                    <?php } ?>

                    <?php if($total < 3){ ?>
                    <div class="col-md-12 text-center">
                    <h6 class="fw-bold" > Ha sido una puntuacion baja. ¡Vuelva a intentarlo!</h6></div>
                    <?php } ?>


            <div class="col-md-12 text-center">
            <br> 
            <br> 
            <!---- Almacenar la puntuacion en el sistema ----->
  
            <?php $_SESSION['puntaje'] = $total;
            registrarEventoDB($con, $Usser,"Realización cuestionario", "El usuario obtuvo $total/10 en el cuestionario");
            ?>
            <a href="Controller/procesar_Puntuacion.php" class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary">Guardar</button></a>
            <a href="Cuestionario.php" class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-secondary ">Reintentar</button></a>
          
            </div>
     
            </section>

<!--------------------- Modal de Video de Ayuda ------------------------>   

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Resultados</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-resultados.mp4" type="video/mp4">

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