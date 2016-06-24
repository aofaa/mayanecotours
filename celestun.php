<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Celestun";
}else{
  $titulo="Celestún";
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
    <img src="images/banner_interiores/celestun.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/celestun.jpg" class="banner-interiores">
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
              In mayan language means “Horror stone”.
            </p>
            <p>
              The Biosphere Reserve Estuary Celestun declared as such in 2000, in order to preserve the fragile ecosystem of hypersaline estuaries, some shallow lakes and high concentration of salts that are next to other lakes of the peninsula, home to the only colony of pink flamingo in the north hemisphere.
            </p>
            <p>
              It has a landscape with great diversity of coastal tropical ecosystems, from mangroves and dunes, through various types of lowland rainforest. As a result, it houses a large variety of wildlife species (about 600) which highlighted the high number of fish and birds , besides being remarkable the presence of species that live only in that particular region.
            </p>
            <p>
              Celestun is located 90 km from the city of Merida, on the west coast of Yucatan.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <p>
              Significa en lengua maya “Espanto de piedra”.
            </p>
            <p>
              La Reserva de la Biosfera Ría Celestún fue decretada como tal en el año 2000, con el fin de preservar el frágil ecosistema formado por los esteros hipersalinos, algunas lagunas de baja profundidad y alta concentración en sales que son junto a otras lagunas de la Península, el hogar de la única colonia de flamenco rosado en el hemisferio norte.
            </p>
            <p>
              Posee un paisaje con gran diversidad de ecosistemas tropicales costeros, que van desde manglares hasta dunas, pasando por varios tipos de selva baja. Como consecuencia, alberga una importante variedad de especies de fauna (alrededor de 600), de las cuales destacan el elevado número de peces y aves, además de ser notable la presencia de especies que únicamente habitan en esa determinada región.
            </p>
            <p>
              Celestún se encuentra a 90 km de la ciudad de Mérida, en la costa poniente del estado de Yucatán.
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
                This colorful coastal port is where a large variety of exotic bird species can be seen. These exotic birds include the fabulous pink flamingos that use Celestun as their nesting grounds after the long flights from the eastern parts of the Yucatan coast.
              </p>
              <p>
                Visitors to Celestun will also find refreshing waters in the fresh water springs that are hidden in the natural tunnels formed in the mangroves.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Boat trip into the mangroves and to see the flamingos</li>
                <li>Certified guide</li>
                <li>Seafood lunch (including shrimp cocktail and fish fillet)</li>
                <li>Return to your hotel at 4:30 p.m.</li>
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
                <span>Note:</span><br>
                The sighting of flamingos is not guaranteed, because it depends on factors such as weather conditions, seasonal migration and others.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Un puerto lleno de color, donde conviven las especies más exóticas de la geografía yucateca, como el flamenco rosa, que ofrece un espectáculo inigualable con sus peculiares vuelos rasantes.
              </p>
              <p>
                Celestún ofrece al visitante la oportunidad de mitigar el calor en las dulces y frescas aguas que emanan de los ojos de agua, escondidos en los túneles naturales que se forman con las ramas del mangle, y a donde se llega en botes conducidos por los pobladores que ofrecen recorridos amenizados con historias sobre el lugar.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida de su hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Guía certificado durante el recorrido</li>
                <li>Paseo en lancha por la Ría de Celestún</li>
                <li>Comida a base de mariscos (cóctel de camarones, filete de pescado al gusto)</li>
                <li>Regreso a su hotel a las 4:30 p.m.</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Bebidas<br>
                • Propinas
              </p>
              <p>
                <span>Recomendaciones:</span><br>
                Llevar sombrero o gorra, ropa cómoda, traje de baño, toalla, cámara fotográfica, repelente de insectos y protector solar biodegradable.
              </p>
              <p>
                <span>Nota:</span><br>
                El avistamiento de flamencos no está garantizado, ya que depende de factores como las condiciones climáticas, temporada de migración y otros.
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
            <img src="images/thumbnail_interiores/14_celestun.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h1>Departures: <span>9:00 a.m. - 4:30 p.m.</span></h1>
                <?php
              }else{
                ?>
                <h1>Salidas: <span>de 9:00 a.m. a 4:30 p.m.</span></h1>
                <?php
              }
              ?>
              <table>
                <tr>
                  <td><a href="https://www.youtube.com/watch?v=nPo8gjIl-Mk" target="_blank"><img src="<?php echo $_SESSION['lang']=='en'?'images/eng/video.png':'images/video.png'; ?>" class="img-responsive btn-video"></a></td>
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
