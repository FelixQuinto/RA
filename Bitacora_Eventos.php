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
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">

    
    <title>Actividades de Usuarios</title>
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
                     <h1 class="fw-bold" >Bitacora de Eventos</h1>
                     <hr>
                 </div>     
             </div>        
           

           <div class="container p-1 p-md-2 mb-2 text-center">
           <div class="px-3">
          <?php if($_SESSION['roles'] === "admin"){  ?>
            <a href="Control_Sistema.php"  class="choose-lang text-white text-decoration-none"><button type="button" class="btn btn-primary " data-bs-toggle="modal">Regresar</button></a>
            
            <?php } ?>
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
                  <h3>Lista de Eventos</h3>            
                <div class="card-body">
                <table id="table_id" class="display table table-bordered" style="width:85%">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Usuario</th>
                            <th>Evento</th>
                            <th>Actividad</th>
                            <th>Tiempo</th>                        
                        </tr>
                    </thead>
                    <tbody>
            <?php 

            for($i=1; $i<10000; $i++){

                //Se muestra todos los elementos de la tabla en la BD
  
                $consulta = "SELECT * FROM bitacora WHERE id = '$i'";
                $sql = $consulta; $query = mysqli_query($con, $sql); $fila = mysqli_fetch_array($query);
                
                if ($query->num_rows === 1) {
                $id = $fila['id'];
                $usser = $fila['usuario'];
                $event = $fila['evento'];
                $detail = $fila['detalles'];
                $time = $fila['fecha_hora'];
                    ?>
                  

                    <div class="row">
                      <div class=" col-md-12  fw-bold text-left">
                      
                        <tr>
                            <td><?php echo $id ?> </td>
                            <td><?php echo $usser ?></td>
                            <td><?php echo $event ?></td>
                            <td><?php echo $detail ?></td>
                            <td><?php echo $time ?></td>
                            </tr>                                                 
                            
                    <?php } } ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>              
                    
                    </div>

      <!--------------------PIE DE PAGINA-------------------------->
      
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