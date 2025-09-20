<?php
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bienvenida</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          
        
          <a class="navbar-brand fw-bold"><img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="60" height="80"></a>
         
 <!--------------------- Modal de Inicion de Sesion ------------------------>
          <div class="btn-group">          
               
                <img src="img/icon.png" type="button" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal2" alt="" width="32" height="60">
                &nbsp;
                &nbsp; 
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
                <!---------------RECUPERACION DE USUARIO---------------------->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary "><a href="Usuario_Seguridad.php" class="choose-lang text-white text-decoration-none">Recuperar contraseña</a></button>
                  </div>
                  </div>       
              </div>
            </div>
        </div>
      </div>
      
 <!--------------------- PORTADA DE LA PAGINA ------------------------>

<section class="bg-light">
    <div class="container col-xl-12 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                  <img src="ar/ARf.gif" class="d-block mx-lg-auto img-fluid" alt="imagen-principal" width="500" height="500" loading="lazy">
              </div>
                  <div class="col-lg-6">
                          <h1 class="display-5 fw-bold lh-1 mb-3">APLICACION WEB DE LA ESTRUCTURA DEL COMPUTADOR EN REALIDAD AUMENTADA</p>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_1">
                                Registrarse
                              </button>
                          </div>
                  </div>
        </div>
    </div>
</section>


<!---------------MODAL DE REGISTRO USUARIOS---------------------->
<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title " id="exampleModalLabel">Registro de Usuarios</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="Controller/procesar_registrar_usuario.php" method="POST">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="mb-3">
                                <label for="lastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                  Valid last name is required.
                                  </div>
                        </div>

                        <div class="mb-3">
                                <label for="CI" class="form-label">Cedula</label>
                                <input type="number" class="form-control" name="CI" placeholder="12345678" value="" required>
                                  <div class="invalid-feedback">
                                  Valid last name is required.
                                  </div>
                        </div>
                        
                        <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" name="Correo" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Por favor ingrese una direccion e-mail valida.
                                    </div>
                        </div>
                        <div class="mb-3">
                              <label for="zip" class="form-label">Contraseña</label>
                                      <input type="password" class="form-control" name="password"  required>
                                      <div class="invalid-feedback">
                                        Contraseña requerida.
                                      </div>
                        </div>
                        <div class="mb-3">
                        <label for="zip" class="form-label">Verificar Contraseña</label>
                                      <input type="password" class="form-control" name="password2"  required>
                                      <div class="invalid-feedback">
                                        Contraseña requerida.
                                      </div>
                        </div>

                        <div class="mb-3">
                        <label for="zip" class="form-label">Pregunta de Seguridad</label>
                                      <input type="text" class="form-control" name="pregunta"  required>
                                      <div class="invalid-feedback">
                                        Pregunta requerida.
                                      </div>
                        </div>

                        <div class="mb-3">
                        <label for="zip" class="form-label">Respuesta de Seguridad</label>
                                      <input type="password" class="form-control" name="respuesta"  required>
                                      <div class="invalid-feedback">
                                        Respuesta requerida.
                                      </div>
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit"  class="btn btn-primary">Ingresar</button>
                </div>
                </form>
              
            </div>
      </div>
</div>
<!--------------- Modal de Guia-----------------------> 

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title " id="exampleModalLabel">Guia de Prueba</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  

                    <div class="text-center">
                                          
                        <h2 class="h2 mb-4 fw-normal">¿Como acceder al contenido?</h2>
                        <br>
                        <h4><p>Usar los siguientes usuarios para acceder a diferentes vistas de la pagina</p></h4>
                        <div class="modal-footer">
                        </div>
                        <h5><p>Estudiante</p></h5>
                        <p>Usuario: AnayaR98@gmail.com /// Contraseña: 123456</p>
                        <br>
                        <h5><p>Administrador</p></h5>
                        <p>Usuario: FelixQ@upta.com /// Contraseña: 987654</p>                        
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
      </div>
    </div>
  </footer>
</div>



        <script src="js/bootstrap.bundle.min.js"></script>
        
</body>


</html>