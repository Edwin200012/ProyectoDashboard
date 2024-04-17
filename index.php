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
    $titulo = "Inicio";
    include_once ("plantilla/titulo.php");
  ?>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ventas <span>| Hoy</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">incremento</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ganancias <span>| Este Mes</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">incremento</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtro</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoy</a></li>
                    <li><a class="dropdown-item" href="#">Este Mes</a></li>
                    <li><a class="dropdown-item" href="#">Este Año</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Clientes <span>| Este Año</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decremento</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
          </div>
        </div><!-- End Left side columns -->
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