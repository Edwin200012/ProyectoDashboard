<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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




<div style="margin-left: 50%; margin-top: -29%;">
        <div class="container mt-5">
  <div class="row justify-content-end">
    <div class="col-md-4">
      <div class="input-group mb-3 rounded" style="background-color: #6c757d;">
        <input type="text" class="form-control rounded" placeholder="Buscar..." aria-label="Buscar" aria-describedby="button-addon2">
        <button class="btn btn-primary rounded" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="table-responsive rounded" style="background-color: #007bff;">
        <table class="table table-bordered table-hover rounded" style="background-color: #ffffff;">
          <thead class="table-primary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Correo</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Ubicación</th>
            </tr>
          </thead>
          <tbody id="tBody">
            <tr>
              <td></td>
              <td></td>
              <td></td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  </div>
    </section>

  </main><!-- End #main -->

  <!-- Script para mostrar los datos del contaco -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
        mostrarDatosContacto();
    })

    function mostrarDatosContacto(){
      jQuery.ajax({
        url:'controllers/registrocontactoempresa.php',  
        type: 'GET',
        dataType: 'JSON',
        success: function (response){
          $('#tBody').empty();
          let datos = response.registrocontactos
            datos.forEach((post, i) => {
              $('#tBody').append('<tr id="'+post.id+'"><td>'+post.id+'</td><td>'+post.correo+'</td><td>'+post.telefono+'</td><td>'+post.ubicacion+'</td></tr>');
            });
        }
      }).fail(function () {
        alert("Error");
      });
    }
  </script>

  <!-- Script para la barra de busqueda -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('searchInput');
    const rows = document.querySelectorAll('.table tbody tr');

    searchInput.addEventListener('keyup', function(event) {
      const searchString = event.target.value.toLowerCase();

      rows.forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(searchString) ? '' : 'none';
      });
    });
  });
</script>

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