<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Rappel & snorkel in cave and lunch at colonial hacienda";
}else{
  $titulo="Rappel y esnórquel en  gruta y comida en una hacienda colonial";
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
    <img src="images/banner_interiores/rappel_esnorquel_gruta.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/rappel_esnorquel_gruta.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h2><?php echo $titulo; ?></h2>
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
            <h2>CAVES</h2>
            <p>
              In general, the caves are formed in a manner similar to the cenotes, but there are some places where water table is very deep, so they are kept dry the cavities formed by seepage and landslides.
            </p>
            <p>
              Water tanks may originate from them by the runoff from the walls and the water cannot have the same level as neighboring cenotes. The diameter of the inputs is commonly less than the sinkholes.
            </p>
            <p>
              The water is usually found near the lateral margins only, as the rocks that have fallen from the vaulted ceilings have been raising the floor level in the center.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <h2>GRUTAS</h2>
            <p>
              En general, las grutas se forman de manera semejante a los cenotes, pero en lugares donde el nivel freático es muy profundo, por lo que se conservan secas las cavidades formadas por las filtraciones, y los desprendimientos. Los depósitos de agua pueden originarse en ellas por el escurrimiento proveniente de las paredes y pueden no tener el agua al mismo nivel que los cenotes vecinos. El diámetro de las entradas comúnmente es menor que el de los cenotes. El agua se encuentra generalmente cerca de los márgenes laterales únicamente, pues las rocas que han caído de los techos abovedados han ido levantando el nivel del piso en el centro.
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
                You will do a 17 meter rappel to reach an incredible cenote that is inside the cave!!
              </p>
              <p>
                We supply all the equipment for the rappel and for the cenote snorkeling, plus hard hats with lights for the cave tour. In the cave you will see stalactites and stalagmites as you traverse the caves paths. We then head on to an important hacienda where henequen was processed during the “Green gold period”; here we’ll have lunch and surely interesting conversation about the day adventures.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9:00 am.</li>
                <li>Transportation with A/C (bus or van).</li>
                <li>Specialized guide.</li>
                <li>17 meter rappel.</li>
                <li>Snorkeling in a cenote.</li>
                <li>Cave tour.</li>
                <li>All the equipment needed for the different activities (hard hats, ropes, lights, snorkel gear, life jackets, etc.)</li>
                <li>First Aid kit.</li>
                <li>Return to your hotel at 5:00 pm.</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Lunch<br>
                • Beverages<br>
                • Tips
              </p>
              <p>
                <span>Recommendations:</span><br>
                Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos y protector solar biodegradable.
              </p>
              <p>
                <span>Note:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, towel, and biodegradable sun block and repellent
              </p>
              <p>
                This tour operates with minimum 4 people, however contact us for availability.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                Nos dirigimos a las grutas donde haremos un rappel de 17 metros para llegar a un hermoso cenote dentro de la misma gruta, posteriormente haremos esnórquel en el cenote. Saldremos de la caverna, recorriendo sus pasadizos llenos de estalactitas y estalagmitas.
              </p>
              <p>
                Una importante hacienda henequenera nos espera para la comida y finalmente caminaremos por sus instalaciones, que nos remontarán a la época gloriosa del llamado “Oro verde”.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida de su hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado (autobús o camioneta tipo VAN)</li>
                <li>Guía español-inglés, especializado en las actividades</li>
                <li>Equipo para las diferentes actividades (cascos, arneses, cuerdas, lámparas, mosquetones, equipo de esnórquel, chaleco de flotación, etc.)</li>
                <li>Entrada a la gruta</li>
                <li>Botiquín de primeros auxilios</li>
                <li>Regreso al hotel a las 5:00 p.m. </li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
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
              <p>
                No apto para niños, mujeres embarazadas, personas de la tercera edad y personas con vértigo.
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
              <img src="images/actividades/05.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/07.jpg" class="img-responsive center-block">
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2">
              <img src="images/actividades/08.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/18_esnorquel.jpg" class="img-responsive img-foto-interior center-block">
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
                  <td><a href="https://www.youtube.com/watch?v=F7UDfVtgijM" target="_blank"><img src="images/video.png" class="img-responsive btn-video"></a></td>
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
