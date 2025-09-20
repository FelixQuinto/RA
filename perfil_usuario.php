<?php //require_once('conexion.php') 
$con = mysqli_connect("localhost", "root", "", "sistema",3306);

session_start();
$Email_U = $_SESSION['email'];

$_SESSION['roles'];
$consulta = "SELECT * FROM usuarios WHERE correo = '$Email_U'"; $resultado = $con->query($consulta);

$sql = $consulta;
            $query = mysqli_query($con, $sql);
            $fila = mysqli_fetch_array($query);
            $name = $fila['nombre'];
            $last_n= $fila['apellido'];
            $ID= $fila['CI'];
            $Secure = $fila['pregunta'];
            $Score = $fila['Puntaje'];

if($_SESSION['roles'] === "admin" || $_SESSION['roles'] === "estudiante" || $_SESSION['roles'] == "editor"){

} else {
  echo "<script>
          alert('DEBES INICIAR SESION PARA VER EL CONTENIDO');
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
    
    <title>Perfil</title>

    
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

      <!---------------------CONTENIDO DE LA PAGINA-------------------------->

      <section class="bg-light">
        
          
             <div class="row ">

             <div class="col-md-4 col-sm-2">
                 <br>    
             </div>
                  
                 <div class="col-md-4 col-sm-6 text-center">
                 <br>    
                 <h1 class="fw-bold" >Bienvenido(a), <?php echo $name ?>

                 <!---------------------DETERMINAR IMAGEN DEL USUARIO-------------------------->
                 <?php if($_SESSION['roles'] === "admin"){?>
                <p><img src="img/admin.png" class="img-fluid" alt="" width="150" height="150"></P>
                <?php } if ($_SESSION['roles'] === "estudiante"){?>
                <p><img src="img/usuario.png" class="img-fluid" alt="" width="150" height="150"></P>
                <?php } if ($_SESSION['roles'] === "editor") { ?>
                <p><img src="img/editor.png" class="img-fluid" alt="" width="150" height="150"></P>
                <?php } ?>
                </h1>
            
                 </div>       
             </div> 
             <div class="container">
             <br>    
           <div class="row bg-light">
           <div class="col-bg-8 text-center">


           <div class="col">
              <div class="card shadow-sm">
                  <div class="card-body" >
                  <h5><b>NOMBRE USUARIO: </b></h1>
                  <h6><p class="card-text"><?php echo $name, " " ,$last_n; ?></p></h6>
                  <hr>
                  <h5><b>CÉDULA USUARIO: </b></h5>
                  <h6><p class="card-text"><?php echo "V-", $ID; ?></p></h6>
                  <hr>
                  <h5><b>CORREO USUARIO: </b></h5>
                  <h6><p class="card-text"><h8><?php echo $Email_U; ?></h8></p></h6>
                  <hr>
                  <h5><b>PREGUNTA DE SEGURIDAD:</b></h5>
                  <h6><p class="card-text"><h8><?php echo "¿", $Secure, "?"; ?></h8></p></h6>
                  <hr>
                  <h5><b>ROL DEL USUARIO:</b></h5>
                  <h6><p class="card-text"><h8><?php if($_SESSION['roles'] == "admin"){ echo "Administrador";} if($_SESSION['roles'] == 'editor'){ echo "Editor";} else { echo "Estudiante";}; ?></h8></p></h6>
                  <hr>
                  <h5><b>ÚLTIMA PUTUACIÓN DEL CUESTIONARIO:</b></h5>
                  <h6><p class="card-text"><h8><?php echo $Score; ?>/10 </h8></p></h6>
                </div>
              </div>
            </div>
      </div>
      </div>
      <br>
      <br>

      <div class="p-5 p-md-6 mb-2 text-center">
        <div class="px-3">
          <?php if($_SESSION['roles'] === "admin" || $_SESSION['roles'] === "editor"){  ?>
            <button type="button" class="btn btn-primary "><a href="Control_Sistema.php" class="choose-lang text-white text-decoration-none"><h5>Listado de Usuarios</h5></a></button>
            <?php } else { }?>
            </div>

            </div>

            </section>

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
                                                  
                                <h2 class="h2 mb-4 fw-normal">Usuarios</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-usuarios.mp4" type="video/mp4">

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
      <!----------------PIE DE PAGINA------------------------>
      
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