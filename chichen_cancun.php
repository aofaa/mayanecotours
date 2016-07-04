<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Chichen Itza | With arrival to Cancun";
}else{
  $titulo="Chichen Itzá | Con llegada a Cancún";
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
    <img src="images/banner_interiores/chichen-cancun.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/chichen-cancun.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Chichen Itza';}else{echo'Chichen Itzá';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'With arrival to Cancun';}else{echo'Con llegada a Cancún';} ?></span></h1>
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
              Chichen Itza or “Mouth of the Well Itzaes” is one of the most famous and controversial metropolis still standing in the Mayan world. Once a prominent cultural and political center of the old Maya civilization, it was one of the most extensive settlements during the end of the tenth century when the city was invaded by a predominantly warlike tribe, the Toltecs. This invasion infused the culture with a new series of elements, not least of which is the representation of the snake god Kukulcan. However, years later the city was abandoned for reasons which are still unknown.
            </p>
            <p>
              During its golden age, Chichen Itza was the most powerful city in the Peninsula of Yucatan. Among its most remarkable buildings is the Temple of Warriors, the group of Thousands of Columns, the Platform of Venus, the Tzompantli, the Ball Court, the Snail or Observatory in the Church.
            </p>
            <p>
              The spectacular Pyramid of Kukulcan in Chichen Itza is breathtaking as it towers above its visitors. It is a four-sided pyramid, 30 meters high and crowned with a temple. The Pyramid actually has two distinct structures, each correspond to a different era. The oldest is completely covered by the most recent. Inside lies the sculpture of a “Chac Mool” and a throne in the form of a red painted jaguar. It is believed that this pyramid represents the Mayan calendar: each step is one day of the year. There are 91 steps on each of the four sides, plus the one represented by the platform, a total of 365 days, the solar year to the day, giving rise to the belief that the monument was erected to honor the god of the sun.
            </p>
            <p>
              The astronomical meaning of this building is obvious in Chichen Itza. It is here that the “Feathered Serpent” descends punctually every equinox, in a light and shadow phenomenon that attracts thousands of visitors annually from all over the globe.
            </p>
            <p>
              The sacred cenote of Chichen Itza was the heart of religious activities not only for the city itself, but for the entire Mayan region. As part of their reverence to the god of water, the Maya threw in ceremonial offerings consisting mainly of precious objects. Stuffs of gold, jade, copper, cloth and basketwork have been retrieved from its murky depths. So great was the city’s power that for centuries after its declines it was occupied sporadically for religious ceremonies before being forgotten and left to be swallowed by the jungle.
            </p>
            <p>
              And so the centuries passed until the arrival of the explorers, ancient relics promised. From among the trees and undergrowth, new discoveries continue to be made.
            </p>
            <p>
              Chichen Itza is a marvelous, magical place to penetrate the intriguing, imposing an unforgettable world of the Maya, and to experience a firsthand view of this extraordinary culture.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <p>
              Una de las principales representantes de la cultura Maya, es considerada la urbe más famosa de esta civilización que hoy en día permanece para asombrar a sus visitantes.
            </p>
            <p>
              Con un nombre que significa “Boca del pozo de los Itzaes”, Chichen Itzá sobresalió como uno de los asentamientos más extensos del centro-norte de la Península de Yucatán. Durante su época de esplendor concentró la actividad económica, cultural, política y social de toda la zona maya. Hacia finales del siglo X, la ciudad fue invadida por una tribu guerrera, los toltecas, ocasionando una inesperada mezcla cultural; sin embargo, unos años más tarde, fue abandonada por razones desconocidas.
            </p>
            <p>
              Entre los edificios representativos podemos admirar El Templo de los Guerreros, El Grupo de las Mil Columnas, La Plataforma de Venus, el Tzompantli, El Juego de Pelota, El Observatorio o Caracol y la Iglesia. Mención aparte recibe la espectacular Pirámide de Kukulcán, de abrumadora grandeza, un símbolo del legado Maya. Con una estructura de 30 metros de altura y cuatro lados, se encuentra coronada con un templo en la cima; en el interior se encuentra la escultura del Chac Mool y un trono en forma de jaguar, pintado de color rojo.
            </p>
            <p>
              Según la creencia popular, la Pirámide de Kukulcán es la representación del Calendario Maya: cada escalón equivale a un día del año y debido a que cada lado tiene 91 escalones, al multiplicarse por los cuatro lados, da un total de 364 más uno que representa la plataforma, sumando así los 365 días del año solar. También es notable su carácter mágico-astronómico, puesto que podemos observar el descenso de “Kukulcán o la Serpiente Emplumada” durante el equinoccio de primavera o de otoño, un extraordinario fenómeno de luz y sombra que marca el inicio de las estaciones.
            </p>
            <p>
              Otro de los atractivos es El Cenote Sagrado, punto de ceremonias religiosas en honor a Chaac, el dios del agua. Con ofrendas ceremoniales, como objetos preciosos de oro, jade y cobre al igual que sacrificios humanos, los mayas obtenían la simpatía y protección por parte de él.
            </p>
            <p>
              La legendaria ciudad maya, declarada “Patrimonio de la Humanidad” por la UNESCO desde 1988 y “Maravilla del Mundo” desde 2007, está localizada al oriente de Yucatán, a 120 kilómetros de Mérida y se accede a ella por la autopista a Cancún. Cuenta con un parador turístico con diversos servicios además de un museo.
            </p>
            <p>
              La zona arqueológica de Chichen Itzá puede ser visitada todos los días en horario de 8:00 a.m. hasta las 5:00 p.m. y por las noches ofrece un espectáculo de luz y sonido, donde resurge su esplendor y grandeza.
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
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel in Merida at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Certified guide who accompanies you at the archeological site</li>
                <li>Buffet lunch serving Yucatecan food</li>
                <li>Arrival to Cancun at 7:30 p.m. </li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Entrance to the archaeological site<br>
                • Beverages<br>
                • Tips
              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, sun block and repellent.
              </p>
            </div>
            <?php
          }else{
            ?>
            <div id="caracteristicas">
              <h1>CARACTERÍSTICAS DEL TOUR</h1>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida del hotel en Mérida a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Guía especializado dentro de la zona arqueológica</li>
                <li>Comida típica yucateca</li>
                <li>Llegada a Cancún a las 8:00 p.m.</li>
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
                Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos y protector solar.
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
          </div>
          <div>
            <img src="images/thumbnail_interiores/03_chichen.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h1>Departures: <span>9:00 a.m. a 7:30 p.m.</span></h1>
                <?php
              }else{
                ?>
                <h1>Salidas: <span>de 9:00 a.m. a 7:30 p.m.</span></h1>
                <?php
              }
              ?>
              <table>
                <tr>
                  <td><a href="https://www.youtube.com/watch?v=T-7m8WqezDk" target="_blank"><img src="<?php echo $_SESSION['lang']=='en'?'images/eng/video.png':'images/video.png'; ?>" class="img-responsive btn-video"></a></td>
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
<?php
include_once ('firma_imagina.php');
?>
</body>
</html>
