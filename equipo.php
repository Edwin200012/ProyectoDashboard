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
    $titulo = "Equipo";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Equipo</span></h5>
                </div>


                
<form action="controllers/crearequipo.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-envelope" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="nombre_equipo" class="form-label">Nombre</label>
  </div>
    <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="nombre_equipo" name="nombre_equipo" required placeholder="Nombre">
    <div class="invalid-feedback">Por favor, ingrese el nombre del integrante del equipo.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">
    <i class="fa-solid fa-mobile-screen-button" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="puesto_equipo" class="form-label">Puesto</label>
  </div>
    <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="puesto_equipo" name="puesto_equipo" required placeholder="Ej. Manager">
    <div class="invalid-feedback">Por favor, ingrese el puesto del integrante del equipo.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-location-dot" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="descripcion_equipo" class="form-label">Descripción</label>
  </div>
    <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="descripcion_equipo" name="descripcion_equipo" required placeholder="Descripción">
    <div class="invalid-feedback">Por favor, ingrese la descripción del integrante del equipo</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-envelope" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="imagen_equipo" class="form-label">Imagen</label>
  </div>
    <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="imagen_equipo" name="imagen_equipo" required placeholder="Imagen">
    <div class="invalid-feedback">Por favor, ingrese la imagen del integrante del equipo.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-envelope" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="redes_sociales_equipo" class="form-label">Redes Sociales</label>
  </div>
    <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="redes_sociales_equipo" name="redes_sociales_equipo" required placeholder="Redes Sociales">
    <div class="invalid-feedback">Por favor, ingrese las redes sociales del integrante del equipo.</div>
  </div>
  </div>

  <div class="text-center">
    <button id="botonEnviarEquipo" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

              </div>
            </div>
     
    </section>

  </main><!-- End #main -->

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