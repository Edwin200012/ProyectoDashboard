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

<div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Contraseña actualizada exitosamente!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>


<?php
      if(isset($_GET['noactualizacontrasena'])):
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    ¡La contraseña no se actualizó correctamente!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

<?php
      if(isset($_GET['actualizadatos'])):
?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Datos actualizados exitosamente!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

<?php
      if(isset($_GET['actualizaimagen'])):
?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Imagen actualizada exitosamente!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

<?php
      if(isset($_GET['resetimagen'])):
?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Imagen restablecida exitosamente!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

<?php
      if(isset($_GET['noresetimagen'])):
?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    La imagen ya esta restablecida!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

  
<?php
      if(isset($_GET['noactualizacorreo'])):
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    ¡El correo ingresado ya está en uso!
    <a href="miperfil.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
?>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?php echo $rutasesion ?>" alt="Imagen de Perfil" class="rounded-circle">
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

                <form enctype="multipart/form-data" action="controllers/editarimagenusuario.php" class="row g-3 needs-validation" novalidate method="POST">
                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen de Perfil</label>
                      <div style="margin-top: 5%;"  class="col-md-8 col-lg-9">
                      <!-- <div  class="col-md-8 col-lg-9" style="margin-left: 40%;"> -->
                      <div style="display: flex;">
                        <img src="<?php echo $rutasesion ?>" style="margin-left: 12px;" alt="Imagen de Perfil" id="imagenActual">
                        <div style="margin-left: 20%;" id="imagenSeleccionada"></div>
                        </div>
                        <div id="div_file" class="pt-2" style="position:relative; width: 150px; background-color: white; border-radius: 20px; box-shadow:0px 2px 2px 2px #1a71a9;">
                        <p style="text-align: center; color: black;" id="texto">Cambiar Imagen</p>
                        <input style="position: absolute; top:0px; left:0px; right:0px; bottom:0px; width:100%; height:100%; opacity:0;" type="file" id="nuevaimagenperfil" name="nuevaimagenperfil" onchange="mostrarImagenSeleccionada()" onmouseover="this.style.cursor='pointer'">
                        <input maxlength="255" minlength="3" style="border-radius: 30px;" type="hidden" class="form-control" id="ruta_imagen_nueva" name="ruta_imagen_nueva" required readonly>
                        <input name="rutaImagenActual" id="rutaImagenActual" type="hidden" value="<?php echo $_SESSION['rutasesion'] ?>" readonly>
                      </div>

                        <div style="margin-left: 4%;">
                        <button disabled title="Subir imagen de perfil" style="color: #74C0FC; background-color: #FFFFFF; height: 40px; width: 40px;" type="submit" id="botonActualizarImagen" name="botonActualizarImagen">
                            <i class="bi-solid bi-upload"></i>
                          </a>
                        </button>
                        </div>

                      </div>
                    </div>  
                </form>

                <form style="margin-left: 33%; margin-top: -7.2%;" enctype="multipart/form-data" action="controllers/resetimagenusuario.php" class="row g-3 needs-validation" novalidate method="POST">
                        <input maxlength="255" minlength="3" style="border-radius: 30px;" type="hidden" class="form-control" id="ruta_reset_imagen" name="ruta_reset_imagen" required value="imagen_default_usuario/icono_perfil_default.png" readonly>
                        <input name="rutaImagenActual" id="rutaImagenActual" type="hidden" value="<?php echo $_SESSION['rutasesion'] ?>" readonly>
                        <button title="Eliminar mi imagen de perfil" style="color: #74C0FC; background-color: #FFFFFF; height: 40px; width: 40px;" type="submit" id="botonEliminarImagen" name="botonEliminarImagen">
                        <i class="bi bi-trash"></i>
                        </button>
                        
                </form>
                

                  <!-- Profile Edit Form -->
                  <form enctype="multipart/form-data" action="controllers/editarusuario.php" class="row g-3 needs-validation" novalidate method="POST"> 

                  <div class="col-12">
                      <label for="editarnombre" class="form-label">Nombre</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="editarnombre" class="form-control" id="editarnombre" value="<?php echo $nombresesion ?>" required>
                      <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                    </div>

                    <div class="col-12">
                      <label for="editarapellidop" class="form-label">Apellido Paterno</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="editarapellidop" class="form-control" id="editarapellidop" value="<?php echo $apellidopsesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editarapellidom" class="form-label">Apellido Materno</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="editarapellidom" class="form-control" id="editarapellidom" value="<?php echo $apellidomsesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editarusuario" class="form-label">Usuario</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" name="editarusuario" class="form-control" id="editarusuario" required value="<?php echo $usuariosesion ?>">
                      <div class="invalid-feedback">Por favor, ingrese su usuario.</div>
                    </div>

                    <div class="col-12">
                      <label for="editarcorreo" class="form-label">Correo</label>
                      <input maxlength="50" minlength="3" style="border-radius: 15px;" type="email" name="editarcorreo" class="form-control" id="editarcorreo" required value="<?php echo $correosesion ?>">
                      <div class="invalid-feedback">Por favor, ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="editartelefono" class="form-label">Teléfono</label>
                      <input maxlength="10" minlength="10" style="border-radius: 15px;" type="tel" name="editartelefono" class="form-control" id="editartelefono" value="<?php echo $telefonosesion ?>">
                    </div>

                    <div class="col-12">
                      <label for="editardireccion" class="form-label">Dirección</label>
                      <input maxlength="300" minlength="3" style="border-radius: 15px;" type="text" name="editardireccion" class="form-control" id="editardireccion" value="<?php echo $direccionsesion ?>">
                    </div>
                 
                    <div class="text-center">
                    
                      <button id="botonActualizar" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Actualizar Datos</button>
                    </div>
                  
                  </form>

                </div>


                <div style="margin-left: 30px;" class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="controllers/editarcontrasenausuario.php" class="row g-3 needs-validation" novalidate method="POST">

                  <div class="row mb-3">
                    <label for="nuevacontrasena" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                    <div class="col-md-8 col-lg-9" style="width: 90%;">
                    <div class="input-group">
                    <input maxlength="100" minlength="8" name="nuevacontrasena" style="border-radius: 15px 0px 0px 15px;" type="password" class="form-control" id="nuevacontrasena" required placeholder="Nueva Contraseña">
                    <button style="border-color: lightgray; border-radius: 0px 15px 15px 0px;" class="btn btn-outline-secondary" type="button" id="botonMostrarOcultarNC">
                    <i class="bi bi-eye-slash"></i>
                    </button>
                  </div>
                  <div class="invalid-feedback">Por favor, ingrese la contraseña.</div>
              </div>
          </div>


                    <div class="row mb-3">
                      <label for="confirmarcontrasena" class="col-md-4 col-lg-3 col-form-label">Confirmar Contraseña</label>
                      <div class="col-md-8 col-lg-9" style="width: 90%;">
                      <div class="input-group">
                      <input maxlength="100" minlength="8" name="confirmarcontrasena" style="border-radius: 15px 0px 0px 15px;" type="password" class="form-control" id="confirmarcontrasena" required placeholder="Confirmar Contraseña">
                      <button style="border-color: lightgray; border-radius: 0px 15px 15px 0px;" class="btn btn-outline-secondary" type="button" id="botonMostrarOcultarCC">
                      <i class="bi bi-eye-slash"></i>
                      </button>
                      <div class="invalid-feedback">Por favor, confirme la contraseña.</div>  
                    </div>
                    </div>

                    <div class="text-center" style="margin-top: 15px;">
                    <button style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Cambiar Contraseña</button>
                    </div>

                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

<!-- Modal para confirmar mostrar contraseña -->
<div class="modal fade" id="confirmarMostrarContrasenaModal" tabindex="-1" aria-labelledby="confirmarMostrarContrasenaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmarMostrarContrasenaModalLabel">Confirmar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de querer mostrar la contraseña? Esto podría ser visible para otras personas.
      </div>
      <div class="modal-footer">
        <button style="background-color: #d33; border-radius: 20px; border: none;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button style="background-color: #28a745; border-radius: 20px; border: none;" type="button" class="btn btn-primary" id="confirmarMostrarContrasena">Aceptar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal para confirmar mostrar contraseña confirmacion -->
<div class="modal fade" id="confirmarMostrarConfirmarContrasenaModal" tabindex="-1" aria-labelledby="confirmarMostrarConfirmarContrasenaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmarMostrarContrasenaModalLabel">Confirmar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de querer mostrar la contraseña? Esto podría ser visible para otras personas.
      </div>
      <div class="modal-footer">
        <button style="background-color: #d33; border-radius: 20px; border: none;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button style="background-color: #28a745; border-radius: 20px; border: none;" type="button" class="btn btn-primary" id="confirmarMostrarConfirmarContrasena">Aceptar</button>
      </div>
    </div>
  </div>
</div>


</main>

<script>
    document.getElementById('nuevaimagenperfil').addEventListener('change', function() {
    // Comprobar si se ha seleccionado un archivo.
    if(this.files.length > 0) {
      // Habilitar boton al seleccionar un archivo.
      document.getElementById('botonActualizarImagen').disabled = false;
    }
  });
</script>

<script>
    function mostrarImagenSeleccionada() {
        var input = document.getElementById('nuevaimagenperfil');
        const ruta_imagen_nueva = document.getElementById('ruta_imagen_nueva');
        //Colocar el nombre de la imagen en el input
    if (input.files.length > 0) {
      ruta_imagen_nueva.value = input.files[0].name;
    } else {
      ruta_imagen_nueva.value = '';
    }
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imagenSeleccionada = document.createElement('img');
                imagenSeleccionada.src = e.target.result;
                imagenSeleccionada.style.maxWidth = '120px';
                imagenSeleccionada.style.maxWidth = '120px';
                document.getElementById('imagenSeleccionada').innerHTML = '';
                document.getElementById('imagenSeleccionada').appendChild(imagenSeleccionada);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    const botonMostrarOcultarNC = document.querySelector('#botonMostrarOcultarNC');
    const nuevacontrasena = document.querySelector('#nuevacontrasena');
    const confirmarMostrarContrasenaBtn = document.querySelector('#confirmarMostrarContrasena');
    const cancelarMostrarContrasenaBtn = document.querySelector('[data-bs-dismiss="modal"]');
    const modalElement = document.getElementById('confirmarMostrarContrasenaModal');

    let mostrarContrasena = false;


    botonMostrarOcultarNC.addEventListener('click', function () {
        const type = nuevacontrasena.getAttribute('type') === 'password' ? 'text' : 'password';

        if(type === 'text' && !mostrarContrasena) {
          const confirmarMostrarContrasenaModal = new bootstrap.Modal(modalElement);
          confirmarMostrarContrasenaModal.show();

          function darClick(event) {
            if (event.target === confirmarMostrarContrasenaBtn) {
              nuevacontrasena.setAttribute('type', 'text');
              mostrarContrasena = true;
              alternarIcono(true);
            }
          
            else if (event.target === cancelarMostrarContrasenaBtn) {
              nuevacontrasena.setAttribute('type', 'password');
              mostrarContrasena = false;
            }
            confirmarMostrarContrasenaModal.hide();
            modalElement.removeEventListener('click', darClick);
          }

          modalElement.addEventListener('click', darClick);
        } else {
          nuevacontrasena.setAttribute('type', 'password');
          mostrarContrasena = false;
          alternarIcono(false);
        }
    });

    function alternarIcono(mostrarIcono) {
      const icono = botonMostrarOcultarNC.querySelector('i');
      icono.classList.toggle('bi-eye', mostrarIcono);
      icono.classList.toggle('bi-eye-slash', !mostrarIcono);
      }


      const botonMostrarOcultarCC = document.querySelector('#botonMostrarOcultarCC');
      const confirmarcontrasena = document.querySelector('#confirmarcontrasena');
      const confirmarMostrarConfirmarContrasenaBtn = document.querySelector('#confirmarMostrarConfirmarContrasena');
      const cancelarMostrarConfirmarContrasenaBtn = document.querySelector('[data-bs-dismiss="modal"]');
      const modalConfirmarElement = document.getElementById('confirmarMostrarConfirmarContrasenaModal');

      let mostrarConfirmarContrasena = false;

      botonMostrarOcultarCC.addEventListener('click', function () {
        const typeConfirmar = confirmarcontrasena.getAttribute('type') === 'password' ? 'text' : 'password';

        if(typeConfirmar === 'text' && !mostrarConfirmarContrasena) {
          const confirmarMostrarConfirmarContrasenaModal = new bootstrap.Modal(modalConfirmarElement);
          confirmarMostrarConfirmarContrasenaModal.show();

          function darClickConfirmar(eventConfirmar) {
            if (eventConfirmar.target === confirmarMostrarConfirmarContrasenaBtn) {
              confirmarcontrasena.setAttribute('type', 'text');
              mostrarConfirmarContrasena = true;
              alternarIconoConfirmar(true);
            }

            else if (eventConfirmar.target === cancelarMostrarConfirmarContrasenaBtn) {
              confirmarcontrasena.setAttribute('type', 'password');
              mostrarConfirmarContrasena = false;
            }
            confirmarMostrarConfirmarContrasenaModal.hide();
            modalConfirmarElement.removeEventListener('click', darClickConfirmar);
          }
          modalConfirmarElement.addEventListener('click', darClickConfirmar);
        } else {
          confirmarcontrasena.setAttribute('type', 'password');
          mostrarConfirmarContrasena = false;
          alternarIconoConfirmar(false);
        }
      });
      function alternarIconoConfirmar(mostrarConfirmarIcono) {
        const iconoConfirmar = botonMostrarOcultarCC.querySelector('i');
        iconoConfirmar.classList.toggle('bi-eye', mostrarConfirmarIcono);
        iconoConfirmar.classList.toggle('bi-eye-slash', !mostrarConfirmarIcono);
      }

</script>

<!-- ======= WhatsApp ======= -->
<?php
    include_once("plantilla/whatsapp.php");
?>

<!-- ======= Footer ======= -->
<?php
  include_once ("plantilla/footer.php");
?>


<?php
    include_once ("plantilla/scripts.php");
?>

<script src="https://kit.fontawesome.com/c4254e24a8.js"
  crossorigin="anonymous"></script>

</body>
</html>