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