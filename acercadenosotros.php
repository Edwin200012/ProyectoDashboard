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
  if(isset($_GET['datosenviados'])):
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    ¡Datos enviados exitosamente!
    <a href="acercadenosotros.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
</div>

<?php
    endif
?>


<?php
      if(isset($_GET['actualizanosotros'])):

  ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Datos actualizados exitosamente!
    <a href="acercadenosotros.php">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </a>
  </div>

<?php
    endif;
  ?>

<!-- ======= Titulo de inicio ======= -->
<?php
    $titulo = "Acerca De Nosotros";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">
     
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 style="margin-left: 2.8%;" class="card-title">Acerca De Nosotros</span></h5>
                </div>

<form action="controllers/acercadenosotrosempresa.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">

  <div style=" margin-left: 1%;">  
  <i class="fa-solid fa-building" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="acercadenosotros" class="form-label">Acerca De Nosotros</label>
  </div>
    <textarea minlength="1" style="border-radius: 15px; resize: none; height: 150px; overflow-y: auto;" type="text" class="form-control" id="acercadenosotros" name="acercadenosotros" required placeholder="Acerca De Nosotros" rows="4"> </textarea>
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">
    <i class="fa-solid fa-rocket" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="mision" class="form-label">Misión</label>
  </div>
    <textarea minlength="1" style="border-radius: 15px; resize: none; height: 150px; overflow-y: auto;" type="text" class="form-control" id="mision" name="mision" required placeholder="Misión" rows="4"> </textarea>
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-lightbulb" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="vision" class="form-label">Visión</label>
  </div>
    <textarea minlength="1" style="border-radius: 15px; resize: none; height: 150px; overflow-y: auto;" type="text" class="form-control" id="vision" name="vision" required placeholder="Visión" rows="4"> </textarea>
    <div class="invalid-feedback">Por favor, ingrese la información.</div>
  </div>
  </div>

  <div class="text-center">
    <button id="botonEnviarAcercaDeNosotros" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
                </div>
              </div>

  <div style="margin-left: 40%; margin-right: 5%; margin-top: -50%;" >
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
          <th>Descripción</th>
          <th>Misión</th>
          <th>Visión</th>
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

  <!-- Script para mostrar los datos del contacto -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      mostrarDatosNosotros();
    })

    function mostrarDatosNosotros(){
      jQuery.ajax({
        url:'controllers/registroacercadenosotros.php',
        type: 'GET',
        dataType: 'JSON',
        success: function (response){
          $('#tBody').empty();
          let datos = response.registronosotros
            datos.forEach((post, i) => {
              $('#tBody').append('<tr id="'+post.id+'"><td>'+post.id+'</td><td>'+post.descripcion+'</td><td>'+post.mision+'</td><td>'+post.vision+'</td>  <td><a title="Editar Registro" type="button" href="formularioactualizaracercadenosotros.php?idnosotros='+post.id+'" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square" "></i></a></td>  <td><button title="Eliminar Registro" type="button" class="btn btn-outline-danger btneliminar" id="'+post.id+'"> <i class="fas fa-trash"></i> </button></td> </tr>');
              // $('#tBody').append('<tr id="'+post.id+'"><td>'+post.id+'</td><td>'+post.descripcion+'</td><td>'+post.mision+'</td><td>'+post.vision+'</td> </tr>');
            });
        }
      }).fail(function () {
        alert("Error");
      });
    }

    $("#tBody").on("click",".btneliminar",function() {
            let id = $(this).attr('id');
            eliminarNosotros(id);
        });
    
    function eliminarNosotros(id){
      Swal.fire({
        background: '#f3f4f6',
        title: 'Confirmar eliminación',
        text: '¿Desea eliminar el registro #' + id + '?',
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
      .then((result) => {
        if (result.isConfirmed) {
          //Codigo para eliminar el registro
          jQuery.ajax({
          url:'controllers/eliminaracercadenosotros.php',
          type:'POST',
          dataType:'JSON',
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

<div style="margin-top: 15%;">
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