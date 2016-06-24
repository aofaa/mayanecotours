<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {

  $titulo="Who we are?";

}else{

  $titulo="Quiénes somos";
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
<section class="bg-quienes-somos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div id="quienes-somos">
          <h1><?php echo ($_SESSION['lang']=='en')? 'Who we are?':'Quiénes Somos'; ?></h1>

          <?php
            if($_SESSION['lang']== 'en') {
              ?>
              <p>
                Mayan Ecotours is an agency dedicated to planning, developing and operating unique tours with a commitment to minimum impact for the places to visit.
                Our company is integrated with specialized guides trained in speleology, diving, cave diving, vertical rescue, cave rescue, first aid, etc.
              </p>
              <p>
                We are conscious about the natural and cultural wealth for our country and have a comparative advantage for becoming one of the most attractive places in the world speaking in terms of landscapes, diversity, interesting places, natural and cultural areas. We are determined to offer customized service and apply strategies for responsible eco-tourism without improvised attitudes.
              </p>
              <h1>Mission statement</h1>
              <p>
                To provide knowledge and food-for-thought thought visits to relatively unaltered geographical areas while enjoying and appreciating these natural attractions in their pure state.
              </p>
              <h1>Our vision</h1>
              <p>
                Support sustainable development by promoting the active participation of local Mayan villages, in the decision making process for planning and in the distribution of benefits.
                Because ecotourism has an important role in the fight against poverty, as established in the World Summit on Sustainable Development (WSSD) held in Johannesburg, South Africa in 2002.
                Mayan Ecotours is dedicated to helping the indigenous communities achieve a better quality of life.
              </p>
              <?php
            }else {
              ?>
              <p>
                Mayan Ecotours es una agencia dedicada a la planeación, desarrollo y operación de recorridos turísticos
                alternativos, con el compromiso de un mínimo impacto a los lugares visitados. Nuestra empresa está
                integrada por guías especializados y certificados.
              </p>
              <p>
                Empeñados en ofrecer un servicio personalizado y estrategias de ecoturismo responsabile sin actitudes
                improvisadas. Con alternativas atractivas para todo aquel que busca un equilibrio entre conocimiento,
                naturaleza y diversión.
              </p>
              <h1>VISIÓN</h1>
              <p>
                Fomentar el desarrollo sustentable a través de la participación activa de las poblaciones locales en los
                procesos de planificación y en la distribución de sus beneficios. Porque el ecoturismo tiene un papel
                significativo en la lucha contra la pobreza tal como ha sido reconocido en la Cumbre de Desarrollo
                Sostenible efectuado en Johannesburgo Sudáfrica en 2002. Es por sus características una oportunidad para
                las comunidades rurales de obtener una mejor calidad de vida y para nosotros Mayan Ecotours la
                oportunidad de contribuir con nuestras comunidades indígenas.
              </p>
              <?php
            }
          ?>
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
</body>
</html>
