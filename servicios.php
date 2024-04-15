<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
      if(isset($_GET['datosenviadosservicios'])):

  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Datos enviados exitosamente!
    <a href="servicios.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
  ?>


<?php
      if(isset($_GET['actualizaservicios'])):

  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Servicio actualizado exitosamente!
    <a href="servicios.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
  ?>

<!-- ======= Titulo de inicio ======= -->
<?php
    $titulo = "Servicios";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Servicios</span></h5>
                </div>


                
<form action="controllers/crearservicios.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-clipboard-list" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="nombre_servicios" class="form-label">Nombre del Servicio</label>
  </div>
    <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="nombre_servicios" name="nombre_servicios" required placeholder="Nombre del Servicio">
    <div class="invalid-feedback">Por favor, ingrese el nombre del servicio.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-list-check" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="descripcion_servicios" class="form-label">Descripción</label>
  </div>
    <input maxlength="255" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="descripcion_servicios" name="descripcion_servicios" required placeholder="Descripción">
    <div class="invalid-feedback">Por favor, ingrese la descripción del servicio.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-dollar-sign" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="precio_servicios" class="form-label">Precio</label>
  </div>
    <input maxlength="10" minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="precio_servicios" name="precio_servicios" required placeholder="Precio">
    <div class="invalid-feedback">Por favor, ingrese el precio del servicio.</div>
  </div>
  </div>

  <div class="text-center">
    <button id="botonEnviarEquipo" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
              </div>
            </div>

<div style="margin-left: 40%; margin-right: 5%; margin-top: -30%;" >
    <div class="container mt-4">
    <!-- Contenedor del input de búsqueda -->
    <div class="input-group" style="width:30%; margin-left: 70%;">
        <!-- Input de búsqueda -->
        <input id="searchInput" style="border-radius: 15px 0px 0px 15px;" type="text" class="form-control" placeholder="Buscar...">
        <div class="input-group-append">
            <!-- Icono de búsqueda (Font Awesome) -->
            <span style="cursor: pointer; border-radius: 0px 15px 15px 0px;" class="input-group-text search-icon"><i class="fas fa-search"></i></span>
        </div>
    </div>
</div>

<!-- Tabla -->
<table class="table" style="border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); margin-top: 1%;">
      <thead style="background-color: #007bff; color: #fff; border-color: #007bff;">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="tBody">
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

  </main><!-- End #main -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      mostrarDatosServicios();
    })

    function mostrarDatosServicios(){
      jQuery.ajax({
        url:'controllers/registroserviciosempresa.php',
        type: 'GET',
        dataType: 'JSON',
        success: function (response){
          $('#tBody').empty();
          let datos = response.registroservicios
          datos.forEach((post, i) => {
              $('#tBody').append('<tr id="'+post.id+'"><td>'+post.id+'</td><td>'+post.nombre+'</td><td>'+post.descripcion+'</td><td>'+post.precio+'</td>  <td><a title="Editar Registro" type="button" href="formularioactualizarservicios.php?idservicios='+post.id+'" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square" "></i></a></td>  <td><button title="Eliminar Registro" type="button" class="btn btn-outline-danger btneliminar" id="'+post.id+'"> <i class="fas fa-trash"></i> </button></td> </tr>');
            });
        }
      }).fail(function () {
        alert("Error");
      });
    }

    $("#tBody").on("click", ".btneliminar", function() {
      let id = $(this).attr('id');
      eliminarServicios(id);
    });

    function eliminarServicios(id){
      Swal.fire({
        background: '#f3f4f6',
            title: 'Confirmar eliminación',
            text: '¿Desea eliminar el servicio #' + id + '?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'Cancelar',
            showCloseButton: true,
            customClass: {
              confirmButton: 'btn-rounded', // Clase para redondear el botón de confirmar
              cancelButton: 'btn-rounded' // Clase para redondear el botón de cancelar
             }
      })
      .then((result) =>{
        if(result.isConfirmed){
          jQuery.ajax({
            url:'controllers/eliminarservicios.php',
            type: 'POST',
            dataType: 'JSON',
            data:{id:id},
            success: function (response){
              $('#'+id).remove();
              swal.fire({
                    background: '#f3f4f6',                 
                    title: "Registro Eliminado",
                    text: "El registro #" + id + " se elimino correctamente.",
                    icon: "success",
                    timer: 3000,
                    showCloseButton: true
              });
            }
          }).fail(function (){
            alert("Error");
          });

        } else {
          swal.fire({
                  background: '#f3f4f6',
                  title:"Registro",
                  text: "El registro #" + id + " no se elimino.",
                  icon: "warning",
                  timer: 3000,
                  showCloseButton: true
                });
        }

      });
    }

  </script>

<script>
      // Función para filtrar la tabla según el texto ingresado en la barra de búsqueda
      $(document).ready(function(){
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tBody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      // Agregar efecto de cambio de color al pasar el mouse sobre las celdas
      $("#tBody tr").hover(
        function() {
          $(this).css("background-color", "#cce5ff");
        },
        function() {
          $(this).css("background-color", "");
        }
      );
    });
  </script>

  <!-- Agrega la CDN de jQuery y Popper.js (necesarios para que funcionen los componentes de Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Agrega la CDN de Bootstrap (JavaScript) -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- ======= WhatsApp ======= -->
<?php
    include_once("plantilla/whatsapp.php");
?>

<!-- ======= Footer ======= -->
<div style="margin-top: 25%;">
<?php
    include_once ("plantilla/footer.php");
?>

<a style="background-color: #3A1CA6;" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
    include_once ("plantilla/scripts.php");
?>
</body>
</html>