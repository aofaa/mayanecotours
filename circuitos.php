<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Packages";
}else{
  $titulo="Circuitos";
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
<section>
  <?php echo ($_SESSION['lang']=='en')?'<img src="images/eng/banner_circuitos.jpg" class="banner-interiores">':'<img src="images/banner_circuitos.jpg" class="banner-interiores">'; ?>
</section>
<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div id="info-general">
          <p>&nbsp;</p>
          <h2>MÉRIDA, YUCATÁN, MÉXICO.</h2>
          <p>
            Cultura, Gastronomía, Gente Cálida y Tradiciones.
          </p>
          <p>
            Cuando de explorar Yucatán se trata, Mérida es el punto de partida para conocer todas las rutas del Mundo Maya; desde hace 500 años forjó su vocación de gran metrópoli.
          </p>
          <p>
            Fundada sobre la ciudad maya de Tóh, al ser colonizada durante la Conquista se convirtió en el sitio del gobierno español. Actualmente posee gran número de museos, parques, mercados y cafés al aire libre, haciendo una ciudad fascinante y cosmopolita. A lo largo del Paseo y Prolongación Montejo se encuentran infinidad de casonas antiguas con un particular estilo afrancesado que contrastan con la modernidad de altos edificios. 
          </p>
          <p>
            Fiestas y tradiciones de gran vida llegan siempre puntuales a su cita y ofrecen un espectáculo colorido, auténtico y rico en estampas inolvidables, es de esta manera como Mérida vive una gran fiesta cultural los 365 días del año y los miles de visitantes que acuden de todo el mundo, se convierten en espectadores de su intensa realidad cotidiana. 
          </p>
          <h2>KABAH.</h2>
          <p>
            Conocida como el segundo centro religioso más grande del estilo Puuc, su época de mayor apogeo fue hacia el año 800 D.C. Se comunica con Uxmal a través de un sacbé que inicia justamente en “El Arco”, una especie de puerta principal de la ciudad. 
          </p>
          <p>
            Un edificio de gran belleza es “El Palacio”, ubicado en la alta explanada que conforma un cuadrángulo. El edificio más impresionante es “El Palacio de los Mascarones”, el cual muestra una impresionante fachada compuesta por 250 mascarones del dios Chaac, tallados en piedra y colocados en un magnífico barroquismo.
          </p>
          <h2>PROGRESO.</h2>
          <p>
            En este lugar se puede caminar por el malecón, disfrutar de la brisa del mar y saborear la deliciosa comida regional en los muchos restaurantes que bordean el malecón del puerto. Se localiza al norte, a 36 km de la ciudad de Mérida por la autopista número 261.
          </p>
          <p>
            Gracias a su moderno puerto de altura, punto de enlace turístico y frontera abierta al intercambio comercial con el Golfo de México y Mar Caribe, hoy en día es lugar de arribo de numerosos cruceros turísticos de todo el mundo, de los cuales desembarcan gran número de pasajeros que disfrutan no sólo de su encanto natural y exquisito sabor de puerto histórico, sino de la paz y tranquilidad de su gente. 
          </p>
          <p>
            Desde aquí se conoce todo el estado, en rutas turísticas diseñadas para los visitantes de un día o para quienes desean pernoctar en pintorescos hoteles con vista al mar, algunos de los cuales conservan aún el estilo art decó de mediados del siglo pasado.
          </p>
          <p>
            Su inmejorable posición en la Península de Yucatán e infraestructura turística instalada hacen de Progreso, el puerto más importante del estado. Es un sitio idóneo para la práctica de los más variados deportes acuáticos: tablavela, windsurf y kayak. 
          </p>
          <h2>DZIBILCHALTÚN.</h2>
          <p>
            Su nombre significa “El lugar donde hay escritura en las piedras planas”.<br>
            Dzibilchaltún tiene su propio encanto, ya que cuenta con una capilla franciscana del siglo XVI en medio de la ciudad maya, que es considerada una de las más antiguas.<br>
            El Museo del Pueblo Maya alberga vestigios mayas y españoles, desde objetos de barro hasta pinturas, armas españolas, varias estelas mayas, piedras y dinteles tallados en excelentes condiciones. Otra característica de Dzibilchaltún es el cenote que posee.<br> 
            Los días 21 de marzo y 21 de septiembre es posible admirar el equinoccio en el Templo de las Siete Muñecas, el de mayor importancia de la zona.
          </p>
          <h2>GRUTAS.</h2>
          <p>
            El subsuelo rocoso de toda la Península de Yucatán esconde innumerables cavernas subterráneas o grutas, que constituyen una experiencia única para quienes visitan esta hermosa región del país. En la antigüedad, eran consideradas como lugares sagrados por los mayas, quienes ahí realizaban ceremonias y entregaban ofrendas a los "habitantes" del inframundo.
          </p>
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
