<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Puuc Route and Loltun";
}else{
  $titulo="Ruta Puuc y Loltún";
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
    <img src="images/banner_interiores/rutapuuc_loltun.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/rutapuuc_loltun.jpg" class="banner-interiores">
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
            <h2>PUUC ROUTE</h2>
            <p>
              Puuc is the Mayan name given to a series of low-lying hills with a unique culture and style.
            </p>
            <p>
              Uxmal, as has already been mentioned, is one of the best examples;  however not far away are other delightful places which were also, in their day, important Mayan centers.
            </p>
            <p>
              Some characteristic elements of Puuc decoration include pyramids finished with crest work, small, false columns embedded in the facades, and drawing of stylized Mayan huts. Repetitive geometrically cut stones and motifs are commonly used. Other figurative components also appear, such as snakes and masks of the rain god Chaac, recognized by his bulging eyes, large fangs and snout like nose which curve upwards like trumpet.
            </p>
            <p>
              Several cisterns of chultunes in this area serve to collect rainwater. These are the only source of storage for this vital liquid. The reason why Chaac is held in such high esteem and representations of him abound: the Mayan population worshipped Chaac ,to ensure sufficient rain.
            </p>
            <h2>LOLTUN CAVES</h2>
            <p>
              The tour starts at the entrance of Nahkab, or beehive, where the famous bas¬relief known as “The Loltun warrior” is located, which seems to be emerging from the caves and is believed to be the God of the underworld.
            </p>
            <p>
              Another attraction of great interest is the cave paintings: in a wall one can see negatives of hands, in another one there are more elaborated paintings representing faces, animals and staggered greca patterns.
            </p>
            <p>
              In the diverse halls, galleries and chambers , almost 60 meters deep and extending over more than 700 meters,  diverse archaeological pieces, ceramics, stone artifacts, marine shells and petroglyphs have been found, corresponding to the Mayan culture in different stages of development.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <h2>RUTA PUUC</h2>
            <p>
              Puuc, es una zona cultural y posee un estilo arquitectónico propio de la cultura maya en Yucatán. Su significado se traduce como serie de cerros de escasa altura.
            </p>
            <p>
              Uxmal es uno de los mejores exponentes de este estilo pero cerca de ahí también existen otras zonas arqueológicas similares, que en su momento fueron importantes urbes mayas. Algunos elementos característicos del decorado Puuc, incluyen pirámides rematadas por cresterías, las pequeñas y falsas columnas encajadas en fachadas y figuraciones de cosas mayas estilizadas; también son muy utilizados los rombos y las grecas a los que se agregan algunos elementos figurativos, como las serpientes y los mascarones de Chaac, el dios de la lluvia, caracterizadas por sus grandes ojos, por su boca provista de grandes colmillos y sobre todo por una nariz prominente que curva en forma de trompa.
            </p>
            <p>
              En esta zona son fáciles de encontrar varias cisternas o chultunes que servían para recoger el agua de lluvia, ya que no existía otra fuente de abastecimiento del indispensable líquido, es por eso que en la zona Puuc las representaciones de Chaac tenían gran importancia debido a que la población le rendía culto para pedirle lluvias.
            </p>
            <h2>GRUTAS DE LOLTÚN</h2>
            <p>
              Loltún, palabra en maya que significa “Flor de Piedra”, es un lugar donde se han encontrado evidencias de asentamientos humanos de hace 4000 a 7000 años.
            </p>
            <p>
              El recorrido por Loltún empieza en la entrada de Nahka, donde se localiza un famoso bajorrelieve conocido como “El Guerrero de Loltún”, el cual parece estar emergiendo de las grutas y se cree representa al Dios del Inframundo.
            </p>
            <p>
              Los visitantes pueden admirar muchas otras formaciones  que han sido bautizados con peculiares nombres como “La Catedral”, “La Galería del Cañón”, “La Mazorca de Maíz”, “El Cuarto de las Estalactitas”, entre otras; también existe un salón denominado “Cuarto de las Columnatas Musicales”, formado por grandes estalactitas que al ser golpeadas producen diferentes sonidos.
            </p>
            <p>
              Otro de los atractivos de Loltún son las pinturas rupestres: en un muro se aprecian manos en negativo, en otro se localizan pinturas más elaboradas que representan rostros, animales y grecas escalonadas. En las diversas salas, galerías y recámaras de casi 60 metros de profundidad y a lo largo de 700 metros de extensión, se han encontrado diversas piezas arqueológicas y cerámicas como artefactos de piedra, conchas marinas y petroglifos, correspondientes a la cultura maya en sus distintas etapas de desarrollo. Igualmente han sido hallados restos de fauna extinta, como huesos de mamut, bisonte y felino.
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
                <li>Departure from your hotel at 8:30 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Certified Guide</li>
                <li>Visit to Loltun, Sayil, Labna and Xlapack</li>
                <li>Return to your hotel at 6:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Lunch<br>
                • Beverages<br>
                • Entrance fees to archaeological site<br>
                • Entrance fees into Loltun caves<br>
                • Tips
              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, bathing suit, towel, and biodegradable sun block and repellent.
              </p>
              <p>
                <span>Notes:</span><br>
                This tour operates with minimum 4 people, however contact us for availability.
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
                <li>Salida de su hotel a las 8:30 a.m. </li>
                <li>Transportación con aire acondicionado</li>
                <li>Guía certificado durante el recorrido</li>
                <li>Visita a Loltún, Sayil, Labná y Xlapack</li>
                <li>Regreso a su hotel a las 6:00 p.m. </li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Bebidas<br>
                • Entrada a las zonas arqueológicas<br>
                • Entrada a la cueva de Loltún<br>
                • Propinas
              </p>
              <p>
                <span>Recomendaciones:</span><br>
                Llevar sombrero o gorra, ropa cómoda, repelente de insectos, protector solar y cámara fotográfica.
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
              <img src="images/actividades/07.jpg" class="img-responsive center-block">
            </div>
          </div>
          <div>
            <img src="images/thumbnail_interiores/19_loltun.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h1>Departures: <span>8:30 a.m. - 6:00 p.m.</span></h1>
                <?php
              }else{
                ?>
                <h1>Salidas: <span>de 8:30 a.m. a 6:00 p.m.</span></h1>
                <?php
              }
              ?>
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
