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
<form action="controllers/editarequipo.php" class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data">
<!-- Modal -->
<div class="modal fade" id="modalEditarDatosEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" show="true" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Equipo N°: <?php echo $_GET['idequipo']?></h5>
          <a href="equipo.php">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </a>
      
      </div>
      <div class="modal-body">
      <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-user" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_nombre_equipo">Nombre</label>
          <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_nombre_equipo" name="editar_nombre_equipo">
          <div class="invalid-feedback">Por favor, ingrese el nombre.</div>
        </div>

      <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-briefcase" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_puesto_equipo">Puesto</label>
          <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_puesto_equipo" name="editar_puesto_equipo">
          <div class="invalid-feedback">Por favor, ingrese el puesto.</div>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-list-check" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_descripcion_equipo">Descripción</label>
          <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_descripcion_equipo" name="editar_descripcion_equipo">
          <div class="invalid-feedback">Por favor, ingrese la descripción.</div>
        </div>

        <div class="mb-3">
        <div style=" margin-left: 1%;">  
          <i class="fa-solid fa-image" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="imagen_equipo" class="form-label">Imagen</label>
        </div>

        <div id="div_file" class="pt-2" style="position:relative; width: 150px; background-color: #2499e3; border-radius: 5px; box-shadow:0px 3px 0px #1a71a9;">
          <p style="text-align: center; color: white;" id="texto_imagen_equipo">Cambiar Imagen</p>

          <input style="position: absolute; top:0px; left:0px; right:0px; bottom:0px; width:100%; height:100%; opacity:0;" type="file" id="editar_imagen_equipo" name="editar_imagen_equipo" onchange="mostrarNombreImagenEditar()">
          <div class="invalid-feedback">Por favor, ingrese la imagen del integrante del equipo.</div>
        </div>
        <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="nombre_imagen_seleccionada_editar" name="nombre_imagen_seleccionada_editar" readonly>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-user-plus" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editar_redes_sociales_equipo">Redes Sociales</label>
          <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editar_redes_sociales_equipo" name="editar_redes_sociales_equipo">
          <div class="invalid-feedback">Por favor, ingrese las redes sociales.</div>
        </div>

          <input name="equipo" id="equipo" type="hidden" value="<?php echo $_GET['idequipo']?>"/>
          <input name="rutaImagenActual" id="rutaImagenActual" type="hidden">

      <div class="modal-footer">
        <!-- Botones -->
        <a href="equipo.php" style=" background-color: #dc3545; border-color: #dc3545; border-radius: 20px;" type="button" class="btn btn-secondary btn-modal btn-cerrar" data-dismiss="modal">
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
  $('#modalEditarDatosEquipo').modal('show');
  obtenerDatosEquipoIntegrantePorId();
});


function obtenerDatosEquipoIntegrantePorId(){
      let equipo = document.getElementById("equipo").value;
      jQuery.ajax({
        url:'controllers/buscarequipointegranteporid.php',
        type:'GET',
        dataType:'JSON',
        data:{idequipo:equipo},
        success: function (response){
          document.getElementById('editar_nombre_equipo').value = response[0].nombre;
          document.getElementById('editar_puesto_equipo').value = response[0].puesto;
          document.getElementById('editar_descripcion_equipo').value = response[0].descripcion;
          document.getElementById('nombre_imagen_seleccionada_editar').value = response[0].imagen;
          document.getElementById('rutaImagenActual').value = response[0].imagen;
          document.getElementById('editar_redes_sociales_equipo').value = response[0].redes_Sociales;
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud AJAX:", error);
          alert("Ocurrió un error al mostrar los datos. Por favor, inténtalo de nuevo más tarde.");
        }
      });
    }  

</script>

<script>
  function mostrarNombreImagenEditar() {
    const input = document.getElementById('editar_imagen_equipo');
    const nombre_imagen_seleccionada_editar = document.getElementById('nombre_imagen_seleccionada_editar');
    if (input.files.length > 0) {
      nombre_imagen_seleccionada_editar.value = input.files[0].name;
    } else {
      nombre_imagen_seleccionada_editar.value = '';
    }
  }
</script>

<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
  include_once ("plantilla/scripts.php");
?>
</body>
</html>