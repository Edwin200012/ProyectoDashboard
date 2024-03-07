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


<form action="controllers/editarcontacto.php" class="row g-3 needs-validation" novalidate method="POST">
<!-- Modal -->
<div class="modal fade" id="modalEditarDatosContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" show="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Contacto N°: <?php echo $_GET['idcontacto']?></h5>
          <a href="contacto.php">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </a>
      
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="editarcorreocontacto">Correo</label>
          <input maxlength="50" minlength="3" style="border-radius: 15px;" type="email" class="form-control" id="editarcorreocontacto" name="editarcorreocontacto">
        </div>
        <div class="form-group">
          <label for="editartelefonocontacto">Teléfono</label>
          <input maxlength="10" minlength="10" style="border-radius: 15px;" type="tel" class="form-control" id="editartelefonocontacto" name="editartelefonocontacto">
          <div class="invalid-feedback">Por favor, ingrese el teléfono.</div>
        </div>
        <div class="form-group">
          <label for="editarubicacioncontacto">Ubicación</label>
          <input maxlength="300" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="editarubicacioncontacto" name="editarubicacioncontacto">
          <div class="invalid-feedback">Por favor, ingrese la ubicación.</div>
        </div>
      </div>


          
          <input name="contacto" id="contacto" type="hidden" value="<?php echo $_GET['idcontacto']?>"/>
          
        


      <div class="modal-footer">
        <!-- Botones -->
        <a href="contacto.php" style=" background-color: #dc3545; border-color: #dc3545; border-radius: 20px;" type="button" class="btn btn-secondary btn-modal btn-cerrar" data-dismiss="modal">
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <!-- Agrega la CDN de jQuery y Popper.js (necesarios para que funcionen los componentes de Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Agrega la CDN de Bootstrap (JavaScript) -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    
// Función para mostrar el modal automáticamente al cargar la página
$(document).ready(function(){
    $('#modalEditarDatosContacto').modal('show');
    obtenerDatosContactoPorId();
});

</script>

<script>

  function obtenerDatosContactoPorId(){
      let contacto = document.getElementById("contacto").value;
      console.log("Id recuperado: " + contacto);
      jQuery.ajax({
        url:'controllers/buscarcontactoporid.php',
        type:'GET',
        dataType:'JSON',
        data:{id:contacto},
        success: function (response){
          console.log("Datos Contacto: ", response);
          document.getElementById('editarcorreocontacto').value = response[0].nombre;
          document.getElementById('editartelefonocontacto').value = response[0].telefono;
          document.getElementById('editarubicacioncontacto').value = response[0].ubicacion;
        }
      }).fail(function (response) {
        alert("Ocurrio un error al mostrar los datos");
      });
  }
</script>

<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
    include_once ("plantilla/scripts.php");
?>


</body>
</html>

