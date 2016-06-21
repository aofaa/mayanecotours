<?php
$titulo="Mayapán | Grutas y esnórquel en cenote";

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
    <div class="bg-form-interior">
      <?php include('includs/form_interior.php'); ?>
    </div>
    <img src="images/banner_interiores/mayapan_grutas_esnorquel.jpg" class="banner-interiores">
</section>
<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1>Mayapán <span class="linea-interior">|</span> <span class="subinteriores">Grutas y esnórquel en cenote</span></h1>
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
          <h2>MAYAPÁN</h2>
          <p>
            Conocida como “Bandera de los Mayas”, la ciudad amurallada de Mayapán es considerada la última gran capital maya, pertenece al periodo posclásico tardío, y pese a no contar con grandes construcciones, se han descubierto más de cuatro mil estructuras arquitectónicas en su territorio.
          </p>
          <p>
            En el centro fueron levantados sus templos, siendo el principal una réplica del Castillo de Chichén Itzá pero en menor dimensión, al cual se le nombró Kukulcán. Aquí también se pueden observar edificios cívicos, administrativos y religiosos, así como las residencias de la clase gobernante. Los edificios redondos conocidos como observatorios y los pequeños santuarios son muy representativos de esta ciudad. 
          </p>
          <p>
            Abierta al público todos los días en horario de 8:00 a.m. a 3:00 p.m., Mayapán se localiza en el kilómetro 45 de la carretera Mérida-Acanceh, en la misma dirección de la llamada “Ruta de los Conventos”.
          </p>
          <h2>GRUTAS</h2>
          <p>
            En general, las grutas se forman de manera semejante a los cenotes, pero en lugares donde el nivel freático es muy profundo, por lo que se conservan secas las cavidades formadas por las filtraciones, y los desprendimientos. Los depósitos de agua pueden originarse en ellas por el escurrimiento proveniente de las paredes y pueden no tener el agua al mismo nivel que los cenotes vecinos. El diámetro de las entradas comúnmente es menor que el de los cenotes. El agua se encuentra generalmente cerca de los márgenes laterales únicamente, pues las rocas que han caído de los techos abovedados han ido levantando el nivel del piso en el centro.
          </p>
        </div>
        <hr class="hr-interiores">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div id="caracteristicas">
            <h1>CARACTERÍSTICAS DEL TOUR</h1>
            <p>
              <span>Incluye:</span><br>
              <ul class="listas">
                  <li>Salida de su hotel a las 9:00 a.m.</li>
                  <li>Transportación con aire acondicionado (autobús o camioneta tipo VAN)</li>
                  <li>Guía especializado durante actividades y recorrido</li>
                  <li>Entrada a las grutas</li>
                  <li>Equipo de esnórquel</li>
                  <li>Regreso a su hotel a las 5:00 p.m.</li>
              </ul>
            </p>
            <p>
              <span>No incluye:</span><br>
              • Entrada a la zona arqueológica<br>
              • Comida<br>
              • Propinas
            </p>
            <p>
              <span>Recomendaciones:</span><br>
              Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos y protector solar biodegradable.
            </p>
            <p>
              <span>Nota:</span><br>
              Este tour opera con un mínimo de 4 personas, de cualquier manera contáctenos para conocer disponibilidad.
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
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/03.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/05.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/07.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/16_mayapan.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <h1>Salidas: <span>de 9:00 a.m. a 5:00 p.m. </span></h1>
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
