<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Hacienda Sotuta de Peon";
}else{
  $titulo="Hacienda Sotuta de Peón";
}

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
$host     = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
$currentUrl = $protocol . '://' . $host . $script;
$currentUrl;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mayan Ecotours - Ecoturismo en Yucatan, Mexico - <?php echo $titulo; ?></title>
<meta name="keywords" content="Tours Yucatan, agencia de viajes Yucatan, ecoturismo yucatan, ecotourism Mexico, Yucatan travel agency, Esnorquel, Snorkel, Kayak, Espeleología, Ecoturismo, México, Cuevas,  
Rappel, Exploración, Tours, Expedición, Viajes, Aventura, Adrenalina, Vacaciones, Buceo, Ecotours, 
Eco Tours, Maya, Mayan, Chichen-Itza, Uxmal, Celestún, Reserva, Flamingos, Progreso, Dzibilchaltun, 
Aguas Sagradas, Mayan Eco Tours, Playa, Mar, Agua, Inframundo Maya, Viajes, Excursiones, Haciendas, 
Henequén, Sisal, Truck, Vida Maya">
<meta name="description" content="Contiene el tour de cenotes, Mayan Ecotours">
<meta name="author" content="mayanecotours">

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include('includs/analytics.php'); ?>

<?php include('includs/menu.php'); ?>
<section class="hidden-xs">
    <div class="bg-form-interior">
      <?php include('includs/form_interior.php'); ?>
    </div>
    <img src="images/banner_interiores/hacienda.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/hacienda.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php echo $titulo; ?></h1>
      </div>
    </div>
  </div>
</section>

<!--formulario movil-->
<?php include('formulario_interiores_movil.php') ?>
<!--------end-------->

<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <?php
        if($_SESSION['lang']=='en')
        {
          ?>
          <div id="info-general">
            <h1>GENERAL INFORMATION</h1>
            <p>
              Sotuta de Peon is one of the lasts henequen haciendas that exist in full production and that history is alive. This tour represents an extraordinary experience where beauty, comfort and adventure are the protagonists of a journey through the peninsular glorious past.
            </p>
            <p>
              Visit this hacienda is travel to past and go back 100 years ago, the tour is done in a peculiar “truck”, pulled by mules with metal wheels that travel on rails. Extensive henequen plantations welcome us as a prelude to the tour that offers you Sotuta de Peon, a live hacienda.
            </p>
            <p>
              In the past, powerhouses but today contemporary yucatecan food restaurants; before stables and corrals, now pools and spas; old stately rooms are now properties peculiar charm, Yucatan to the world.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <p>
              Sotuta de Peón es una de las pocas haciendas henequeneras que existen en plena producción y en la que la historia se encuentra viva. Recorrer sus instalaciones representa una experiencia extraordinaria en la que la belleza, el confort y la aventura son los protagonistas de una travesía por el glorioso pasado peninsular.
            </p>
            <p>
              Visitar la Hacienda Sotuta de Peón es viajar al pasado y remontarnos 100 años atrás; el recorrido se realiza en un peculiar truck, jalado por mulas, con ruedas metálicas que transitan sobre rieles. Extensos plantíos de henequén nos reciben como preámbulo al tour que te adentrará en Sotuta de Peón, una hacienda viva.
            </p>
            <p>
              En tiempos pasados casas de máquinas, hoy en día restaurantes de comida yucateca contemporánea; antes establos y corrales, ahora albercas y spas; antiguas estancias señoriales son ahora propiedades de encanto peculiar, de Yucatán para el mundo.
            </p>
          </div>
          <?php
        }
        ?>
        <hr class="hr-interiores">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php
          if($_SESSION['lang']=='en')
          {
            ?>
            <div id="caracteristicas">
              <h1>TOUR DETAILS</h1>
              <p>
                To visit Hacienda Sotuta de Peon is to travel into the past and go back to the history of haciendas of over 100 years ago. The trip is done by truck, pulled by mules, with metallic wheels running on long cauville rails. Extensive henequen plantations welcome us as an introduction to the tour in which we know intimately Sotuta de Peon de Peon, a living past.
              </p>
              <p>
                In other times, machinery houses, today restaurants serving contemporary Yucatan cuisine; before, stables and farmyards, now, pools and spas; stately ranches of old, today real estate of peculiar charm from Yucatan to the world.
              </p>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Transportation with A/C</li>
                <li>Travel and truck ride</li>
                <li>Lunch</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Beverages<br>
                • Tips
              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, towel, and biodegradable sun block and repellent.
              </p>
              <p>
                <span>Notes:</span><br>
                We have three meeting points for this tour:<br>
                Starbucks Gran Plaza Mall - 8:10 a.m.<br>
                Starbucks at Paseo de Montejo - 8:25 a.m.<br>
                Sotuta de Peon Office, located at Street 55 # 497 between 58 and 60, Downtown - 8:40 a.m.<br>
              </p>
              <p>
                The return is approximately at 4:00 p.m. at the same point where transport was taken.
              </p>
              <p>
                To book this tour, you need to pay full.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Transportación con aire acondicionado</li>
                <li>Recorrido y paseo en truck</li>
                <li>Comida en restaurante de la hacienda</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Bebidas<br>
                • Propinas
              </p>
              <p>
                <span>Recomendaciones:</span><br>
                Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos y protector solar biodegradable.
              </p>
              <p>
                <span>Nota:</span><br>
                Hay  tres puntos de salida para este  tour:<br><br>
                1. Starbucks Gran Plaza a las 8:10 a.m.<br>
                2. Starbucks Paseo de Montejo a las 8:25 a.m.<br>
                3. Oficina Sotuta de Peón, ubicada en la calle 55 # 497 x 58 y 60 Centro, a las 8:40 a.m.<br><br>
                El regreso es aproximadamente a las 4:00 p.m. en el mismo punto donde se tomó el transporte.<br>
                Para reservar este tour, se pide realizar el pago total del mismo.

              </p>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="row" id="actividades">
            <div class="col-xs-4 col-sm-2 col-md-2">
              <?php
              if($_SESSION['lang']=='en'){echo'<p class="txt-activides">Activities<br>Available</p>';}else{echo'<p class="txt-activides">Actividades<br>disponibles</p>';}
              ?>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/02.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/10_sotuta.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h2>Departures:</h2>
                <span>Starbucks Gran Plaza - 8:10 a.m. <br>Starbucks Paseo de Montejo - 8:25 a.m. <br> Oficina Sotuta de Peon - 8:40 a.m.</span>
                <?php
              }else{
                ?>
                <h2>Salidas:</h2>
                <span>Starbucks Gran Plaza - 8:10 a.m. <br>Starbucks Paseo de Montejo - 8:25 a.m. <br> Oficina Sotuta de Peón - 8:40 a.m.</span>
                <?php
              }
              ?>
              <?php include('includs/btn_reserva.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('includs/footer.php'); ?>
<a href="#" class="btn back-to-top btn-dark btn-fixed-bottom"> <span class="glyphicon glyphicon-chevron-up"></span> </a>
<?php include('includs/form_paypal.php'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/menu.js"></script>
<!--hover isotope-->
<script src="js/wow.min.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/isotope.pkgd.min.js"></script> 
<script src="js/main.js"></script>

<!-- Validation -->
<?php include('includs/validacion.php'); ?> 

<script type="text/javascript">

// TODO: make customizable
$(document).ready(function () {
  var duration      = 420;
  var showOffset    = 220;
  var btnFixed      = '.btn-fixed-bottom';
  var btnToTopClass = '.back-to-top';

  $(window).scroll(function () {
    if ($(this).scrollTop() > showOffset) {
      $(btnFixed).fadeIn(duration);
    } else {
      $(btnFixed).fadeOut(duration);
    }
  });

  $(btnToTopClass).click(function (event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  });
});
</script>
<?php
include_once ('firma_imagina.php');
?>
</body>
</html>
