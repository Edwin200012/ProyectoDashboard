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
<form action="controllers/editarservicios.php" class="row g-3 needs-validation" novalidate method="POST">
<!-- Modal -->
<div class="modal fade" id="modalEditarDatosServicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" show="true" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Servicio N°: <?php echo $_GET['idservicios']?></h5>
          <a href="servicios.php">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </a>
      
      </div>
      <div class="modal-body">
      <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-clipboard-list" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_nombre_servicios">Nombre del Servicio</label>
          <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_nombre_servicios" name="editar_nombre_servicios">
          <div class="invalid-feedback">Por favor, ingrese el nombre del servicio.</div>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-list-check" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_descripcion_servicios">Descripción</label>
          <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_descripcion_servicios" name="editar_descripcion_servicios">
          <div class="invalid-feedback">Por favor, ingrese la descripción del servicio.</div>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-dollar-sign" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_precio_servicios">Precio</label>
          <input maxlength="10" minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="editar_precio_servicios" name="editar_precio_servicios">
          <div class="invalid-feedback">Por favor, ingrese el precio del servicio.</div>
        </div>

          <input name="servicios" id="servicios" type="hidden" value="<?php echo $_GET['idservicios']?>"/>

      <div class="modal-footer">
        <!-- Botones -->
        <a href="servicios.php" style=" background-color: #dc3545; border-color: #dc3545; border-radius: 20px;" type="button" class="btn btn-secondary btn-modal btn-cerrar" data-dismiss="modal">
            <i class="fas fa-times"></i> Cerrar
        </a>
        <button style="background-color: #28a745; border-color: #28a745; border-radius: 20px;" type="submit" class="btn btn-primary btn-modal btn-guardar">
            <i class="fas fa-save"></i> Guardar cambios
        </button>
        
      </div>
    </div>
  </div>
</div>
</form>
    
  </main><!-- End #main -->


<!-- Agrega la CDN de jQuery y Popper.js (necesarios para que funcionen los componentes de Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Agrega la CDN de Bootstrap (JavaScript) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
// Función para mostrar el modal automáticamente al cargar la página
$(document).ready(function(){
  $('#modalEditarDatosServicios').modal('show');
  obtenerDatosServiciosPorId();
});

function obtenerDatosServiciosPorId(){
  let servicios = document.getElementById("servicios").value;
      jQuery.ajax({
        url:'controllers/buscarserviciosporid.php',
        type:'GET',
        dataType:'JSON',
        data:{idservicios:servicios},
        success: function (response){
          document.getElementById('editar_nombre_servicios').value = response[0].nombre;
          document.getElementById('editar_descripcion_servicios').value = response[0].descripcion;
          document.getElementById('editar_precio_servicios').value = response[0].precio;
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud AJAX:", error);
          alert("Ocurrió un error al mostrar los datos. Por favor, inténtalo de nuevo más tarde.");
        }
      });
}

</script>

<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
  include_once ("plantilla/scripts.php");
?>
</body>
</html>