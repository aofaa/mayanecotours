<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Xcambo & Progreso | Archaeological site, kayak and beach";
}else{
  $titulo="X’cambó y Progreso | Sitio arqueológico, kayak y playa";
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
    <img src="images/banner_interiores/kayak_xcambo_progreso.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/kayak_xcambo_progreso.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Xcambo & Progreso ';}else{echo'X’cambó y Progreso';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'Archaeological site, kayak and beach';}else{echo'Sitio arqueológico, kayak y playa';} ?></span></h1>
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
            <h2>XCAMBO</h2>
            <p>
              Maya means "place of the virgin or maiden, or the waning moon ". It is considered by experts as one of the most extensive areas on the mainland coast, with large buildings.
            </p>
            <p>
              It sits on the wet forest swamp, just 2 kilometers from the coast. It defined as a port that was very important for business development and salt industry of pre-Hispanic times, mainly during the Early Classic period (B.C. 250-600 A.D.).
            </p>
            <p>
              On the site, you can admire the Temple of the Cross a large stepped base with a cross on top and the Temple of Sacrifices, and the chapel of the Virgin.
            </p>
            <p>
              XCambo is located on the Yucatan coast, in the municipality of Dzemul.
            </p>
            <h2>PROGRESO</h2>
            <p>
              Here you can take a stroll by the seafront, enjoy the breeze and savor the delicious regional food in the many restaurants that border the port’s seafront.
            </p>
            <p>
              Thanks to its modern deep-sea port, a tourist meeting point and a border open to commercial exchange with the Gulf of Mexico and the Caribbean Sea. Nowadays it is the arrival point of numerous cruises from all over the world, out of which an endless number of passengers disembark to enjoy not only its natural charm and its exquisite flavor of this historic port, but also the peace and tranquility of its people.
            </p>
            <p>
              Its superb position within the Yucatan Peninsula and its touristic infrastructure makes the city of Progreso the most important port of the state. It is an optimal spot for practicing the most varied aquatic sports: such as snorkeling, windsurfing and kayaking.
            </p>
            <p>
              It is located 36 km north of Merida on highway 261. You will find a traditional market, a plaza, restaurants, hospitals, hotels, foreign exchange houses, taxis, banks and gift shops with traditional crafts.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <h2>X’CAMBÓ</h2>
            <p>
              Del maya significa “El lugar de la virgen o de la doncella, o de la luna menguante”. Es considerada por los expertos como una de las zonas de mayor extensión en la costa peninsular, con edificios de grandes dimensiones. Está asentada sobre el bosque húmedo de la ciénega, a tan solo 2 kilómetros de la costa. Se ha definido como un puerto que fue muy importante para el desarrollo comercial y salinero de la época prehispánica, principalmente durante el periodo Clásico Temprano (a.C. 250-600 d.C.).<br>
              En el sitio podrás admirar el Templo de la Cruz, un gran basamento escalonado con una cruz en su parte superior y el Templo de los Sacrificios, así como la capilla de la Virgen.<br>
              X’cambó se encuentra ubicada en la costa yucateca, en el municipio de Dzemul.
            </p>
            <h2>PROGRESO</h2>
            <p>
              En este lugar se puede caminar por el malecón, disfrutar de la brisa y saborear la deliciosa comida regional en los muchos restaurantes que bordean el malecón del puerto.<br>
              Gracias a su moderno puerto de altura, punto de enlace turístico y frontera abierta al intercambio comercial con el Golfo de México y el Mar Caribe, hoy en día es el punto de arribo de numerosos cruceros turísticos de todo el mundo, de los cuales desembarcan un sinnúmero de pasajeros que disfrutan no solo de su encanto natural y su exquisito sabor de puerto histórico, sino de la paz y tranquilidad de su gente.<br>
              Su inmejorable posición en la península de Yucatán y su infraestructura turística instalada hacen de Progreso el puerto más importante del estado. Es un sitio óptimo para la práctica de los más variados deportes acuáticos: tablavela, windsurf, kayak.<br>
              Se localiza al norte, a 36 km de Mérida por la carretera núm. 261. Encontrará un mercado típico, una plaza, restaurantes, hospitales, hoteles, casas de cambio, taxis, bancos y tiendas de artesanías.
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
                As you wind your way through these amazing mangroves in your kayak, your guide will explain the importance of this sensitive part of the ecosystem. Afterwards, you will head east to the archeological zone of Xcambo, a Mayan city of grand importance. This is where salt was produced and commercialized with the other great Mayan cities. After this visit, you will return to Progreso for lunch on the beach under the shade of a thatched roof. After lunch, enjoy a stroll on the seaside walk “malecón” along with a typical “marquesita” – a large, rolled wafer with cheese inside.
              </p>
              <p>
                This trip offers an attractive combination of history, fun, adventure and nature.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Specialized guide</li>
                <li>Kayak trip in the mangroves</li>
                <li>Flamingo watching along with other marine birds</li>
                <li>Visit to Progreso beach</li>
                <li>Return to hotel at 5:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Lunch<br>
                • Beverages<br>
                • Entrance to Xcambo<br>
                • Tips

              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, towel, and biodegradable sun block and repellent.
              </p>
              <p>
                <span>Note:</span><br>
                This tour operates with minimum 4 people, however contact us for availability.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Navegamos en kayak por la ciénaga, entre los caminos ocultos de los manglares; posteriormente visitamos la zona arqueológica de X’cambó, una antigua ciudad maya de gran importancia que producía y comercializaba sal con otras ciudades de la región.
              </p>
              <p>
                Tras visitar el sitio arqueológico, nos dirigimos a la playa de Progreso para disfrutar de una deliciosa comida frente al mar y bajo la sombra de sus palapas. Finalizamos con una caminata por el malecón, un lugar lleno de vida y movimiento. Una combinación atractiva entre historia, diversión, aventura y naturaleza.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida del hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Guía español-inglés</li>
                <li>Entrada a la ciénaga</li>
                <li>Recorrido en kayak a través del mangle</li>
                <li>Observación de aves marinas</li>
                <li>Estancia en la playa de Progreso</li>
                <li>Regreso al hotel a las 5:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Entrada a X’cambó<br>
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
              <img src="images/actividades/01.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/02.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/04.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/21_progreso.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h1>Departures: <span>9:00 a.m. - 5:00 p.m.</span></h1>
                <?php
              }else{
                ?>
                <h1>Salidas: <span>de 9:00 a.m. a 5:00 p.m.</span></h1>
                <?php
              }
              ?>
              <table>
                <tr>
                  <td><a href="https://www.youtube.com/watch?v=LOxIycVJWLc" target="_blank"><img src="<?php echo $_SESSION['lang']=='en'?'images/eng/video.png':'images/video.png'; ?>" class="img-responsive btn-video"></a></td>
                  <td><?php include('includs/btn_reserva.php'); ?></td>
                </tr>
              </table>
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
