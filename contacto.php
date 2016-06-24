<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Contact";
}else{
  $titulo="Contacto";
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
<section>
  <?php echo ($_SESSION['lang']=='en')?'<img src="images/eng/banner-contacto.jpg" class="banner-interiores">':'<img src="images/banner-contacto.jpg" class="banner-interiores">'; ?>
</section>
<section class="hidden-xs hidden-sm">
    <div class="bg-form-titulo">
      <h1>CONTACTO</h1>
      <p>
        Comunícate con nosotros y te brindaremos mayor información.
      </p>
      <p>
        <img src="images/eng/telefono.png"> <a href="tel:999987-3710">(999) 987-3710</a><br>
        <img src="images/eng/whatsapp.png"> <a href="tel:999105-4614">(999) 105-4614</a>
      </p>
      <p>
        <img src="images/eng/mail.png"> <a href="mailto:info@mayanecotours.com">info@mayanecotours.com</a>
      </p>
      <p>
        Mérida, Yucatán, México.
      </p>
    </div>
    <div class="bg-form-contacto">
      <?php include('includs/form_contacto.php'); ?>
    </div>
    <img src="images/bg-contacto.jpg" class="banner-interiores">
</section>

<section class="visible-xs visible-sm bg360-titulo">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 contacto-titulo360">
        <h1>CONTACTO</h1>
        <p>
          Comunícate con nosotros y te brindaremos mayor información.
        </p>
        <p>
          Tel: <a href="tel:999987-3710">(999) 987-3710</a><br>
          Móvil: <a href="tel:999105-4614">(999) 105-4614</a>
        </p>
        <p>
          <a href="mailto:info@mayanecotours.com">Email: info@mayanecotours.com</a>
        </p>
        <p>
          Mérida, Yucatán, México.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="visible-xs visible-sm bg360-contacto">
  <div class="bg-form-contacto360">
    <?php include('includs/form_contacto_movil.php'); ?>
  </div>
  <img src="images/banner360px/contacto_movil.jpg" class="img-movil">
</section>
<div class="clearfix"></div>
<section class="bg-mapa">
  <div class="map">
    <div id="map"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="titulo-contacto">
        <h1>¡Reserva EL tour DE TU PREFERENCIA ahora!</h1>
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
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
<script src="js/map-dark.js"></script>
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
</body>
</html>
