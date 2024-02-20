<?php 
    session_start();
    if(isset($_SESSION['idsesion']) == false){
      header('Location: login.php');
    }

    //Solo se permite 1 minuto de inactividad
    $tiempoinactivo = 60;

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
?>

<header style="border-style: ridge; background-color: #3A1CA6; border-color: aliceblue;  border-width: 0.3px;" id="header" class="header fixed-top d-flex align-items-center">

   <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/nuevo_logo.png" alt="">
      </a>
      <i style="color: white; margin-bottom: 22px;" class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="imagenesperfil/icono-perfil-default.png" alt="Profile" class="rounded-circle">
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

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./sesion/cerrarsesion.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->