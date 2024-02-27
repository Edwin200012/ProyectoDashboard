

<style>
    #toastBox{
        width: 400px;
        height: 80px;
        background-color: lightgreen;
        font-weight: 500;
        margin: 15px 0;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        margin-left: 75%;
    }
    #i{
        margin: 0 20px;
        font-size: 35px;
        color: green;
    }

    .alert-icon {
      font-size: 24px;
      margin-right: 8px;
    }

    .error-icon {
      color: #721c24; /* Texto oscuro */
    }

    
    /* Estilo para el contenedor del input y el label */
    .input-container {
      position: relative;
    }

    /* Estilo para el input */
    .form-control {
      border-radius: 10px;
      border: 1px solid #6c757d; /* Color del borde del input */
      transition: all 0.3s;
      box-shadow: 0 0 10px rgba(108, 117, 125, 0.2); /* Sombra del input */
    }

    /* Estilo para cuando el input está enfocado */
    .form-control:focus {
      border-color: #007bff; /* Cambia el color del borde cuando está enfocado */
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Cambia el color de la sombra cuando está enfocado */
    }

    /* Estilo para cuando el input tiene contenido */
    .form-control:not(:placeholder-shown) {
      border-color: #007bff; /* Cambia el color del borde cuando tiene contenido */
    }

    /* Estilo para el label */
    .form-label {
      position: absolute;
      top: 0;
      left: 0;
      pointer-events: none;
      transition: all 0.2s;
      color: #6c757d; /* Color del texto del label */
      font-size: 1rem; /* Tamaño de fuente del label */
      font-family: Arial, sans-serif; /* Fuente del label */
    }

    /* Estilo para cuando el input está enfocado o tiene contenido */
    .form-control:focus ~ .form-label,
    .form-control:not(:placeholder-shown) ~ .form-label {
      font-size: 0.75rem; /* Tamaño del texto del label cuando está arriba */
      transform: translateY(-1.5em) scale(0.9); /* Mover el label arriba del input */
      color: #007bff; /* Cambia el color del texto del label cuando está enfocado o tiene contenido */
    }
  
</style>

<?php

if(isset($_POST["enviar"]) ){
  session_start();

  $_SESSION['correosesion'] = htmlentities($_POST
  ['correo']);

  $_SESSION['contrasenasesion'] = htmlentities($_POST
  ['contrasena']);

  header('Location: controllers/loginusuario.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include_once ("plantilla/head.php");
  ?>
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>

  <?php
      if(isset($_GET['buscar'])):

  ?>
   <div style="margin-top:10px; margin-bottom: -5%; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
    <span class="alert-icon error-icon">&#10007;</span>
      <strong class="me-auto">Login</strong>
      <a href="login.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: yellow; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p>Error al iniciar sesión</p>
    </div>
  </div>
</div>


  <?php
    endif;
  ?>




<?php
      if(isset($_GET['inactividad'])):

  ?>
   <div style="margin-top:10px; margin-bottom: -5%; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
    <span> <i class="fa-solid fa-right-from-bracket"></i></span>
      <strong style="margin-left: 15px;" class="me-auto">Sesión</strong>
      <a href="login.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: yellow; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p>Sesión cerrada por inactividad</p>
    </div>
  </div>
</div>


  <?php
    endif;
  ?>



    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/nuevo_logo.png" alt="">
                  <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body" style="border-radius: 15px;">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ingresar</h5>
                    <p class="text-center small">Ingrese su correo & contraseña</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">
                  
                  <div style="margin-top: 10%;" class="col-12">
                    <div class="input-container">
                      <input style="border-radius: 15px;" name="correo" maxlength="50" minlength="3" type="email" class="form-control" id="correo" placeholder=" " required>
                      <label style="margin-left: 2%;" for="correo" class="form-label">Correo electrónico</label>
                    <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>
                 </div>      

                 <div style="margin-top: 8%;" class="col-12">
                    <div class="input-container">
                      <input style="border-radius: 15px;" name="contrasena" maxlength="50" minlength="3" type="password" class="form-control" id="contrasena" placeholder=" " required>
                      <label style="margin-left: 2%;" for="contrasena" class="form-label">Contraseña</label>
                    <div class="invalid-feedback">Por favor, ingrese su contraseña.</div>
                    </div>
                 </div>  

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input style="border-radius: 15px;" class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recordar</label>
                      </div>
                    </div> -->

                    <div style="margin-top: 8%;" class="col-12">
                      <button name="enviar" style="border-radius: 15px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿No tienes cuenta? <a href="registro.php">Crear una cuenta</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://kit.fontawesome.com/c4254e24a8.js"
  crossorigin="anonymous"></script>

   <!-- Activa el toast con JavaScript -->
   <script>
    
    var toast = new bootstrap.Toast(document.querySelector('.toast'))
    toast.show();

  </script>

   <!-- Agrega la CDN de jQuery y Popper.js (necesarios para que funcionen los componentes de Bootstrap) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Agrega la CDN de Bootstrap (JavaScript) -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>