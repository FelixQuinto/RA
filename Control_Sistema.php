<?php //require_once('conexion.php') 
$con = mysqli_connect("localhost", "root", "", "sistema",3306);;

session_start();

//$_SESSION['roles'] = "admin";

if($_SESSION['roles'] == "admin"  || $_SESSION['roles'] == "editor"){

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
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">

    
    <title>Control de Usuarios y Base de Datos</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
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

      <!------------------------------------------------------->

    <div>
      
    <section class="bg-light">
        <div class="container p-3">
          
             
                 <div class="col-md-12 text-center">
                     <h1 class="fw-bold" >Control de Usuarios</h1>
                     <hr>
                 </div>     
             </div>        
           

           <div class="container p-1 p-md-2 mb-2 text-center">
           <div class="px-3">
          <?php if($_SESSION['roles'] == "admin"){  ?>
            <a href="procesar_RespaldoBD.php"  class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary " data-bs-toggle="modal">Respaldar Base de Datos</button></a>
            <a href="procesar_RecuperarBD.php"  class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-secondary " data-bs-toggle="modal">Recuperar Base de Datos</button></a><br><br>
            <a class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#erased">Eliminar Usuario</button></a>
            <?php } if($_SESSION['roles'] == "admin"  || $_SESSION['roles'] == "editor") {?>
            <a class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modify">Modificar Permisos</button></a>
            <a href="Bitacora_Eventos.php"  class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary ">Bitacora de Eventos</button></a>
            <?php } ?>
            <!----Modal de Eliminacion de Usuario --->
            <div class="row">
             <form action="Config/procesar_Borrar_Usuario.php" method="POST">
        <div class="modal fade" id="erased" tabindex="-1" aria-labelledby="erased" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="erased"> Eliminar Usuario  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          <div class=" col-md-12  fw-bold text-left"><ul><ul>
                     <h8 class="col-md-12  fw-bold text-left" >Ingrese la Cedula del Usuario:</h8>
                     <input type="text" class="form-control" size="20" placeholder="12345678" name="Identity">
                     <br>
                     <hr>
                     </ul></ul></div>     
             </div>  
            </div>
        </div>
        <div class="modal-footer">
        <a class="choose-lang text-white text-decoration-none"><button type="submit" class="btn btn-primary " name="envio" value="delete">Procesar</button></a>
      </div>   
      </div>
    </div>
  </div>
  </form>
  </div>

  <!----Modal de Modificacion de Rol --->
  <div class="row">
             <form action="Config/procesar_Modificar_Rol.php" method="POST">

  <div class="modal fade" id="modify" tabindex="-1" aria-labelledby="modify" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64">
        <h2 class="modal-title fw-bold" id="modify"> Modificar Permisos de Usuario  </h2>
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
          <div class=" col-md-12  fw-bold text-center">
                     <h8 class="col-md-12  fw-bold " >Ingrese la Cedula del Usuario:</h8>
                     <input type="text" class="form-control" size="20" maxlength="20" placeholder="12345678" name="Identity">
                     <br>
                     <h8 class="col-md-12  fw-bold " >Ingrese el nuevo Rol:</h8>
                     <input type="text" class="form-control" size="20" maxlength="20" placeholder="'admin' = Para Administrador /// 'editor' = Para editor ///  'estudiante' = Para estudiante" name="Role">
                     <br>
                     <hr>
                     </div>     
             </div>  
            </div>
        </div>
        <div class="modal-footer">
           <a class="choose-lang text-white text-decoration-none" ><button type="submit" class="btn btn-primary " name="envio" value="confi">Procesar</button></a>
        </div>
              
      </div>
    </div>
  </div>
  </form>
</div>

<!--------------- modal de ayuda-----------------------> 

<div class="modal fade" id="exampleModalayuda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                          <h5 class="modal-title " id="exampleModalLabel">Ayuda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          

                            <div class="text-center">
                                                  
                                <h2 class="h2 mb-4 fw-normal">Control de Usuarios</h2>

                                  
                                <video width="720" height="320" controls>
                                <source src="videos/video-control.mp4" type="video/mp4">

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



        <!------>
            
            </div></div>
            <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
              language: {
                url: 'http://localhost/AR_System/es-MX.json'
        }
            });
        });
    </script>
            
            <div class="container">
              <div class="card border-primary mb-3">
              <div class="card-header">
                  <h3>Lista de Usuarios Registrados</h3>            
                <div class="card-body">
                <table id="table_id" class="display table table-bordered" style="width:85%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Puntuación</th>                            
                        </tr>
                    </thead>
                    <tbody>
            <?php 

            for($i=1; $i<10000; $i++){

                //Se muestra todos los elementos de la tabla en la BD
  
                $consulta = "SELECT * FROM usuarios WHERE ID = '$i'";
                $sql = $consulta; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
                
                if ($query->num_rows === 1) {
                $name = $fila['nombre'];
                $last_n= $fila['apellido'];
                $ID= $fila['CI'];
                $email = $fila['correo'];
                $cargo = $fila['rol'];
                $Score = $fila['Puntaje'];
                    if($cargo === "admin"){
                        $Rol_U = "Administrador";
                    } if($cargo === "editor"){
                        $Rol_U = "Editor";
                    } if ($cargo === "estudiante"){
                        $Rol_U = "Estudiante";
                    } if ($cargo != "admin" && $cargo != "estudiante" && $cargo != "editor"){
                        $Rol_U = " ";
                    } else{}

                    ?>
                  

                    <div class="row">
                      <div class=" col-md-12  fw-bold text-left">
                      
                        <tr>
                            <td><?php echo $name, " ", $last_n; ?> </td>
                            <td><?php echo "V-", $ID; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $Rol_U; ?></td>
                            <td><?php echo $Score, "/10"; ?></td>
                            </tr>                                                 
                            
                    <?php } } ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>              
                    
                    </div>

      <!------------------------------------------------------->
      
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