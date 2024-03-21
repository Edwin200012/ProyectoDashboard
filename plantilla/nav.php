<style>
  .dropdown-item:hover {
  cursor: pointer;
}
</style>
<?php 
    session_start();
    if(isset($_SESSION['idsesion']) == false){
      header('Location: login.php');
    }

    //Tiempo permitido de inactividad en segundos
    $tiempoinactivo = 600;

    if(isset($_SESSION['ultima_actividad']) && (time() - $_SESSION['ultima_actividad'] > $tiempoinactivo)){
      //Si pasa ese tiempo se cierra sesion y se redirige al login
      session_unset();
      session_destroy();
      header('Location: ./login.php?inactividad=true');
      exit;
    }

    //Actualizar tiempo de la última actividad
    $_SESSION['ultima_actividad'] = time();
  
    $idsesion = $_SESSION['idsesion'];
    $nombresesion = $_SESSION['nombresesion'];
    $apellidopsesion = $_SESSION['apellidopsesion'];
    $apellidomsesion = $_SESSION['apellidomsesion'];
    $usuariosesion = $_SESSION['usuariosesion'];
    $correosesion = $_SESSION['correosesion'];
    $contrasenasesion = $_SESSION['contrasenasesion'];
    $telefonosesion = $_SESSION['telefonosesion'];
    $direccionsesion = $_SESSION['direccionsesion'];
    $rutasesion = $_SESSION['rutasesion'];
?>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<header style="border-style: ridge; background-color: #3A1CA6; border-color: aliceblue;  border-width: 0.3px;" id="header" class="header fixed-top d-flex align-items-center">

<!-- Agrega el spinner y el overlay dentro de un div que esté oculto inicialmente -->
<div id="spinner-cerrar-sesion" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999; display: flex; justify-content: center; align-items: center;">
  <div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>

   <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/nuevo_logo.png" alt="">
      </a>
      <i style="color: white; margin-bottom: 22px;" class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo $rutasesion ?>" alt="Imagen de Perfil" class="rounded-circle">
            <span style="color: white;" class="d-none d-md-block dropdown-toggle ps-2"><?php echo $nombresesion . ' ' . $apellidopsesion . ' ' . $apellidomsesion?></span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $usuariosesion ?></h6>
              <span><?php echo $correosesion ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="miperfil.php">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="li-item">
              <a class="dropdown-item d-flex align-items-center">
              <!-- <a class="dropdown-item d-flex align-items-center"> -->
                <i class="bi bi-box-arrow-right"></i>
                <span id="btnCerrarSesion">Cerrar Sesión</span>
              </a>
            </li>
            <!-- <button id="btnCerrarSesion" class="btn btn-primary">Mostrar Alerta</button> -->

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  
<script>
  $(document).ready(function() {
    // Agrega un controlador de eventos clic al botón
    $('#btnCerrarSesion').click(function() {
      // Muestra el SweetAlert
      Swal.fire({
      background: '#f3f4f6',
      title: '¿Desea cerrar sesión?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Si, cerrar sesión',
      cancelButtonText: 'Cancelar',
      customClass: {
    confirmButton: 'btn-rounded', // Clase para redondear el botón de confirmar
    cancelButton: 'btn-rounded' // Clase para redondear el botón de cancelar
  }
      }).then((result) => {
      if (result.isConfirmed) {
         document.getElementById('spinner-cerrar-sesion').style.display = 'flex';
        setTimeout(function() {
          window.location.href = "./sesion/cerrarsesion.php";
        }, 1000);

        
}
      
    });
  });
});

// Ocultar el spinner y el overlay cuando la página haya cargado completamente
window.addEventListener('load', function() {
    document.getElementById('spinner-cerrar-sesion').style.display = 'none';
  });

</script>


