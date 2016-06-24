<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Testimonials";
}else{
  $titulo="Testimonios";
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
<link rel="stylesheet" href="css/slider_testimonios/css/slider.css" type="text/css">

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
  <?php echo ($_SESSION['lang']=='en')?'<img src="images/eng/banner_testimonios.jpg" class="banner-interiores">':'<img src="images/banner_testimonios.jpg" class="banner-interiores">'; ?>
</section>
<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <div id="info-general">

          <div class="flex-container">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <a href="#"><img src="images/testimonios/01.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/02.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/03.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/04.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/05.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/06.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/07.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/08.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/09.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/10.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/11.jpg" /></a>
                </li>
                <li>
                  <a href="#"><img src="images/testimonios/12.jpg" /></a>
                </li>
              </ul>
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


<script src="css/slider_testimonios/js/flexslider-min.js"></script>
<script>
$(document).ready(function () {
  $('.flexslider').flexslider({
    animation: 'fade',
    controlsContainer: '.flexslider'
  });
});
</script>

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
