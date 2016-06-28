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
          <h1><?php echo ($_SESSION['lang']=='en')? 'ABOUT US?':'QUIÉNES SOMOS'; ?></h1>

          <?php
            if($_SESSION['lang']== 'en') {
              ?>
              <p>
                Mayan Ecotours is dedicated to the planning, development and operation of alternative tours.
              </p>
              <p>
                We are committed to providing personalized service using responsible ecotourism strategies while offering attractive options for anyone who seeks a balance between knowledge, nature and fun. Our company is staffed by specialized guides and certificates.
              </p>
              <h1>MISSION</h1>
              <p>
                To guarantee our clients the best service based on our quality standards, seeking the total satisfaction of their recreational needs through our highly trained personnel for a variety of activities.
              </p>
              <h1>VISION</h1>
              <p>
                Consolidate our position as the leader and innovator for providing ecotourism services with the best human resources possible.
              </p>
              <h1>TRAVELING CAN CHANGE OUR MINDS</h1>
              <p>
                Physicians and scientists recommend that we “DISCONNECT”. An effective way to do this is to travel even to a remote corner of our planet.
              </p>
              <p>
                Researchers studied a group of people who walked through a forest for an hour and a half. All mental activity decreased in areas that are generally responsible for the most common diseases.  Then imagine what could happen if someone spends a few days in nature.
              </p>
              <p>
                Leave it all behind for a while, grab your bag and spend a few days in nature and enjoy life.<br>
                <strong>Why not right now?</strong>
              </p>
              <?php
            }else {
              ?>
              <p>
                Mayan Ecotours está dedicada a la planeación, desarrollo y operación de recorridos turísticos alternativos.
              </p>
              <p>
                Estamos empeñados en ofrecer un servicio personalizado y estrategias de ecoturismo responsable. Con atractivas opciones para todo aquel que busca un equilibrio entre conocimiento, naturaleza y diversión. Nuestra empresa está integrada por guías especializados y certificados.
              </p>
              <h1>MISIÓN</h1>
              <p>
                Garantizar a nuestros clientes el mejor servicio basado en nuestros estándares de calidad, buscando la total satisfacción de sus necesidades de recreo a través de nuestro personal altamente capacitado para las diferentes actividades.
              </p>
              <h1>VISIÓN</h1>
              <p>
                Consolidarnos como la agencia líder e innovadora en prestación de servicios ecoturísticos con la mejor calidad humana y profesional.
              </p>
              <h1>VIAJAR PUEDE CAMBIA NUESTRA MENTE</h1>
              <p>
                Médicos y científicos recomiendan “DESCONECTARSE”. Una forma efectiva de hacerlo es VIAJAR y aún más a un rincón remoto de nuestro planeta.
              </p>
              <p>
                Investigadores han estudiado a un grupo de personas que caminaron por un bosque durante hora y media. La actividad mental de todos ellos disminuyó; lo hizo en las áreas que generalmente son responsables de las enfermedades más comunes, entonces imagina lo que podría ocurrir si alguien pasa un par de días en medio de la naturaleza.
              </p>
              <p>
                Deja todo atrás por un tiempo, toma tu mochila y pasa unos días en un lugar natural…y disfruta de la vida.<br>
                <strong>¿Porque no ahora? </strong>
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
