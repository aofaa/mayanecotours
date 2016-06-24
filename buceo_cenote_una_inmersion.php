<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Diving | In cenote, single dive";
}else{
  $titulo="Buceo | En cenote, una inmersión";
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
    <img src="images/banner_interiores/buceo_inmersion.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/buceo_inmersion.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Diving ';}else{echo'Buceo';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'In cenote, single dive';}else{echo'En cenote, una inmersión';} ?></span></h1>
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
              By tradition, cenotes are a distinctive insignia of the natural Yucatecan landscape. Sunlight filtering through the cracks in the rocks and projecting onto the transparent water is a visual banquet for nature lovers.
            </p>
            <p>
              Cenotes vary in size and shape according to their location. They can be as irregular as the sunken ground which makes them possible. Some are open in the form of a lake or pool, other cenotes, are half hidden in the caverns,  still other cenotes are completely enclosed except for the sprinkling of sunlight through the cracks above and some are only accessible by following underground passages.
            </p>
            <p>
              Although no two forms are alike, it can be said that cenotes share certain characteristics. The water is cool and fresh since it emerges from underground deposits. It is clear and rich in flora and fauna giving rise to an ecosystem in almost perfect balance, and spectacularly beautiful.
            </p>
            <p>
              For many years the cenotes of Yucatan have been the object of speculation and legend, since they played a determining role in the development of the Maya civilization. Immense communities grew up around them, making them the hub of the city. An abundant quantity of offerings and jewelry has been recovered from the floor of the cenotes, apparently thrown into the depths after human sacrifices. Ceramic remains and utensils destined for religious ceremonies have also been found.
            </p>
            <p>
              As well as their exquisite natural beauty, cenotes have an important archaeological value and are perfect for ecotourism activities, such as cave diving, submerging and penetrating the cave depths, exploring sub aquatic galleries, and finding your way through the labyrinth of underwater tunnels is an unforgettable experience for any enthusiast. Besides diving and generally getting to know the place, there’s also rappelling and swimming to enjoy, while you take in the beauty and mystery which has taken nature tens of millions of years to shape.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <p>
              El cenote es uno de los atractivos que distingue al estado de Yucatán, cuyo término proviene del maya “dzonot”, que significa “cavidad con agua”. Los cenotes son formaciones únicas de esta región, y además de ser un recurso primordial para la obtención de agua fresca en la selva, constituían lugares sagrados para los mayas, representando la entrada al inframundo espiritual.
            </p>
            <p>
              El espectacular paisaje subterráneo, rodeado de estalactitas y estalagmitas hacen de cada cenote un lugar digno de admiración; la luz del sol filtrada por agujeros entre las rocas y proyectada sobre las aguas verdes, cristalinas o turquesas se conjugan para ofrecer un deleite visual a los visitantes.
            </p>
            <p>
              Los cenotes varían en forma y tamaño, según el lugar donde se ubiquen. Hay de tipo abierto a manera de lago y ojo de agua; semiocultos en cavernas; los cerrados, aunque por lo general tienen alguna abertura donde se filtra la luz del sol, y algunos cenotes a los que solo es posible acceder después de una caminata por pasillos subterráneos. El agua fresca que emerge de ellos es clara y rica en flora y fauna lo cual da origen a un ecosistema de equilibrio perfecto.
            </p>
            <p>
              Objeto de especulaciones y leyendas, los cenotes jugaron un papel determinante en el desarrollo de la civilización maya. Grandes asentamientos de esta cultura se formaron a su alrededor además de ser un punto clave en la religión y culto a sus dioses.
            </p>
            <p>
              Combinación de importante valor arqueológico y exquisita belleza natural, los cenotes son atractivos lugares para el desarrollo de actividades ecoturísticas, especialmente del espeleobuceo. Por lo tanto, todos aquellos que disfrutan de este fascinante deporte, vivirán una experiencia única al sumergirse en las profundidades de estas galerías subacuáticas, además también se puede disfrutar de un chapuzón, nadar y bajar a rappel, dentro de este ambiente mágico.
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
                Those who enjoy this fascinating sport can dive into these wonderful underwater galleries, live a unique and incomparable experience. Enjoy swimming and abseiling, surrounded by the beauty and mystery of cenotes of Yucatan.
              </p>
              <br>
              <p>
                <span>Requirements:</span><br>
              <ul class="listas">
                <li>PADI or other world recognized certification (indispensable).</li>
                <li>Preferably with more than 25 dives registered.</li>
              </ul>
              </p>
              <p>
                <strong>1 DIVE, 45 MINUTES IN ONE CENOTE</strong><br><br>

                The cenotes are full of myths and legends. Diving in the Yucatan cenotes is like diving in the past, it is to know part of our history.  Getting into the clear waters of the Mayas is like floating in the inner space of our culture.  Admire the whimsical formations of nature, enter the Yucatan jungle and enjoy these Paradise flooded places called cenotes enjoying the spectacle of light and shadow produce by sunlight.  Entering the water is indescribable!
                <br><br>

                We invite you to enjoy this dive in a safe environment that is also full of adventure and fun.

              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>An immersion in a beautiful cenote </li>
                <li>Transportation in vehicle with A / C</li>
                <li>Guide cavern diving certificate (Cavern / Dive Master)</li>
                <li>With expertise in rescue and first aid</li>
                <li>Support with people and land surface</li>
                <li>Rescue Team, ropes, carabiners and rappelling equipment </li>
                <li>Diving equipment: tank, belt leads</li>
                <li>Soft drinks</li>
                <li>Entrance fees</li>
                <li>We have oxygen, first aid kit</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Food<br>
                • Tips
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Aquellos que disfrutan este fascinante deporte y sumergirse en estas maravillosas galerías subacuáticas, vivirán una experiencia única e incomparable. Disfruta nadar y practicar rappel, rodeado de la belleza y misterio de los cenotes de Yucatán.
              </p>
              <br>
              <p>
                <span>Requerimientos:</span><br>
              <ul class="listas">
                <li>Copia de certificado en buceo de alguna asociación a nivel mundial (indispensable)</li>
                <li>Preferentemente con más de 25 inmersiones registradas</li>
              </ul>
              </p>
              <p>
                <strong>1 BUCEO DE 45 MINUTOS EN UN  CENOTE</strong><br><br>

                Los cenotes están llenos de mitos y leyendas. Bucear en los CENOTES DE YUCATÁN es como bucear en el pasado, es conocer parte de nuestra historia.<br><br>

                Adentrarnos en las cristalinas aguas de los mayas es como flotar en el espacio interior de nuestra cultura, admirar las formaciones caprichosas de la naturaleza, entrar a la selva de Yucatán y disfrutar estos paradisiacos lugares inundados llamados CENOTES el gozar del espectáculo de luz y sombra que producen los rayos del sol al entrar al agua ¡es indescriptible!<br><br>

                ¿Qué esperas para vivir esta experiencia de aventura con nosotros?<br><br>

                Te invitamos a disfrutar de este buceo dentro de un ambiente de seguridad, aventura y diversión.

              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Una inmersión en un magnífico cenote</li>
                <li>Transportación en vehículo con A/C y seguro de viajero</li>
                <li>Guía certificado en buceo de Cueva (Full Cave) y primeros auxilios</li>
                <li>Apoyo con gente en superficie y terrestre</li>
                <li>Equipo de rescate, cuerdas, mosquetones y equipo de rappel</li>
                <li>Equipo de buceo: tanque, cinturón con plomos</li>
                <li>Bebidas no alcohólicas</li>
                <li>Cuotas de entrada</li>
                <li>Contamos con oxígeno, botiquín de primeros auxilios</li>
                <li>Conocimientos nuevos ¡y mucha diversión!</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Propinas
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
              <img src="images/actividades/06.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/11_buceo.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <h1><?php echo $_SESSION['lang']=='en'?'':'<span>1 inmersión de 45 minutos</span>'; ?></h1>
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <?php include('includs/btn_reserva_cueva.php'); ?>
                <?php
              }else{
                ?>
                <?php include('includs/btn_reserva.php'); ?>
                <?php
              }
              ?>
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
