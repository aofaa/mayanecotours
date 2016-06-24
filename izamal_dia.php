<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Day trip to Izamal";
}else{
  $titulo="Izamal de día";
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
    <img src="images/banner_interiores/izamal_dia.jpg" class="banner-interiores">
</section>

<section class="visible-xs">
  <img src="images/banner_interiores360px/izamal_dia.jpg" class="banner-interiores">
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
            <p>
              A magical Mexican City geographically right in the center of the Yucatan Peninsula. Historically this site was once an enormous Mayan cultural center. Founded by a family of Mayas, the Itzaes, its name comes from a mythical character of exceptional wisdom, looked upon as instructor, teacher and priest, and whom the Maya called Itzamna or Zamna, meaning “Dew descended from heaven”.
            </p>
            <p>
              Izamal is sometimes known as the “City of Hills”, referring to the covered pyramids found by the Spanish past on their arrival and also as the “City of the Three Cultures”, for the prehispanic, Colonial traces of its past, as well as contemporary influences.
            </p>
            <p>
              Izamal was one of the most important city-states of the prehispanic mayan culture, between 850 and 1000 AD. For centuries the maya would pilgrimage here along the sacbés or white stone paths that joined the principal metropolises of the mayan world; this and Uxmal: The first settlements here date back to the 3rd century AD.
            </p>
            <p>
              During the post classic period, Izamal experienced a popularity boom as a mayan toltec city, but like other major cities of this era, it was later abandoned. When the Spanish arrived, the place was all but deserted and belonged to an indigenous group called the Cocoms.
            </p>
            <p>
              An important ceremonial center in Izamal, seven pyramids had been erected on the site, and although the Spaniards respected some of the temples, many of the stones were used to give life to new constructions. This was the case with the majestic convent of San Antonio de Padua.
            </p>
            <p>
              The convent was founded in Izamal by the priest Fray Diego de Landa y Franciscan missionaries in 1549. The courtyard of Izamal is the second after St. Peter´s in the Vatican in size, and was chosen by Pope John Paul II for his reunion with a host of ethnic groups on one of his visits to México.
            </p>
            <p>
              In Izamal, horse drawn carriages take the visitors for a charming ride down neat cobble-stone streets, around the parks, squares and historical suburbs where Fray Diego de Landa himself seems to speak to us about the quality of the people, so alive and proud of their past.
            </p>
            <p>
              At night the view from Izamal is extraordinary. The pyramids, temples and colonial mansions are silhouetted against the starry heavens: shadows that seem to awaken from a centuries old dream.
            </p>
            <p>
              The second most significant structure in Izamal is the pyramid of Izamatul, dedicated to the founder of the city and standing 22 meters high.
            </p>
            <p>
              Around 80 pre-hispanic structures have been found on the site during innumerable excavations and restorations in Izamal, one of these is known as Kinich Kakmoo, a name meaning “Sun Face” and where homage was paid to the sun as the source of life.
            </p>
          </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <h1>INFORMACIÓN GENERAL</h1>
            <p>
              El primer Pueblo Mágico de México, tiene una historia empapada de una fuerte tradición religiosa, desde su fundación hasta el presente, pues en el pasado funcionó como uno de los más grandes  centros ceremoniales mayas.
            </p>
            <p>
              Fundada por los Itzáes, debe su nombre a un personaje de origen llamado Itzamná o Zamná que significa “Rocío que desciende del cielo”. Izamal también es conocida como la “Ciudad de los cerros”, rememorando las pirámides cubiertas que se encontraban ahí al momento de la llegada de los españoles, así como “La Ciudad de las Tres Culturas”, pues en ella se combinan rasgos de su pasado prehispánico, su periodo colonial y de la época actual.
            </p>
            <p>
              Fue una de las ciudades-estado más importantes de la civilización maya, entre los años 850 y 1000 D.C., además se le considera como una de las más antiguas, pues sus primeros asentamientos se remontan al siglo III D.C.
            </p>
            <p>
              Debido a su importancia como centro ceremonial de la región, en Izamal fueron erigidas siete pirámides y aunque los españoles respetaron algunos templos, utilizaron piedras de los antiguos edificios para dar vida a las nuevas construcciones, como en el caso del majestuoso convento del San Antonio de Padua, fundado por el padre Fray Diego de Landa y los misioneros franciscanos en el año de 1549. Esta construcción posee el atrio más grande después del ubicado en la Basílica de  San Pedro en El Vaticano. Otro edificio de gran importancia es la pirámide de Itzamatul, misma que fue dedicada al fundador de la ciudad y que cuenta con una altura de 22 metros, siendo la segunda estructura en importancia del lugar.
            </p>
            <p>
              Izamal con sus  calles estampadas, construcciones pintadas de amarillo  y calesas tiradas por caballos, llevan al visitante a un recorrido por plazas y parques, históricos suburbios y hermosas calles donde Fray Diego de Landa parece hablarnos de la cotidianeidad de este pueblo vivo y orgulloso de su pasado; por la noche nos ofrece una experiencia singular, al contemplar una estrellada bóveda celeste recortada por los perfiles de sus pirámides, templos y casonas coloniales.
            </p>
            <p>
              Durante excavaciones y restauraciones realizadas, se han encontrado alrededor de ochenta estructuras prehispánicas, entre las que se encuentra Kinich Kakmó, cuyo nombre significa “Rostro Solar” y en la cual se rendía culto al sol, como fuente de vida.  Esta imponente pirámide se mantiene de pie ante nosotros como un testigo inmutable de la “Ciudad de los Cerros” y a manera de “Rocío que desciende del cielo”, invita al visitante a sumergirse dentro de la magia única de este rincón del México prehispánico, colonial y moderno, tres épocas pasadas que convergen armoniosamente en el tiempo y nos regalan su bello legado en el presente.
            </p>
            <p>
              Izamal está ubicada justo al centro de la Península de Yucatán, a 72 km al oriente de la ciudad de Mérida por la carretera estatal sin número rumbo a Tekantó, desviación a la derecha en el km 54.
            </p>
            <p>
              <strong>CENTRO CULTURAL Y ARTESANAL EN IZAMAL </strong><br>
              Exhibe obras artesanales de los grandes maestros del arte popular. Cuenta con una cafetería y terraza; lo invitamos a relajarse en la cámara interior del museo mientras disfruta de la exhibición Se ubica frente a la plaza central.
            </p>
            <p>
              <strong>PIRÁMIDE DEL KINICH KAKMÓ EN IZAMAL </strong><br>
              Tiene el basamento más grande con una base de 4 hectáreas y 34 metros en su parte más alta.
              Los recorridos en calesa parten de la plaza central.
              Su horario es de lunes a domingo, de 8:00 a.m. a 5:00 p.m.
            </p>
            <p>
              <strong>CONVENTO DE SAN ANTONIO DE PADUA EN IZAMAL</strong><br>
              El segundo atrio más grande del mundo, después del ubicado en la Basílica de San Pedro, en El Vaticano, es una obra maestra de la arquitectura colonial, que refleja tradición viva de una mezcla de culturas. Cuenta con museo en su interior y un adoratorio.
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
                <li>Departure from your hotel at 9:00 a.m.</li>
                <li>Transportation with A/C</li>
                <li>Certified guide</li>
                <li>Horse and buggy tour of Izamal</li>
                <li>Return to your hotel at 4:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>Not included:</span><br>
                • Lunch<br>
                • Beverages<br>
                • Entrance to the convent<br>
                • Tips

              </p>
              <p>
                <span>Recommendations:</span><br>
                Bring hat or cap, comfortable clothes, camera, sun block and repellent.
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
                <li>Salida de su hotel a las 9:00 a.m.</li>
                <li>Transportación con aire acondicionado</li>
                <li>Guía certificado durante el recorrido</li>
                <li>Paseo en calesa</li>
                <li>Regreso a su hotel a las 4:00 p.m.</li>
              </ul>
              </p>
              <p>
                <span>No incluye:</span><br>
                • Comida<br>
                • Bebidas<br>
                • Entrada al convento<br>
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
          </div>
          <div>
            <img src="images/thumbnail_interiores/09_izamal.jpg" class="img-responsive img-foto-interior center-block">
            <div id="bg-video-sin-camioneta">
              <?php
              if($_SESSION['lang']=='en')
              {
                ?>
                <h1>Departures: <span>9:00 a.m. - 4:00 p.m.</span></h1>
                <?php
              }else{
                ?>
                <h1>Salidas: <span>de 9:00 a.m. a 4:00 p.m.</span></h1>
                <?php
              }
              ?>
              <table>
                <tr>
                  <td><a href="https://www.youtube.com/watch?v=Ymw8VaLZv_4" target="_blank"><img src="<?php echo $_SESSION['lang']=='en'?'images/eng/video.png':'images/video.png'; ?>" class="img-responsive btn-video"></a></td>
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
