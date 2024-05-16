<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
    $titulo = "Acerca De Nosotros";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">
     
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">

<form action="controllers/acercadenosotrosempresa.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">

  <div style=" margin-left: 1%;">  
  <i class="fa-solid fa-building" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="acercadenosotros" class="form-label">Acerca De Nosotros</label>
  </div>
    <input minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="acercadenosotros" name="acercadenosotros" required placeholder="Acerca De Nosotros">
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">
    <i class="fa-solid fa-rocket" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="mision" class="form-label">Misión</label>
  </div>
    <input minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="mision" name="mision" required placeholder="Misión">
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-lightbulb" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="vision" class="form-label">Visión</label>
  </div>
    <input minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="vision" name="vision" required placeholder="Visión">
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>
  </div>

  <div class="text-center">
    <button id="botonEnviarAcercaDeNosotros" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
                </div>
              </div>
            </div>
           
    </section>

  </main><!-- End #main -->

  <!-- ======= WhatsApp ======= -->
<?php
    include_once("plantilla/whatsapp.php");
?>


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