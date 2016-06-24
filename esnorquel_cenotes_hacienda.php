<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Snorkeling & colonial hacienda";
}else{
  $titulo="Esnórquel en cenotes y hacienda colonial";
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
    <img src="images/banner_interiores/esnorquel_cenotes_hacienda.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/esnorquel_cenotes_hacienda.jpg" class="banner-interiores">
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
            <h2>Hacienda Ochil</h2>
            <p>
              An old henequen hacienda from XVIII century, nowadays resurfaced as a tourist hotel.
            </p>
            <p>
              Possesses a beautiful arch of access with Moorish ornamentations and neoclassic influence, the principal house arranged in a piece of rectangular shape. Surrounded by a wide garden with endemic species, there are rails along that there passes the "truck" that moves the walkers across the place.
            </p>
            <p>
              Inside the main house there’s a restaurant where you can enjoy yucatecan food, a small handcraft store and a museum that exhibits stuffs and objects that were part of daily life from the inhabitants, also the old remains of the henequen machines and  some passages of the life of the ancestors portrayed in photographs and drawings. In the southern area, there’ s a cenote in which very carefully , visitors can immerse themselves and enjoy the clear waters
            </p>
            <p>
              Located just outside the town of Abalá very close to the road to Uxmal, is a good choice to start the journey to the "Puuc  Route”.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <h2>Hacienda Ochil</h2>
            <p>
              Una antigua hacienda henequenera del siglo XVIII, que hoy en día resurge como parador turístico.
              Posee un bello arco de acceso con ornamentaciones de corte morisco e influencia neoclásica y la casa principal, dispuesta en una pieza de corte rectangular. Rodeada por un amplio jardín con especies endémicas, hay rieles por las que transita el “truck” que traslada a los paseantes a través del lugar.
              Dentro de las instalaciones de la casa principal, se ubica el restaurante donde podrás disfrutar de platillos típicos yucatecos, una pequeña tienda de artesanías y el museo que exhibe objetos que formaron parte de la vida cotidiana de sus habitantes así como también los vestigios de las máquinas henequeneras y algunos pasajes de la vida de los antepasados retratados en fotografías y planos. En la parte sur de la hacienda  hay un cenote en el que de manera muy cuidadosa, los visitantes pueden sumergirse y disfrutar de las aguas claras.<br>
              Ubicada a las afueras del municipio de Abalá muy cerca de la carretera a Uxmal, es una buena opción para iniciar el recorrido hacia la llamada  “Ruta Puuc”.
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
                Visit two cenotes of exceptional beauty. Without doubt you will have an amazing experience when visiting the crystal clear waters of the Mayan cenotes; such a magical world whose exceptional beauty does not seem real. This is considered by many as the best tour of their stay in the Yucatan. We invite you to experience it to believe it. The specialized guide accompanies you at all times in the water activities, giving you security and information of these magical places.
              </p>
              <p>
                Hacienda Ochil is famous for his traditional Yucatecan cuisine, as tuniches (balls stuffed dough suckling pig), kimbombas chicken, panuchos, black stuffing, chicken and roasted suckling pig, chicken Abalá, venison pickled polcan (pumpkin seed and beans), cheese empanadas, all accompanied by sauces such as jicama and beets with habanero chile.
              </p>
              <p>
                Hacienda Ochi is an intimate place, with the Museum of Henequen Haciendas, handicrafts and gifts shop.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Specialized guide</li>
                <li>Snorkel equipment and life jacket</li>
                <li>Entrance fees</li>
                <li>Return to your hotel at 5:00 p.m.</li>
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
                Visita dos cenotes de excepcional belleza. Sin duda alguna vivirás una experiencia completamente diferente al visitar las claras aguas de los cenotes mayas, para encontrarte de pronto con un mundo mágico, cuya belleza no parece real… Formaciones enigmáticas únicas en el mundo de excepcional belleza. Considerado por muchos como el mejor tour de su estancia en Yucatán. Te invitamos a vivirlo para creerlo. El guía especializado te acompaña en todo momento en sus actividades acuáticas, brindándote seguridad e información de estos mágicos lugares.
              </p>
              <p>
                La hacienda Ochil es famosa por su cocina tradicional 100% yucateca. Como los tuniches (bolitas de masa rellenas de cochinita), kimbombas de pollo, panuchos, relleno negro, pollo y cochinita pibil, pollito Abalá, venado en escabeche, polcanes (semilla de calabaza y frijol), empanadas de queso, todo acompañado de salsas como las de jícama y betabel con chile habanero.
              </p>
              <p>
                La hacienda Ochil, intima, encantadora, que cuenta con el Museo de las Haciendas Henequeneras, taller de artesanías y una tienda de regalos.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida desde su hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Entradas</li>
                <li>Guía especializado en las actividades</li>
                <li>Equipo de esnórquel y chaleco de flotación</li>
                <li>Regreso a su hotel a las 5:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida en la hacienda<br>
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
            <img src="images/thumbnail_interiores/15_hacienda.jpg" class="img-responsive img-foto-interior center-block">
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
                  <td><a href="https://www.youtube.com/watch?v=tQ19Y0acnPE" target="_blank"><img src="<?php echo $_SESSION['lang']=='en'?'images/eng/video.png':'images/video.png'; ?>" class="img-responsive btn-video"></a></td>
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
