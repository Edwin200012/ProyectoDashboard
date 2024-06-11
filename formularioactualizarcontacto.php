<style>
      /* Estilos para el switch */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #FF0000;
    transition: .4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #80FF00;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

</style>

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
<div class="modal fade" id="modalEditarDatosContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" show="true" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div>
        <h5 class="modal-title" id="exampleModalLabel">Editar Contacto N°: <?php echo $_GET['idcontacto']?></h5>

        <h5>Publicado:  <div style="margin-left: 55%; margin-top: -11%;" id="mostrarcontactopublicado"> </div>  </h5>

        <div style="margin-top: 5%;">
      <label class="switch" style="position: relative; display: inline-block; width: 55px; height: 34px;">
        <input type="checkbox" id="estatuscontactopublicado" name="estatuscontactopublicado" style="opacity: 0; width: 0; height: 0;">
        <span class="slider" style="
            position: absolute; 
            cursor: pointer; 
            top: 0; 
            left: 0; 
            right: 0; 
            bottom: 0; 
            background-color: #ccc; 
            transition: .4s; 
            border-radius: 34px;">
        </span>
    </label>
    
    </div>

        </div>
          <a style="margin-top: -20%;" href="contacto.php">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </a>
      
      </div>
      <div class="modal-body">
        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-envelope" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editarcorreocontacto">Correo</label>
          <input maxlength="50" minlength="3" style="border-radius: 15px;" type="email" class="form-control" id="editarcorreocontacto" name="editarcorreocontacto">
          <div class="invalid-feedback">Por favor, ingrese el correo.</div>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
          <i class="fa-solid fa-mobile-screen-button" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editartelefonocontacto">Teléfono</label>
          <input maxlength="10" minlength="10" style="border-radius: 15px;" type="tel" class="form-control" id="editartelefonocontacto" name="editartelefonocontacto">
          <div class="invalid-feedback">Por favor, ingrese el teléfono.</div>
        </div>

        <div class="form-group" style=" margin-left: 1%;">
        <i class="fa-solid fa-location-dot" style="color: #74C0FC;"></i>
          <label style="margin-left: .5%;" for="editarubicacioncontacto">Ubicación</label>
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
    $('#modalEditarDatosContacto').modal('show');
    obtenerDatosContactoPorId();
});

  function obtenerDatosContactoPorId(){
      let contacto = document.getElementById("contacto").value;
      jQuery.ajax({
        url:'controllers/buscarcontactoporid.php',
        type:'GET',
        dataType:'JSON',
        data:{idcontacto:contacto},
        success: function (response){
          document.getElementById('editarcorreocontacto').value = response[0].correo;
          document.getElementById('editartelefonocontacto').value = response[0].telefono;
          document.getElementById('editarubicacioncontacto').value = response[0].ubicacion;
          document.getElementById('mostrarcontactopublicado').innerHTML = response[0].publicado ? '<i class="fa-sharp fa-solid fa-circle" style="color: #80ff00;"></i>' : '<i class="fa-sharp fa-solid fa-circle" style="color: #ff0000;"></i>';
          var estatusContactoPublicado = document.getElementById('estatuscontactopublicado');
          var slider = estatusContactoPublicado.nextElementSibling;
          estatusContactoPublicado.checked = response[0].publicado ? true : false;

          if (estatusContactoPublicado.checked) {
            slider.style.backgroundColor = '#80FF00';
            estatusContactoPublicado.disabled = true; // Deshabilitar el switch si está en estado ON
          } else {
            slider.style.backgroundColor = '#FF0000';
          }
          estatusContactoPublicado.dispatchEvent(new Event('change'));

        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud AJAX:", error);
          alert("Ocurrió un error al mostrar los datos. Por favor, inténtalo de nuevo más tarde.");
        }
      });
    }  
    
</script>

<script>
        document.getElementById('estatuscontactopublicado').addEventListener('change', function() {
            var slider = this.nextElementSibling;
            if (this.checked) {
              // Funcionalidad para cuando el switch esté en ON
                slider.style.backgroundColor = '#80FF00';
                slider.style.setProperty('--transform-before', 'translateX(26px)');
            } else {
              // Funcionalidad para cuando el switch esté en OFF
                slider.style.backgroundColor = '#FF0000';
                slider.style.setProperty('--transform-before', 'translateX(0)');
            }
        });

        // Insertar el estilo del pseudoelemento en línea
        const style = document.createElement('style');
        style.innerHTML = `
            .slider::before {
                content: "";
                position: absolute;
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                transition: .4s;
                border-radius: 50%;
                transform: var(--transform-before, translateX(0));
            }
        `;
        document.head.appendChild(style);
    </script>

<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
    include_once ("plantilla/scripts.php");
?>
</body>
</html>