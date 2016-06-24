<?php
include('includs/session.php');
$titulo="Mayan Ecotours";

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
<title><?php echo $titulo; ?> - Ecoturismo en Yucatan, Mexico - Tour de Cenotes en Yucatán México - Agencia de viajes en Yucatan</title>
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

<!--hover isotope-->
<link rel="stylesheet" href="css/isotope.css">

<!--banner-->
<link rel="stylesheet" href="css/slider_banner/css/demo.css">
<link rel="stylesheet" href="css/slider_banner/css/slippry.css">

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
  <?php
  if($_SESSION['lang']=='en')
  {
    ?>
    <!--empieza slider-->
    <div class="demo_wrapper">
      <div class="demo_block">
        <ul id="banner">
          <li><a href="javascript:void(0);"><img src="images/eng/banner01.jpg" alt="" title="" /></a></li>
          <li><a href="chichen_cenote.php"><img src="images/eng/banner02.jpg" alt="" title="" /></a></li>
          <li><a href="uxmal_comida.php"><img src="images/eng/banner03.jpg" alt="" title="" /></a></li>
          <li><a href="esnorquel_cenotes_hacienda.php"><img src="images/eng/banner04.jpg" alt="" title="" /></a></li>
        </ul>
      </div>
    </div>
    <!--termina slider-->
    <?php
  }else{
    ?>
    <!--empieza slider-->
    <div class="demo_wrapper">
      <div class="demo_block">
        <ul id="banner">
          <li><a href="javascript:void(0);"><img src="images/banner01.jpg" alt="" title="" /></a></li>
          <li><a href="chichen_cenote.php"><img src="images/banner02.jpg" alt="" title="" /></a></li>
          <li><a href="uxmal_comida.php"><img src="images/banner03.jpg" alt="" title="" /></a></li>
          <li><a href="esnorquel_cenotes_hacienda.php"><img src="images/banner04.jpg" alt="" title="" /></a></li>
        </ul>
      </div>
    </div>
    <!--termina slider-->
    <?php
  }
  ?>
</section>
<section class="bg-01">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-4  col-md-6 col-md-offset-6">
        <?php
        if($_SESSION['lang']=='en')
        {
          ?>
          <div id="maravillas">
            <h1>COME AND ENJOY THE<br> MAYAN WONDERS!</h1>
            <p>
              With xx experience years, in Mayan Ecotours we take charge for your solo travel, or with your partner or family becomes an unforgettable adventure, full of visits to legendary places and facilities to unique activities as you wish.
            </p>
            <p>
              From tours in the worldwide famous Mayan pyramids, diving sessions in magical cenotes and exciting zip line in jungle, we want you to enjoy and live amazing experiences.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="maravillas">
            <h1>¡VEN A CONOCER LAS <br>MARAVILLAS MAYAS!</h1>
            <p>
              Con xx años de experiencia, en Mayan Ecotours nos encargamos que tu viaje en solitario, con tu pareja o seres queridos se vuelva una aventura inolvidable, cargada de visitas a sitios de leyenda y con acceso a tantas actividades únicas como desees experimentar.
            </p>
            <p>
              Desde visitas a las famosas pirámides prehispánicas hasta sesiones de buceo en los enigmáticos cenotes y emocionantes recorridos en tirolesa (rappel), nos encargamos de que vivas experiencias inolvidables y extraordinarias.
            </p>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>
<section class="bg-02">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
        <div id="experiencia">
          <?php
          if($_SESSION['lang']=='en'){echo'<h1>LIVE THE EXPERIENCE</h1>';}else{echo'<h1>VIVE LA EXPERIENCIA</h1>';}
          ?>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/zonas.png" class="img-responsive center-block">
            <p>Zonas arqueológicas</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/recorridos.png" class="img-responsive center-block">
            <p>Recorridos y fotografía</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/cenotes.png" class="img-responsive center-block">
            <p>Cenotes</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/kayak.png" class="img-responsive center-block">
            <p>Kayak</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/esnorquel.png" class="img-responsive center-block">
            <p>Esnórquel</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/rapel.png" class="img-responsive center-block">
            <p>Rappel</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/grutas.png" class="img-responsive center-block">
            <p>Grutas</p>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <img src="images/buceo.png" class="img-responsive center-block">
            <p>Buceo</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="portfolio"> 
  <div class="portfolio-wrapper">
    <?php
    if($_SESSION['lang']=='en')
    {
      ?>
      <h1>OUR FLAGSHIP TOURS</h1>
      <p>
        We present the most requested tours for travelers. Three options, three unforgettable adventures.<br>
        Click and learn more.
      </p>
      <?php
    }else{
      ?>
      <h1>NUESTROS TOURS ESTRELLA</h1>
      <p>
        Conoce a detalle los tours más solicitados por los viajeros. Tres opciones, tres aventuras inolvidables.<br>
        Da click en el destino de tu interés para conocer lo que ofrece.
      </p>
      <?php
    }
    ?>
    <!--======= PORTFOLIO ITEM =========-->
    <div class="portfolio">
      <ul class="items">
        
        <!--======= PORTFOLIO ITEM 1 =========-->
        <li class="item">
          <div class="img"> <?php if($_SESSION['lang']=='en'){echo'<img src="images/eng/chichen.jpg" alt="" >';}else{echo'<img src="images/chichen.jpg" alt="" >';} ?>
            <div class="over"> <a href="chichen_cenote.php" class="expand"><img src="images/mas-info.png" class="center-block img-info"></a>
            </div>
          </div>
        </li>
        
        <!--======= PORTFOLIO ITEM 2 =========-->
        <li class="item">
          <div class="img"> <?php echo ($_SESSION['lang']=='en')?'<img src="images/eng/cuzama.jpg" alt="" >':'<img src="images/cuzama.jpg" alt="" >'; ?>
            <div class="over"> <a href="esnorquel_cenotes_hacienda.php" class="expand"><img src="images/mas-info.png" class="center-block img-info"></a>
            </div>
          </div>
        </li>
        
        <!--======= PORTFOLIO ITEM 3 =========-->
        <li class="item">
          <div class="img"> <?php echo ($_SESSION['lang']=='en')?'<img src="images/eng/uxmal.jpg" alt="" >':'<img src="images/uxmal.jpg" alt="" >'; ?>
            <div class="over"> <a href="uxmal_comida.php" class="expand"><img src="images/mas-info.png" class="center-block img-info"></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="bg-03">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
        <div class="col-xs-12 col-sm-7 col-md-7">
          <?php
          if($_SESSION['lang']=='en')
          {
            ?>
            <div id="arma-tour">
              <h1>CREATE YOUR OWN TOUR</h1>
              <p>
                If you have a specific itinerary, we offer facilities and flexibility to build a tour in order to your needs. If you still don´t know, we will help you!
              </p>
              <p>
                Contact us and know all options that we have in Mayan Ecotours.
              </p>
              <a href="tours_medida.php" class="btn-aventura">Start your adventure right now!</a>
            </div>
            <?php
          }else{
            ?>
            <div id="arma-tour">
              <h1>ARMA TU TOUR</h1>
              <p>
                Si tienes en mente un itinerario en específico te brindamos todas las facilidades y flexibilidad para armar un plan a tu medida. Si aún no lo tienes, nosotros te ayudamos.
              </p>
              <p>
                Contáctanos y te platicaremos todas las opciones que tenemos para ofrecerte las emociones que buscas.
              </p>
              <a href="tours_medida.php" class="btn-aventura">¡COMIENZA TU AVENTURA AHORA!</a>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('includs/footer.php'); ?>
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


<!--banner-->
<script src="css/slider_banner/js/slippry.min.js"></script>

<script>
$(function() {
    var banner = $("#banner").slippry({
    });
    $('.init').click(function () {
        banner = $("#banner").slippry();
        return false;
    });
});
</script>
</body>
</html>
