<?php
$titulo="Uxmal | Luz y sonido";

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
    <img src="images/banner_interiores/uxmal_luz.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/uxmal_luz.jpg" class="banner-interiores">
</section>

<!--formulario movil-->
<?php include('formulario_interiores_movil.php') ?>
<!--------end-------->

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1>Uxmal <span class="linea-interior">|</span> <span class="subinteriores">Luz y sonido</span></h1>
      </div>
    </div>
  </div>
</section>
<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div id="info-general">
          <h1>INFORMACIÓN GENERAL</h1>
          <p>
            Uxmal es una tierra rodeada de leyendas, mitos y anécdotas, se encuentra junto a una serie de colinas conocidas con el nombre de “Puuc” que en lengua maya, significa serranía y que posteriormente fue el nombre asignado al estilo arquitectónico de esa región, ubicada al sur de Yucatán.
          </p>
          <p>
            Se dice que fue fundada por la tribu de los Xiues, alcanzando su máximo florecimiento entre los años 600 y 900 D.C., abarcando el periodo clásico yucateco con una población aproximada de 20 mil habitantes. De acuerdo con datos históricos, su decadencia se debió a una revuelta social que acabo con la élite gobernante.
          </p>
          <p>
            La ciudad se encuentra conformada por 15 edificios distribuidos de norte a sur, en una extensión de aproximadamente dos kilómetros, destacándose La Pirámide del Adivino, La Plaza de los Pájaros, El Cuadrángulo de las Monjas, El Juego de Pelota, El Palacio del Gobernador, La Gran Pirámide y El Palomar, además del grupo norte con La Casa de la Vieja, El Cementerio y El Templo de los Falos.
          </p>
          <p>
            Uxmal es considerada la construcción más hermosa de Mesoamérica por su estilo e imponentes proporciones. La estructura más impresionante es la Pirámide del Adivino, con una altura de más de 35 metros, diseñada de tal modo que su escalinata da cara al oriente, hacia la puesta del sol en el solsticio de verano.
          </p>
          <p>
            Declarada por la UNESCO “Patrimonio Cultural de la Humanidad”, cuenta con un parador turístico que ofrece variedad de servicios y un Museo de Sitio en el cual se exhiben interesantes piezas de piedra tallada y cerámica. 
          </p>
          <p>
            Visita Uxmal todos los días en horario de 8:00 a.m. a 5:00 p.m., y por la noche sé testigo del maravilloso espectáculo de luz y sonido a las 7:00 p.m. (horario de invierno) y a las 8:00 p.m. (horario de verano), donde podrás sumergirte en una verdadera leyenda maya.
          </p>
        </div>
        <hr class="hr-interiores">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div id="caracteristicas">
            <h1>CARACTERÍSTICAS DEL TOUR</h1>
            <p>
              <span>Incluye:</span><br>
              <ul class="listas">
                  <li>Salida desde su respectivo hotel a la 1:00 p.m.</li>
                  <li>Transportación con aire acondicionado (autobús o camioneta tipo VAN)</li>
                  <li>Guía especializado dentro de la zona arqueológica</li>
                  <li>Cena típica yucateca</li>
                  <li>Regreso al hotel a las 10:30 p.m.</li>
              </ul>
            </p>
            <p>
              <span>No incluye:</span><br>
              • Entrada a la zona arqueológica<br>
              • Bebidas<br>
              • Propinas
            </p>
            <p>
              <span>Recomendaciones:</span><br>
              Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos, protector solar y suéter. 
            </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="row" id="actividades">
            <div class="col-xs-4 col-sm-2 col-md-2">
              <p class="txt-activides">Actividades<br>disponibles</p>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/01.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/02.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/07_uxmal.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <h1>Salidas: <span>de 1:00 p.m. a 10:30 p.m.</span></h1>
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
</body>
</html>
