<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Uxmal | Snorkel in cenote and lunch in a Mayan house";
}else{
  $titulo="Uxmal | Esnórquel en un Cenote y Comida en Casa Maya";
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
    <img src="images/banner_interiores/uxmal.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/uxmal.jpg" class="banner-interiores">
</section>

<section class="bg-titulo">
  <div class="container">
    <div class="row">
      <div id="titulo-interiores">
        <h1><?php if($_SESSION['lang']=='en'){echo'Uxmal';}else{echo'Uxmal';} ?> <span class="linea-interior">|</span> <span class="subinteriores"><?php if($_SESSION['lang']=='en'){echo'Snorkel in cenote and lunch in a Mayan house';}else{echo'Esnórquel en un cenote y comida en casa maya';} ?></span></h1>
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
              Uxmal, enveloped by legends, myths and anecdotes, poetic by name and by nature, is situated within a series of hills known as the “Puuc” or “mountainous area” in Maya. The name was later given to describe the architectural style of region
            </p>
            <p>
              Uxmal was probably was founded by the Xiues tribe during the classic Mayan period between 600 and 900 AD; the city flourished, with a population of approximately  20 000 inhabitants.
            </p>
            <p>
              The surrounding land allowed the fabrication of the chultunes, cisterns ingeniously built by the Maya to store rainwater since cenotes don’t exist in this area. Highly fertile terrain sustained the agricultural activity necessary to support the ancient settlers. Worship of water, the earth, sun and Venus are all evident in the orientation and decoration of the structures in Uxmal.
            </p>
            <p>
              The city of Uxmal is made up of 15 groups of buildings distributed from north to south over about 2 Km’s. Among the most noteworthy areas are the Pyramid of the Wizard, the Plaza of the Birds, the Nunnery, the Ball Court, the Governor´s Palace, the Great Pyramid, and the Pigeon House;  from the northern group the old Woman´s House, the Cemetery and the Temple of the Phalli. The wide variety and quantity of buildings which exists speak of the social complexity and political, economic and religious activities which once thrived here.
            </p>
            <p>
              The most impressive structure, reaching a height of over 35 meters is the House of the Wizard. According to legend, this pyramid in Uxmal was built in just one night by a dwarf. In reality it was built in five stages, with the staircase facing west, towards the setting sun in the summer solstices. The Convent was not named by the Spaniards for its similarity to a European convent. It was probably used as a school for healers, astrologers and priests. The Governor‘s Palace is an excellent example of the rain God  Chaac, serpents and astrological symbols, and is considered the most beautiful construction in Mesoamerica for its style and imposing proportions.
            </p>
            <p>
              The group of four elongated buildings surrounding the patio is the Nunnery. It is remarkable for its magnificent decoration with motifs, lattice motifs; Lattice-work and human figures alternating with serpents, turtle heads, owls and masks of Chaac.
            </p>
            <p>
              It’s believed that the downfall of Uxmal was probably due to a social revolt which put an end to the governing elite.  There’s a certain refined air about Uxmal that touches visitors from outset.
            </p>
          </div>
          <?php
        }else{
          ?>
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
                Known as “the thrice built,” Uxmal is one of the Mayan sites on the Yucatan peninsula that has the most majestic, spectacular, architectural characteristics. Its beauty is characterized by the low, horizontal  palaces that are arranged around patios and quadrangle courtyards which are rich in sculptured details elaborated with thousands of small stones perfectly polished and adjusted, forming geometric mosaics with a perfection that is found in no other Mayan sites in the entire area.  Afterwards, visit an impressive cenote, and then you will be invited to a Mayan home for lunch, shown around, see their customs, even learn some words in Maya. This is the opportunity to see the real Mayan roots.
              </p>
              <br>
              <p>
                <span>Included:</span><br>
              <ul class="listas">
                <li>Departure from your hotel at 9 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Certified guide who accompanies you at the archeological site</li>
                <li>Visit an impressive cenote</li>
                <li>Snorkel equipment and life jacket</li>
                <li>Lunch at a Mayan House</li>
                <li>Entrance fee to the cenote</li>
                <li>Return to hotel at 5:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Entrance to the archaeological site<br>
                • Beverage<br>
                • Tips
              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, towel, biodegradable sun block and repellent
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
                Conocida como “la tres veces construida”, es una de las zonas arqueológicas mayas cuya arquitectura es de las más majestuosas de Yucatán. Su belleza se caracteriza por tener palacios bajos y horizontales, colocados alrededor de patios o cuadrángulos los cuales son ricos en decorados de esculturas muy detalladas elaborados con miles de pequeñas piedras perfectamente pulidas y ajustadas, formando mosaicos geométricos de una perfección no igualada en toda la zona maya.
              </p>
              <p>
                Después de visitar la zona arqueológica de Uxmal, visitamos un impresionante cenote, para después ser invitados a una casa maya para nuestra comida. Ahí tendrás la oportunidad de conocer su casa, sus costumbres, sus recetas y hasta algunas palabras en maya. Un contacto personal con las raíces de Yucatán.
              </p>
              <br>
              <p>
                <span>Incluye:</span><br>
              <ul class="listas">
                <li>Salida desde su respectivo hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado </li>
                <li>Guía certificado que entra con ustedes  a la zona arqueológica</li>
                <li>Visita a  un cenote</li>
                <li>Equipo de esnórquel</li>
                <li>Comida</li>
                <li>Entrada al Cenote</li>
                <li>Regreso  aproximado a tu hotel  a las 5:00 p.m.</li>
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
                Llevar sombrero o gorra, ropa cómoda, traje de baño, cámara fotográfica, repelente de insectos y protector solar biodegradables.
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
              <img src="images/actividades/05.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/05_uxmal.jpg" class="img-responsive img-foto-interior center-block">
            <div class="bg-salidas1">
              <div id="bg-salidas2">
                <img src="images/combi.png" class="img-combi">
                <?php
                if($_SESSION['lang']=='en')
                {
                  ?>
                  <h1>Departures:</h1>
                  <p>daily 9:00 a.m. – 5:00 p.m.</p>
                  <?php
                }else{
                  ?>
                  <h1>Salidas:</h1>
                  <p>todos los días de 9:00 a.m. a 5:00 p.m.</p>
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
</body>
</html>
