<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
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






  <div style="margin-left: 40%; margin-right: 5%; margin-top: -29%;" >
    <!-- Barra de búsqueda -->
    <input type="text" id="searchInput" class="form-control" style="width: 100%; margin-bottom: 10px;" placeholder="Buscar...">
    <!-- Tabla -->
    <table class="table" style="border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
      <thead style="background-color: #007bff; color: #fff; border-color: #007bff;">
        <tr>
          <th>#</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>Ubicación</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <tr style="background-color: #f0faff;">
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Contacto N°:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Inputs -->
        <div class="form-group">
          <label for="input1">Correo</label>
          <input style="border-radius: 15px;" type="text" class="form-control" id="input1" value="Correo">
        </div>
        <div class="form-group">
          <label for="input2">Teléfono</label>
          <input style="border-radius: 15px;" type="text" class="form-control" id="input2" value="Teléfono">
        </div>
        <div class="form-group">
          <label for="input3">Ubicación</label>
          <input style="border-radius: 15px;" type="text" class="form-control" id="input3" value="Ubicación">
        </div>
      </div>
      <div class="modal-footer">
        <!-- Botones -->
        <button style=" background-color: #dc3545; border-color: #dc3545; border-radius: 20px;" type="button" class="btn btn-secondary btn-modal btn-cerrar" data-dismiss="modal">
            <i class="fas fa-times"></i> Cerrar
        </button>
        <button style="background-color: #28a745; border-color: #28a745; border-radius: 20px;" type="button" class="btn btn-primary btn-modal btn-guardar">
            <i class="fas fa-save"></i> Guardar cambios
        </button>
      </div>
    </div>
  </div>
</div>




  </main><!-- End #main -->

  <!-- Script para mostrar los datos del contacto -->
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
          $('#tableBody').empty();
          let datos = response.registrocontactos
            datos.forEach((post, i) => {
              $('#tableBody').append('<tr id="'+post.id+'"><td>'+post.id+'</td><td>'+post.correo+'</td><td>'+post.telefono+'</td><td>'+post.ubicacion+'</td>                                           <td><button title="Editar Registro" type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square" "></i></button></td>                                                                <td><button title="Eliminar Registro" type="button" class="btn btn-outline-danger btneliminar" id="'+post.id+'" value="'+post.ruta+'"> <i class="fas fa-trash"></i> </button></td> </tr>');
            });
        }
      }).fail(function () {
        alert("Error");
      });
    }
  </script>

  <!-- Agrega la CDN de jQuery y Popper.js (necesarios para que funcionen los componentes de Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Agrega la CDN de Bootstrap (JavaScript) -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    // Función para filtrar la tabla según el texto ingresado en la barra de búsqueda
    $(document).ready(function(){
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tableBody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      // Agregar efecto de cambio de color al pasar el mouse sobre las celdas
      $("#tableBody tr").hover(
        function() {
          $(this).css("background-color", "#cce5ff");
        },
        function() {
          $(this).css("background-color", "");
        }
      );
    });
  </script>

  <!-- ======= Footer ======= -->
  <div style="margin-top: 18%;">
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