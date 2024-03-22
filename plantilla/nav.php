<style>
  .dropdown-item:hover {
  cursor: pointer;
}

#miModal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4); /* Negro con transparencia */
}

#miModal .modal-content {
  position: relative;
  background-color: #f3f4f6;
  margin: 15% auto; /* 15% del top y centrado */
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Puede ajustarse según necesidad */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

#modalHeader {
  color: #333;
  margin-bottom: 15px;
  font-weight: bold; /* Texto en negritas */
  font-size: 24px; /* Tamaño de letra más grande */
}

#miModal .btn-confirmar {
  background-color: #28a745;
}

#miModal .btn-cancelar {
  background-color: #d33;
}

#miModal .btn {
  border: none;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 20px; /* Bordes redondeados */
  margin: 4px 2px; /* Espacio alrededor de los botones */
}

#miModal .btn:hover {
  opacity: 0.8;
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


<header style="border-style: ridge; background-color: #3A1CA6; border-color: aliceblue;  border-width: 0.3px;" id="header" class="header fixed-top d-flex align-items-center">


<div id="miModal" class="modal">
  <div class="modal-content">
    <div id="modalHeader" class="modal-header">
      ¿Desea cerrar sesión?
    </div>
    <div class="modal-body">
      <p>Esta acción cerrará la sesión actual del Usuario: <?php echo $usuariosesion ?>.</p>
    </div>
    <div class="modal-footer">
      <button id="btnConfirmar" class="btn btn-confirmar">Si, cerrar sesión</button>
      <button id="btnCancelar" class="btn btn-cancelar">Cancelar</button>
    </div>
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
                <span id="btnMostrarModal">Cerrar Sesión</span>
              </a>
            </li>
            <!-- <button id="btnCerrarSesion" class="btn btn-primary">Mostrar Alerta</button> -->

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  

  <script>


// Obtiene el modal
var modal = document.getElementById("miModal");

// Obtiene el botón que abre el modal
var btnMostrarModal = document.getElementById("btnMostrarModal");

// Obtiene el elemento <span> que cierra el modal
var span = document.getElementsByClassName("close-button")[0];

// Cuando el usuario hace clic en el botón, abre el modal 
btnMostrarModal.onclick = function() {
  modal.style.display = "block";
}



// Manejar confirmación
document.getElementById("btnConfirmar").onclick = function() {
  // Lógica para confirmar acción
  modal.style.display = "none";
  setTimeout(function() {
          window.location.href = "./sesion/cerrarsesion.php";
        }, 750);
};

// Manejar cancelación
document.getElementById("btnCancelar").onclick = function() {
  modal.style.display = "none";
};



</script>
