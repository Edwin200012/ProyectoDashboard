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

    .ocultar {
        display: none;
    }
 
    .mostrar {
        display: block;
    }

</style>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include_once ("plantilla/head.php");
  ?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

  <main>

  <?php
      if(isset($_GET['registrar'])):

  ?>
<div style="margin-top:10px; margin-bottom: -5%; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
      <strong class="me-auto">Registro</strong>
      <a href="login.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: lightgreen; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px;"><i style="margin-top: 1%;" id="i" class="fa-solid fa-circle-check"></i>Cuenta creada exitosamente</p>
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

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crear Cuenta</h5>
                    <p class="text-center small">Ingrese sus datos personales</p>
                  </div>

                  <form action="controllers/crearcuentausuario.php" class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre</label>
                      <input style="border-radius: 15px;" type="text" name="nombre" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Correo</label>
                      <input style="border-radius: 15px;" type="email" name="correo" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuario</label>
                        <input style="border-radius: 15px;" type="text" name="usuario" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                    </div>

                    <div class="col-12">
                      <label for="contrasena" class="form-label">Contraseña</label>
                      <input onkeyup="mostrar(this.value);" style="border-radius: 15px;" type="password" name="contrasena" class="form-control" id="contrasena" required>
                      <div class="invalid-feedback">Por favor, ingrese su contraseña.</div>
                    </div>

                    <div class="col-12">
                      <label for="contrasenaconfirm" class="form-label">Confirmar Contraseña</label>
                      <input onkeyup="mostrar(this.value);" style="border-radius: 15px;" type="password" name="contrasenaconfirm" class="form-control" id="contrasenaconfirm" required>
                      <div class="invalid-feedback">Por favor, confirme su contraseña.</div>
                    </div>

                    <!-- Mostrar Contraseña -->
                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                      <label style="font-size: 15px;" class="form-check-label" for="flexSwitchCheckChecked">Mostrar Contraseña</label>
                    </div> -->
                    <button style="border-radius: 15px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary w-100" onclick="validarContrasena();">Validar Contraseña</button>
                    

                    <!-- CheckBox -->
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Validar Contraseña
                      </label>
                    </div> -->


                    <div class="col-12">
                      <div class="form-check">
                        <input style="border-radius: 15px;" class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto los <a href="#">términos y condiciones</a></label>
                        <div class="invalid-feedback">Debes aceptar antes de enviar.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button disabled id="botonCrearCuenta" style="border-radius: 15px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary w-100" type="submit">Crear Cuenta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="login.php">Log in</a></p>
                    </div>

                  </form>
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>

       const button = document.getElementById("botonCrearCuenta");

      function validarContrasena() {
        // const button = document.getElementById("botonCrearCuenta");

          if(document.getElementById('contrasena').value == '' && document.getElementById('contrasenaconfirm').value == ''){
              alert('Las contraseñas no deben estar vacias, intente de nuevo');
              button.disabled = true;
          }

          else if(document.getElementById('contrasena').value == document.getElementById('contrasenaconfirm').value){
              alert('Las Contraseñas Coinciden');
              // document.getElementById('botonCrearCuenta').enable == true;
              // document.getElementById('botonCrearCuenta').style.display = 'none';
              button.disabled = false;
          }

          else{
              alert('Las contraseñas no coinciden, intente de nuevo');
              button.disabled = true;
          }
}


function mostrar(valor){
  console.log(valor);
}

    </script>

</body>

</html>