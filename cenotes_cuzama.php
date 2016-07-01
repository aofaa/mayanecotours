<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Cuzama | Visit two cenotes";
}else{
  $titulo="Cuzamá | Visita a dos cenotes";
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
    <img src="images/banner_interiores/cenotes_cuzama.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/cenotes_cuzama.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Cuzama ';}else{echo'Cuzamá';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'Visit two cenotes';}else{echo'Visita a dos cenotes';} ?></span></h1>
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
                The cenotes of Cuzama are among the most beautiful in the Yucatan. To visit the cenotes you get to take a truck; a carriage pulled by mules or horses on rails.  These were used years ago to transport sisal from the plantation to the processing machinery.
              </p>
              <p>
                Haciendas were born and lived during the henequen boom of the late 1800’s. By the mid-1940’s, when synthetic fibers were invented, the henequen industry fell sharply and with it, the splendor of the haciendas. In the last decade of the twentieth century, many of the Yucatan haciendas regained their splendor and are now places with perfect harmony for rest, reflection and meditation, but above all to offer visitors a unique experience in the Yucatan.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Specialized guide</li>
                <li>Snorkel equipment and life jacket</li>
                <li>Horse drawn Truck</li>
                <li>Lunch</li>
                <li>Entrance fees</li>
                <li>Visit the Hacienda</li>
                <li>Return to hotel at 5:00 p.m.</li>
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
                This tour operates with minimum 4 people, however contact us for availability.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Los cenotes de Cuzamá, entre los más bellos de Yucatán. Se llega al tomar un truck, transporte tirado por mulas o caballos sobre rieles, los cuales se utilizaron para transportar hojas de henequén de las plantaciones al cuarto de maquinaria de las haciendas.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida de su respectivo hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Visita a dos impresionantes cenotes</li>
                <li>Guía especializado durante el recorrido.</li>
                <li>Equipo de esnórquel y chaleco de flotación</li>
                <li>Paseo en truck</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Bebidas<br>
                • Propinas

              </p>
              <p>
                <span>Recomendaciones:</span><br>
                Llevar sombrero o gorra, ropa cómoda, traje de baño, toalla, cámara fotográfica, repelente de insectos y protector solar biodegradable.
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
              <img src="images/actividades/02.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/03.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/05.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/08_cuzama.jpg" class="img-responsive img-foto-interior center-block">
            <div class="bg-salidas1">
              <div id="bg-salidas2">
                <img src="images/combi.png" class="img-combi">
                <?php
                if($_SESSION['lang']=='en')
                {
                  ?>
                  <h1>Departures:</h1>
                  <p>daily</p>
                  <?php
                }else{
                  ?>
                  <h1>Salidas:</h1>
                  <p>todos los días</p>
                  <?php
                }
                ?>
              </div>
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
