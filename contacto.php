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

<?php
      if(isset($_GET['datosenviados'])):

  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Datos enviados exitosamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<?php
    endif;
  ?>

<!-- ======= Titulo de inicio ======= -->
<?php
    $titulo = "Contacto";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Contacto</span></h5>
                </div>
                

<!-- Profile Edit Form -->
<form action="controllers/contactoempresa.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">
    <label for="correocontacto" class="form-label">Correo</label>
    <input maxlength="50" minlength="3" style="border-radius: 15px;" type="email" class="form-control" id="correocontacto" name="correocontacto" required placeholder="Correo">
    <div class="invalid-feedback">Por favor, ingrese el correo.</div>
  </div>

  <div class="mb-3">
    <label for="telefonocontacto" class="form-label">Teléfono</label>
    <input maxlength="10" minlength="10" style="border-radius: 15px;" type="tel" class="form-control" id="telefonocontacto" name="telefonocontacto" required placeholder="Teléfono"">
    <div class="invalid-feedback">Por favor, ingrese el teléfono.</div>
  </div>

  <div class="mb-3">
    <label for="ubicacioncontacto" class="form-label">Ubicación</label>
    <input maxlength="300" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="ubicacioncontacto" name="ubicacioncontacto" required placeholder="Dirección">
    <div class="invalid-feedback">Por favor, ingrese la dirección.</div>
  </div>
  </div>


  <div class="text-center">
    <button id="botonActualizar" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
              </div>
            </div>

            <div style="margin-left: 50%; margin-top: -29%;" class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Registro Contactos</span></h5>
                </div>
                 <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th title="Id" scope="col">Id</th>
                    <th title="Correo" scope="col">Correo</th>
                    <th title="Teléfono" scope="col">Teléfono</th>
                    <th title="Ubicación" scope="col">Ubicación</th>
                  </tr>
                </thead>
                <tbody id="tBody">
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <!-- <tr>
                    <td>Walker Nixon</td>
                    <td>6901</td>
                    <td>Metz</td>
                    <td>41%</td>
                  </tr>
                  <tr>
                    <td>Nathan Espinoza</td>
                    <td>5956</td>
                    <td>Strathcona County</td>
                    <td>47%</td>
                  </tr>
                  <tr>
                    <td>Kelly Cameron</td>
                    <td>4836</td>
                    <td>Fontaine-Valmont</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td>Kyra Moses</td>
                    <td>3796</td>
                    <td>Quenast</td>
                    <td>68%</td>
                  </tr>
                  <tr>
                    <td>Grace Bishop</td>
                    <td>8340</td>
                    <td>Rodez</td>
                    <td>4%</td>
                  </tr>
                  <tr>
                    <td>Haviva Hernandez</td>
                    <td>8136</td>
                    <td>Suwałki</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td>Alisa Horn</td>
                    <td>9853</td>
                    <td>Ucluelet</td>
                    <td>39%</td>
                  </tr>
                  <tr>
                    <td>Zelenia Roman</td>
                    <td>7516</td>
                    <td>Redwater</td>
                    <td>31%</td>
                  </tr> -->
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              </div>
            </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div style="margin-top: 10%;">
  <?php
    include_once ("plantilla/footer.php");
  ?>

  </div>


<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
    include_once ("plantilla/scripts.php");
?>

</body>
</html>