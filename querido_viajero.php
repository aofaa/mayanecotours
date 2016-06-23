<?php
$titulo="Querido Viajero";

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
    <img src="images/banner_querido_viajero.jpg" class="banner-interiores">
</section>
<section class="bg-interiores">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div id="info-general">
          <p>&nbsp;</p>
          <a href="pdf/Eventos_culturales_en_Merida_espanol.pdf" target="_blank"><img src="images/eventos.jpg" class="img-responsive img-eventos"></a>
          <p>
            En esta sección te presentamos información relevante acerca de las festividades más importantes de la ciudad de Mérida, al igual que un breve repaso por la riqueza cultural yucateca con el fin de acercarte más a la bella tierra que visitarás.
          </p>
          <p>
            <strong>Aniversario de la ciudad:</strong> La noche del 5 de enero, la tradicional alborada despierta a la Blanca Mérida al son de cientos de trovadores que le cantan a la ciudad, en vísperas de su aniversario. A partir de ese día se llevan a cabo más de 170 eventos, una intensa actividad cultural que engalana los festejos por el aniversario de la fundación de Mérida, capital del estado de Yucatán. 
          </p>
          <p>
            El Festival de la Ciudad, a través de espectáculos de danza, música, teatro, artes visuales y literatura, rescata las costumbres y tradiciones que comparte con propios y extraños, asombrándolos con cada propuesta que ofrece.
          </p>
          <p>
            <strong>Carnaval de Mérida:</strong> Fiesta popular que se realiza durante el mes de febrero o marzo (antes que inicie el periodo de Cuaresma), convocando a los ciudadanos a salir a las calles y disfrutar de los paseos de carros alegóricos; estos festejos son en honor al dios Momo. Durante cinco días consecutivos impera el bullicio y la alegría de la gente, que se divierte con música y baile.
          </p>
          <p>
            <strong>Otoño Cultural:</strong> El Instituto de Cultura de Yucatán (ICY), programa una temporada de eventos denominada Otoño Cultural, dando inicio en el mes de octubre. Los espectáculos se realizan en diferentes escenarios como la Casa de la Cultura, el histórico Teatro José Peón Contreras, el Teatro Daniel Ayala Pérez y otros sitios de importancia, con obras de teatro, danza y artes plásticas. También se hace un intercambio cultural con el Festival Cervantino que se desarrolla en Guanajuato.
          </p>
          <p>
            <strong>Hanal Pixán (Día de muertos):</strong> En maya significa “Comida de las ánimas”. Esta tradición se remonta en la antigüedad para venerar la memoria de los fallecidos. En los pueblos del interior del estado se realizan novenas, rezos, ofrendas los días 1 y 2 de noviembre, las cuales son fechas dedicadas a la convivencia con las ánimas en su paso anual por el plano terrenal, ya que “reciben permiso” para visitar a sus familiares. También se acostumbra la elaboración de los sabrosos mucbipollos o pibes, tamal grande hecho de masa de harina de maíz, relleno de carne de pollo y cerdo. 
          </p>
          <p>
            <strong>Feria Yucatán:</strong> Durante 15 días se llevan a cabo diferentes exposiciones de ganado de alto registro, además de muestras artesanales, industriales, turísticas y comerciales, donde se da a conocer lo mejor que se produce en la entidad. Se realiza en el mes de noviembre.
          </p>
          <p>
            Competencias ecuestres, charreadas, actividades deportivas, eventos culturales y el palenque de gallos, forman parte del programa además de espectáculos artísticos con figuras de renombre nacional e internacional. 
          </p>
          <p>
            <strong>Mérida en Domingo:</strong> Todos los domingos se ofrecen espectáculos al aire libre, en diferentes partes del centro de la ciudad. Cabe destacar la tradicional vaquería, costumbre nacida en las antiguas haciendas del estado, donde las mujeres atendían a los invitados y esposas, y al final bailaban sones mayas combinados con música española, en honor del patrón o dueño de la hacienda. 
          </p>
          <p>
            En este evento cultural se ofrecen artesanías y ropa típica, como los huipiles y guayaberas así como variedad de platillos y antojitos yucatecos.
          </p>
          <p>
            <strong>Música Yucateca:</strong> La posición geográfica de Yucatán, la composición étnica de sus habitantes y su vinculación cultural con los principales centros de Europa, propiciaron el florecimiento de un pueblo con gran vocación artística, especialmente hacia la música y la poesía. 
          </p>
          <p>
            En los albores del siglo XX surgen Ricardo Palmerín (Peregrina), Guty Cárdenas (Caminante del Mayab) y Pepe Domínguez (Granito de Sal), que musicalizando versos de algunos escritos dieron vida a la “Época de oro de la canción yucateca”.
          </p>
          <p>
            <strong>Gastronomía:</strong> La cocina tradicional yucateca deriva básicamente de la cultura hispana y la cultura maya. El gusto exquisito que la caracteriza depende de la combinación de recetas e ingredientes; su sabor típico es reconocible en todo México por el predominio de los condimentos fuertes empleados en su sazón. 
          </p>
          <p>
            El maíz es también componente esencial de la gastronomía yucateca y es consumido abundantemente, la sopa de lima, el papadzul y los huevos motuleños son platillos cocinados con tortilla frita mientras que el panucho y el dzotolbichay, se preparan con masa. La carne de pavo, excepcionalmente empleada en Yucatán, es también ingrediente básico en una gran cantidad de suculentas recetas tradicionales. 
          </p>
          <p>
            La ciudad de Mérida cuenta con una extensa oferta de restaurantes en los que es posible degustar toda clase de comidas, desde las más elementales y económicas, hasta las más sofisticadas.
          </p>
          <p>
            <strong>Tradiciones:</strong> El término jarana, entendido como "alboroto", se refiere al principal baile de las fiestas populares en Yucatán.
          </p>
          <p>
            Una auténtica muestra del mestizaje artístico. La jarana atrae y conquista, ya sea por la cadencia y elegancia de los pasos, por la alegría de la música, o por la actitud solemne de los bailadores que zapatean sobre el suelo. 
          </p>
          <p>
            Su música, estrepitosa y sonora, está generalmente a cargo de una típica orquesta jaranera, integrada por dos clarinetes, dos trompetas, dos trombones, un güiro y los timbales; derivada de antiguos sones regionales, la música es también una mezcla peculiar de las canciones y ritmos europeos con expresiones milenarias del alma musical del pueblo maya.
          </p>
          <p>
            Aunque en término estricto no es necesaria una prenda especial, generalmente las mujeres visten el típico huipil yucateco o el terno de gala, calzan zapatos blancos y se envuelven con un rebozo de Santa María además de infinidad de collares y pulsos de filigrana y un tocado de flores en la cabeza. Los hombres también deben vestir de mestizos, con pantalón de dril y guayabera de seda o lino, ambos de color blanco, sobre la cabeza llevan un sombrero tejido, en los bolsillos un paliacate rojo y calzan alpargatas yucatecas o sandalia con tacón.
          </p>
          <p>
            <strong>Idioma:</strong> En la capital del estado, Mérida, el idioma predominante es el español sin embargo en las comunidades rurales aún se conserva la lengua maya.
          </p>
          <p>
            <strong>Clima:</strong> La península de Yucatán tiene un clima caliente y húmedo. La extensión de lluvias es larga y va desde mayo hasta enero, aunque no es raro que llueva durante los llamados meses secos como febrero, marzo y abril. Los meses más calurosos son abril y mayo, llegando el termómetro en ocasiones hasta 40° centígrados. 
          </p>
          <p>
            Los meteorólogos clasifican el clima como tipo “Awo” (cálido subhúmedo, con lluvias durante el verano), con una temperatura promedio de 26° centígrados. 
          </p>
          <p>
            Las tormentas tropicales son esporádicas y leves entre los meses de agosto y octubre, y de septiembre hasta enero son comunes los vientos del norte que nublan y refrescan la ciudad, después de los cuales vuelve a brillar "Kin", el Dios del sol, casi con la misma intensidad que en verano.
          </p>
          <p>
            <strong>Ubicación Geográfica:</strong> Mérida está localizada a 50 km del Golfo de México, en la parte noreste del Estado de Yucatán.
          </p>
          <p>
            El estado de Yucatán abarca la parte norte de la Península del mismo nombre; sus coordenadas son 20° 58' 04" N, 89° 37' 18" O. Al este colinda con el estado de Quintana Roo, al oeste con el Estado de Campeche y al norte con el Golfo de México. Posee una topografía muy plana y está situado cerca del nivel del mar. 
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
