<style>
  
    .toast-icon {
      font-size: 24px;
      margin-right: 8px;
      color: white;
    }

    .success-icon {
      color: lightgreen; /* Texto oscuro */
    }


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



    .alert-icon {
      font-size: 24px;
      margin-right: 8px;
    }

    .error-icon {
      color: #721c24; /* Texto oscuro */
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
    <span class="toast-icon success-icon">&#10003;</span>
      <strong class="me-auto">Registro</strong>
      <a href="registro.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: lightgreen; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p>Cuenta creada exitosamente</p>
    </div>
  </div>
</div>

  <?php
    endif;
  ?>


<?php
      if(isset($_GET['noregistrar'])):

  ?>


  <div style="margin-top:10px; margin-bottom: -5%; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
    <span class="alert-icon error-icon">&#10007;</span>
      <strong class="me-auto">Usuario no registrado</strong>
      <a href="registro.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: yellow; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p >La cuenta no se creó correctamente</p>
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
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="nombre" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Correo</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="email" name="correo" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuario</label>
                        <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="usuario" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                    </div>

                    <div class="col-12">
                      <label for="nuevacontrasena" class="form-label">Contraseña</label>
                      <div class="col-md-8 col-lg-9" style="width: 100%;">
                        <div class="input-group">
                          <input maxlength="100" minlength="8" style="border-radius: 15px 0px 0px 15px;" type="password" name="nuevacontrasena" class="form-control" id="nuevacontrasena" required>
                          <button style="border-color: lightgray; border-radius: 0px 15px 15px 0px;" class="btn btn-outline-secondary" type="button" id="botonMostrarOcultarContrasena">
                          <i class="bi bi-eye-slash"></i>
                          </button>
                          <div class="invalid-feedback">Por favor, ingrese su contraseña.</div>
                        </div>
                        
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="contrasenaconfirmar" class="form-label">Confirmar Contraseña</label>
                      <div class="col-md-8 col-lg-9" style="width: 100%;">
                        <div class="input-group">
                        <input maxlength="100" minlength="8" style="border-radius: 15px 0px 0px 15px;" type="password" name="contrasenaconfirmar" class="form-control" id="contrasenaconfirmar" required>
                        <button style="border-color: lightgray; border-radius: 0px 15px 15px 0px;" class="btn btn-outline-secondary" type="button" id="botonMostrarOcultarConfirmarContrasena">
                          <i class="bi bi-eye-slash"></i>
                          </button>
                        </div>
                        <div class="invalid-feedback">Por favor, confirme su contraseña.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input style="border-radius: 15px;" class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto los <a href="#">términos y condiciones</a></label>
                        <div class="invalid-feedback">Debes aceptar antes de enviar.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button id="botonCrearCuenta" style="border-radius: 15px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary w-100" type="submit">Crear Cuenta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="login.php">Log in</a></p>
                    </div>

                  </form>
                </div>
              </div>

              <div class="credits" style="color: inherit;">
                    Diseñado por <span style="color: #007bff;">BootstrapMade</span>
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


   <!-- Activa el toast con JavaScript -->
   <script>
    
    var toast = new bootstrap.Toast(document.querySelector('.toast'))
    toast.show();

  </script>

  <script>
    const botonMostrarOcultarContrasena = document.querySelector('#botonMostrarOcultarContrasena');
    const nuevacontrasena = document.querySelector('#nuevacontrasena');
    botonMostrarOcultarContrasena.addEventListener('click', function () {
      const type = nuevacontrasena.getAttribute('type') === 'password' ? 'text' : 'password';
      nuevacontrasena.setAttribute('type', type);
      this.querySelector('i').classList.toggle('bi-eye');
      this.querySelector('i').classList.toggle('bi-eye-slash');
    });

    const botonMostrarOcultarConfirmarContrasena = document.querySelector('#botonMostrarOcultarConfirmarContrasena');
    const contrasenaconfirmar = document.querySelector('#contrasenaconfirmar');
    botonMostrarOcultarConfirmarContrasena.addEventListener ('click', function () {
      const type = contrasenaconfirmar.getAttribute('type') === 'password' ? 'text' : 'password';
      contrasenaconfirmar.setAttribute('type', type);
      this.querySelector('i').classList.toggle('bi-eye');
      this.querySelector('i').classList.toggle('bi-eye-slash');
    });
  </script>

</body>

</html>