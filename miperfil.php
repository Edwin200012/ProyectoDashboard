

<!DOCTYPE html>
<html lang="en">
<head>

<?php
    include_once ("plantilla/head.php");
  ?>
</head>
<body>
    <!-- ======= Nav ======= -->
  <?php
    include_once ("plantilla/nav.php");
  ?>
  <!-- ======= Sidebar ======= -->
  <?php
    include_once ("plantilla/sidebar.php");
  ?>

<main id="main" class="main">

<!-- ======= Titulo de inicio ======= -->
<?php
    $titulo = "Mi Perfil";
    include_once ("plantilla/titulo.php");
?>

<?php
      if(isset($_GET['actualizacontrasena'])):

  ?>

<div style="margin-bottom: 25px; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
      <strong class="me-auto">Contraseña Actualizada</strong>
      <a href="miperfil.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: lightgreen; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px;"><i style="margin-top: 1%; font-size: 35px;  color: green; margin: 0 20px;" class="fa-solid fa-circle-check"></i>Contraseña actualizada exitosamente</p>
    </div>
  </div>
</div>

<?php
    endif;
  ?>


<?php
      if(isset($_GET['noactualizacontrasena'])):

  ?>

<div style="margin-bottom: 25px; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: #FFFFE0; border-radius: 15px 15px 0px 0px;"  class="toast-header">
      <strong class="me-auto">Contraseña No Actualizada</strong>
      <a href="miperfil.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: yellow; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px; color: red;">
  <i class="fa-solid fa-circle-exclamation" style="color: #FFD43B; margin-top: 1%;" id="i" "></i>La contraseña no se actualizó correctamente</p>
    </div>
  </div>
</div>

<?php
    endif;
  ?>

<?php
      if(isset($_GET['actualizadatos'])):

  ?>

<div style="margin-bottom: 25px; margin-left: 75%; border-radius: 15px;" class="toast show">
    <div style="background-color: lightcyan; border-radius: 15px 15px 0px 0px;"  class="toast-header">
      <strong class="me-auto">Datos Actualizados</strong>
      <a href="miperfil.php">
        <button style="font-size: 18px;" type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: lightgreen; border-radius: 0px 0px 15px 15px;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px;"><i style="margin-top: 1%; font-size: 35px;  color: green; margin: 0 20px;" class="fa-solid fa-circle-check"></i>Datos actualizados exitosamente</p>
    </div>
  </div>
</div>

<?php
    endif;
  ?>



    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $nombresesion . ' ' . $apellidopsesion . ' ' . $apellidomsesion ?></h2>
              <h3><?php echo $usuariosesion ?></h3>
              <div class="social-links mt-2">
                <a href="https://twitter.com" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://mx.indeed.com/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Información General</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar Contraseña</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nombre:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $nombresesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Apellido Paterno:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $apellidopsesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Apellido Materno:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $apellidomsesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Usuario:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $usuariosesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Correo:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $correosesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Teléfono</div>
                    <div class="col-lg-9 col-md-8"><?php echo $telefonosesion ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dirección:</div>
                    <div class="col-lg-9 col-md-8"><?php echo $direccionsesion ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="controllers/editarusuario.php" class="row g-3 needs-validation" novalidate method="POST">
                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen de Perfil</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a style="background-color: #77E6F2; color: black; border-color: silver;" href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a style="background-color: #8C030E; color: white; border-color: silver;" href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>  

                  <div class="col-12">
                      <label for="editarnombre" class="form-label">Nombre</label>
                      <input style="border-radius: 15px;" type="text" name="editarnombre" class="form-control" id="editarnombre" value="<?php echo $nombresesion ?>" required>
                      <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                    </div>

                    <div class="col-12">
                      <label for="editarapellidop" class="form-label">Apellido Paterno</label>
                      <input style="border-radius: 15px;" type="text" name="editarapellidop" class="form-control" id="editarapellidop" value="<?php echo $apellidopsesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editarapellidom" class="form-label">Apellido Materno</label>
                      <input style="border-radius: 15px;" type="text" name="editarapellidom" class="form-control" id="editarapellidom" value="<?php echo $apellidomsesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editarusuario" class="form-label">Usuario</label>
                      <input style="border-radius: 15px;" type="text" name="editarusuario" class="form-control" id="editarusuario" required value="<?php echo $usuariosesion ?>">
                      <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                    </div>

                    <div class="col-12">
                      <label for="editarcorreo" class="form-label">Correo</label>
                      <input style="border-radius: 15px;" type="email" name="editarcorreo" class="form-control" id="editarcorreo" required value="<?php echo $correosesion ?>">
                      <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="editartelefono" class="form-label">Teléfono</label>
                      <input style="border-radius: 15px;" type="tel" name="editartelefono" class="form-control" id="editartelefono" value="<?php echo $telefonosesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editardireccion" class="form-label">Dirección</label>
                      <input style="border-radius: 15px;" type="text" name="editardireccion" class="form-control" id="editardireccion" value="<?php echo $direccionsesion ?>">
                    </div>
                 
                    <div class="text-center">
                    
                      <button id="botonActualizar" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Actualizar Datos</button>
                    </div>
                  
                  </form>

                </div>


                <div style="margin-left: 30px;" class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="controllers/editarcontrasenausuario.php" class="row g-3 needs-validation" novalidate method="POST">

                  <div style="display: flex; align-items: center;" class="row mb-3">
                      <label for="actualcontrasena" class="col-md-4 col-lg-3 col-form-label">Actual Contraseña</label>
                      <div style="display: flex; align-items: center; width: 93%;" class="col-md-8 col-lg-9">
                        <input name="actualcontrasena" type="password" class="form-control" id="actualcontrasena" value="<?php echo $contrasenasesion ?>">
                        <span >
                            <i style="font-size: 30px; transform: translateX(-35px); cursor: pointer;" title="Mostrar Contraseña" class="bx bx-show-alt"></i>
                        </span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="nuevacontrasena" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                      <div class="col-md-8 col-lg-9" style="width: 90%;">
                        <input name="nuevacontrasena" type="password" class="form-control" id="nuevacontrasena">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confirmarcontrasena" class="col-md-4 col-lg-3 col-form-label">Confirmar Contraseña</label>
                      <div class="col-md-8 col-lg-9" style="width: 90%;">
                        <input name="confirmarcontrasena" type="password" class="form-control" id="confirmarcontrasena">
                      </div>
                    </div>

                    

                    <div class="text-center" style="margin-top: 15px;">
                    <button style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Cambiar Contraseña</button>
                    </div>

                  </form><!-- End Change Password Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button style="background-color: #77E6F2; color: #000807; border-color: silver;" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>



</main>

<!-- ======= Footer ======= -->
<?php
  include_once ("plantilla/footer.php");
?>


<?php
    include_once ("plantilla/scripts.php");
?>


<script>
        const actualcontrasena = document.getElementById("actualcontrasena"),
              icon = document.querySelector(".bx"); 

              icon.addEventListener("click", e => {
                if(actualcontrasena.type === "password"){
                  actualcontrasena.type = "text";
                    icon.classList.remove('bx-show-alt')
                    icon.classList.add('bx-hide')
                } else {
                  actualcontrasena.type = "password"
                    icon.classList.remove('bx-hide')
                    icon.classList.add('bx-show-alt')
                }
              })

    </script>
<script src="https://kit.fontawesome.com/c4254e24a8.js"
  crossorigin="anonymous"></script>

</body>
</html>