<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Principaaaal</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#"><img src="img/Logo-UPTA blanco.png" class="img-fluid" alt="" width="64" height="64"></a>
          <div class="btn-group">
            <!--llamado al segundo modal-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Iniciar Sesion
            </button>
          </div>
    
        </div>
      </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title " id="exampleModalLabel">Inicio de Sesion</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="form-signin"> 
                    <div class=" text-center">
                      
                    <form action="Controller/procesar_inicio_sesion.php" method="POST">
                      <img class="mb-4" src="img/Logo-UPTA blanco.png" alt="" width="200" height="200">
                    <h1 class="h3 mb-3 fw-normal">Ingrese los Datos</h1>
                  </div>
                
                        <div class="mb-3">
                          <label for="Correo" class="form-label">Email</label>
                          <input type="email" class="form-control" name="Correo" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="Clave" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" name="Clave">
                        </div>
                

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit"  class="btn btn-primary">Ingresar</button>
                </div>
                </form>
              
            </div>
              </div>
          </div>
      </div>
</div>
      
 
<section class="bg-light">
    <div class="container col-xl-12 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                  <img src="img/images_principal-transformed.png" class="d-block mx-lg-auto img-fluid" alt="imagen-principal" width="700" height="500" loading="lazy">
              </div>
                  <div class="col-lg-6">
                          <h1 class="display-5 fw-bold lh-1 mb-3">Desarrollo de Proyecciones en Realidad Aumentada de Los Componentes del Computador</h1>
                          <p class="lead">Haz clic en "iniciar sesion" para ver el contenido o registrarte.</p>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_1">
                                Registrate
                              </button>
                          </div>
                  </div>
        </div>
    </div>
</section>


<!-------------------------------------->
<div class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h5 class="modal-title " id="exampleModalLabel">Registro de Usuarios</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="text-center">
                    <img class="mb-4" src="img/Logo-UPTA blanco.png" alt="" width="200" height="200">
                  </div>
                    <form action="procesar_registrar_usuario.php" method="POST">
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
                                      <input type="password" class="form-control" name="password"  required>
                                      <div class="invalid-feedback">
                                        Contraseña requerida.
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
<!-------------------------------------->   

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
          <li>Br Acosta Alison</li>
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