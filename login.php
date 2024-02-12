

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
</style>

<?php

if(isset($_POST["enviar"]) ){
  session_start();

  $_SESSION['correo'] = htmlentities($_POST
  ['correo']);

  $_SESSION['contrasena'] = htmlentities($_POST
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
    <div style="background-color: #FFFFE0; border-radius: 15px 15px 0px 0px;"  class="toast-header">
      <strong class="me-auto">Login</strong>
      <a href="login.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: yellow; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px; color: red;">
  <i class="fa-solid fa-circle-exclamation" style="color: #FFD43B; margin-top: 1%;" id="i" "></i>Error al iniciar sesión</p>
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

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Correo</label>
                        <input style="border-radius: 15px;" type="text" name="correo" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input style="border-radius: 15px;" type="password" name="contrasena" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Por favor, ingrese su contraseña.</div>
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input style="border-radius: 15px;" class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recordar</label>
                      </div>
                    </div> -->
                    <div class="col-12">
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

</body>

</html>