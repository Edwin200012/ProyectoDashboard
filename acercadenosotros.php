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
    $titulo = "Acerca De Nosotros";
    include_once ("plantilla/titulo.php");
?>

<section class="section dashboard">
     
            <div style="width: 100%;" class="col-xxl-4 col-md-6">
              <div style="width: 100%;" class="card info-card sales-card">
                <div style="width: 100%;" class="card-body">
                  <h5 class="card-title">Acerca de Nosotros</h5>
                  <div style="width: 100%;" class="row content">
                    <div>
                    <p class="centered-text" style="margin-bottom: 2%;">
                      En Arsha, estamos comprometidos a ofrecer soluciones de software innovadoras y de alta calidad que impulsen el éxito de nuestros clientes. 
                      Desde nuestra fundación en 2010, hemos estado liderando el camino en el desarrollo de software, proporcionando servicios personalizados que satisfacen las necesidades únicas de cada cliente.<br>
                      Arsha fue fundada por un equipo de apasionados por la tecnología que compartían una visión común: simplificar la vida de las personas a través de soluciones digitales inteligentes. 
                      Lo que comenzó como un pequeño proyecto en un garaje se ha convertido en una empresa reconocida a nivel nacional por su excelencia en el desarrollo de software.
                    </p>
                    </div>
                    <div class="col-lg-6">
                      <h3>Misión</h3>
                      <p>
                      Nuestra misión en Arsha es aprovechar la tecnología para transformar la forma en que las empresas operan y se relacionan con sus clientes. 
                      Estamos dedicados a proporcionar soluciones de software que sean intuitivas, confiables y que impulsen el crecimiento empresarial.
                      En Arsha, estamos comprometidos a ofrecer soluciones de software innovadoras y de alta calidad que impulsen el éxito de nuestros clientes.
                      Desde nuestra fundación en 2010, hemos estado liderando el camino en el desarrollo de software, proporcionando servicios personalizados que satisfacen las necesidades únicas de cada cliente.
                     </p>
                    </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                     <h3>Visión</h3>
                      <p>
                      En Arsha, nuestra visión es liderar la vanguardia de la innovación tecnológica, ofreciendo soluciones de software de vanguardia que transformen industrias y mejoren la vida de las personas en todo el mundo.
                      Nos esforzamos por ser reconocidos como el socio preferido para empresas que buscan impulsar su éxito a través de la tecnología, destacando por nuestra dedicación a la excelencia, la innovación constante y la colaboración con nuestros clientes para superar desafíos y alcanzar metas ambiciosas.
                    </p>
                </div>
                  </div>


                </div>
              </div>
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