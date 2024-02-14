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

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $nombresesion . ' ' . $apellidopsesion . ' ' . $apellidomsesion ?></h2>
              <h3><?php echo $usuariosesion ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

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
                 
                    <div class="col-12">
                      <button id="botonActualizar" style="border-radius: 15px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary w-100" type="submit">Actualizar Datos</button>
                    </div>
                  
                  </form>

                  

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña Actual</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Confirmar Contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                    <button style="background-color: #77E6F2; color: #000807; border-color: silver;" type="submit" class="btn btn-primary">Cambiar Contraseña</button>
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
<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
    include_once ("plantilla/scripts.php");
?>

</body>
</html>