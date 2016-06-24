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
        <?php
        if($_SESSION['lang']=='en')
        {
          ?>
          <div id="info-general">
            <p>&nbsp;</p>
            <h2>MERIDA, YUCATAN, MEXICO.</h2>
            <p>
              Culture, Gastronomy, Warm People and Traditions.
            </p>
            <p>
              When we talk about exploring Yucatan, Merida is the starting point to get acquainted with all the routes of the Mayan world. For 500 years Merida forged its vocation of a great metropolis and departure point for exploring the Yucatan. Founded on the Mayan city of Tho, after being colonized during the conquest it became the city of the Spanish government.
            </p>
            <p>
              Currently, with its museums, parks, markets and outdoor cafés, Merida is a fascinating and cosmopolitan destination, with more than 900,000 inhabitants, mostly Spanish and Mayan descendants.
            </p>
            <p>
              Throughout Paseo and Prolongación  Montejo one can find restaurants, hotels, bars, cafés, banks and businesses, with all the services to ensure visitors have a pleasant stay.
            </p>
            <p>
              Celebrations and lively traditions always offer a colorful spectacle, rich with unforgettable images. This is how Merida lives, a great big year­long cultural festival, and how thousands upon thousands of visitors from around the globe become spectators of the city’s day­to­day vibrant reality.
            </p>
            <p>
              Every night, the Historic Center invites you to join in a memorable cultural evening. On Mondays, for instance, there is a show of Yucatecan “jaranas”, our traditional folk dance, right in front of the City Hall; while on Sundays two bands liven up the evening to the rhythms of salsa and cumbia. There are also theatrical, dance and film shows in other cultural venues, such as the Merida Theatre, located just a few steps from the Main Square.
            </p>
            <p>
              Moreover, cultural centers, halls, museums and art galleries have proliferated in the city, offering an array of activities and events to suit all tastes. Music concerts cover all genres, from classical to jazz, going through rock, industrial music or romantic ballads. Art shows range from the traditional to the innovative, and there are also art cinemas, children’s art workshops, literary events, conferences, popular outdoor dances, and much more.
            </p>
            <h2>CENOTES</h2>
            <p>
              Without doubt, a visit to the clear waters of a Mayan cenote is an experience so different that you are suddenly spirited away into a magical world of incredible beauty… By tradition, cenotes are a distinctive insignia of the natural Yucatecan landscape. Sunlight filtering through the cracks in the rocks and projecting onto the transparent water is a visual banquet for nature lovers.
            </p>
            <p>
              Cenotes vary in size and shape according to their location. They can be as irregular as the sunken ground which makes them possible. Some are open in the form of a lake or pool;  other cenotes are half hidden in the caverns, still other cenotes are completely enclosed except for the sprinkling of sunlight through the cracks above, and some are only accessible by following underground passages.
            </p>
            <p>
              Although no two forms are alike, it can be said that cenotes share certain characteristics. The water is cool and fresh since it emerges from underground deposits. It is clear and rich in flora and fauna giving rise to an ecosystem in almost perfect balance, and spectacularly beautiful.
            </p>
            <p>
              For many years the cenotes of Yucatan have been the object of speculation and legend, since they played a determining role in the development of the Maya civilization. Immense communities grew up around them, making them the hub of the city. An abundant quantity of offerings and jewelry has been recovered from the floor of the cenotes, apparently thrown into the depths after human sacrifices. Ceramic remains and utensils destined for religious ceremonies have also been found.
            </p>
            <p>
              As well as their exquisite natural beauty, cenotes have an important archaeological value and are perfect for ecotourism activities such as cave diving, submerging and penetrating the cave depths, exploring sub aquatic galleries, and finding your way through the labyrinth of underwater tunnels is an unforgettable experience for any enthusiast. Besides diving and generally getting to know the place, there´s also rappelling, and swimming to enjoy, while you take in the beauty and mystery which has taken nature tens of millions of years to shape.
            </p>
            <h2>UXMAL</h2>
            <p>
              Known as “Three Times Built,” the architecture of Uxmal is among the most majestic in Yucatan. Its beauty is characterized by low, horizontal palaces placed around patios and quadrants richly decorated with detailed sculptures. Thousands of tiny stones, each polished and carefully positioned, from geometrics mosaics that form perfection unequalled in the entire Mayan region.
            </p>
            <p>
              Uxmal, enveloped by legends, myths and anecdotes, poetic by name and by nature, is situated within a series of hills known as the Puuc or “mountainous area” in Maya. The name was later given to describe the architectural style of region.
            </p>
            <p>
              It is said that Uxmal was founded by the Xiues tribe. During the classic period between 600 and 900 AD the city flourished, with a population of approximately 20,000 inhabitants.
            </p>
            <p>
              The surrounding land allowed the fabrication of the chultunes, cisterns ingeniously built by the Maya to store rainwater since cenotes don´t exist in this area. Highly fertile terrain sustained the agricultural activity necessary to support the ancient settlers. Worship of water, the earth the sun and the Venus are all evident in the orientation and decoration of the structures in Uxmal.
            </p>
            <p>
              The city of Uxmal is made up of 15 groups of buildings distributed from north to south in an extension of about 2 Km. Among the most noteworthy area the Pyramid of the Wizard, the Plaza of the Birds, the Nunnery, the ball Court, the Governor´s palace, the Great Pyramid, and the Pigeon House; from the northern group the old Woman´s House, the Cemetery and the Temple of the Phalli. The wide variety and quantity of buildings which exists speak of the social complexity and political, economic and religious activities which once took place here.
            </p>
            <p>
              The most impressive structure, reaching a height of over 35 m is the House of the Wizard. According to legend, this pyramid in Uxmal was built in just one night by a dwarf. In reality it was built in five stages, with the staircase facing west, towards the setting sun in the summer solstices. The Convent was not named by the Spaniards for its similarity to a European convent. It was probably used as a school for healers, astrologers and priests. The Governor ´s Palace is an excellent example of the rain god Chac, serpents and astrological symbols, and is considered the most beautiful construction in Mesoamerica for its style and imposing proportions.
            </p>
            <p>
              The group of four elongated buildings surrounding the patio is the Nunnery. It is remarkable for its magnificent decoration with motifs, lattice motifs; lattice-work and human figures alternating with serpents, turtle heads owls and masks of the god Chac.
            </p>
            <p>
              It is believed that the downfall or Uxmal was probably due to a social revolt which put an end to the governing elite. There´s a certain refined air about Uxmal that touches visitors from outset.
            </p>
            <h2>KABAH</h2>
            <p>
              This city is known as the second greatest religious center of the Puuc style. It communicated with Uxmal via a sacbe (Mayan road) that originated in El Arco, the main door to the city. The most outstanding building is the Palacio de los Mascarones showing its impressive facade composed of 250 large masks of the god Chac, carved in stone.
            </p>
            <h2>PROGRESO</h2>
            <p>
              Here you can take a stroll by the seafront, enjoy the breeze and savour the delicious regional food in the many restaurants that border the port’s seafront.
            </p>
            <p>
              Thanks to its modern deep-sea port, a tourist meeting point and a border open to commercial exchange with the Gulf of Mexico and the Caribbean Sea, nowadays it is the arrival point of numerous cruises from all over the world, out of which an endless number of passengers disembark to enjoy not only its natural charm and its exquisite flavour of this historic port, but also the peace and tranquility of its people. From here you can discover the whole state on tourist routes designed for day visitors or for those who wish to spend the night in colorful hotels with a view of the sea.
            </p>
            <p>
              Its superb position within the Yucatan Peninsula and its touristic infrastructure makes the city of Progreso the most important port of the state. It is an optimal spot for practicing the most varied aquatic sports: such as snorkeling, windsurfing and kayaking. It is located 36 km north of Merida on highway 261. You will find a traditional market, a plaza, restaurants, hospitals, hotels, foreign exchange houses, taxis, banks and gift shops with traditional crafts.
            </p>
            <h2>DZIBILCHALTUN</h2>
            <p>
              Considered to be one of the oldest Mayan cities, its name means “the place where there is writing on flat stones”. Dzibilchaltun has its own charms, since it has a Franciscan chapel of the XVI century in the middle of the Mayan city.
            </p>
            <p>
              The Museum of the Mayan Town is home to several Spanish and Mayan pieces of equipment; from ceramic objects to Spanish paintings, armours and arms, several Mayan stones and carved doorways in excellent conditions. Another characteristic of Dzibilchaltun is the beautiful cenote.
            </p>
            <h2>CELESTUN</h2>
            <p>
              Celestun is a port full of mystery where some of the most exotic species of Yucatan exist side by side. Pink flamingos; give a spectacular show as they fly overhead. The estuary is their natural breeding ground after long flights along the eastern coast. Visitors can also beat the heat by taking a dip in the sweet, fresh-water coming up from the literally "eyes of water", hidden among the natural tunnels of the estuary formed among the mangroves. These can be reached by boats driven by the locals, whose trips are invariably embellished by stories as interwoven as their fishing nets. Nothing surpasses the trip down the estuary to its spectacular rendezvous with the sea, but not before paying a visit to the beach of unequalled beauty and an exquisite variety of fresh fish and shellfish that are the perfect excuse for spending another day in Celestun.
            </p>
            <h2>CHICHEN-ITZA</h2>
            <p>
              Chichen Itza or “Mouth of the Well Itzaes” is one of the most famous and controversial metropolis’ still standing in the Mayan world. Once a prominent cultural and political center of the old Maya civilization, it was one of the most extensive settlements during the end of the tenth century when the city was invaded by a predominantly warlike tribe; the Toltecs. This invasion infused the culture with a new series of elements, not least of which is the representation of the snake - god Kukulcan. However, years later the city was abandoned for reasons which are still unknown.
            </p>
            <p>
              During his golden era, Chichen Itza was the most powerful city in the Peninsula of Yucatan. Among its most remarkable buildings is the Temple of Warriors, the group of Thousands of Columns, the Platform of Venus, the Tzompantli, the Ball Court, the Snail or Observatory in the Church.
            </p>
            <p>
              The spectacular Pyramid of Kukulcan in Chichen Itza is breathtaking as it towers above its visitors. It is a four¬sided pyramid, 30 meters high and crowned with a temple. The Pyramid actually has two distinct structures, each correspond to a different era. The oldest is completely covered by the most recent. Inside lies the sculpture of a Chac Mool and a throne in the form of a red-painted jaguar. It is believed that this pyramid represents the Mayan calendar: each step is one day of the year. There are 91 steps on each of the four sides, plus the one represented by the platform, a total of 365 days, the solar year to the day, giving rise to the belief that the monument was erected to honor the god of the sun.
            </p>
            <p>
              The astronomical meaning of this building is obvious in Chichen Itza. It is here that the “Feathered Serpent” descends punctually every equinox, in a light and shadow phenomenon that attracts thousands of visitors annually from all over the globe.
            </p>
            <p>
              The sacred cenote of Chichen Itza was the heart of religious activities not only for the city itself, but for the entire Mayan region. As part of their reverence to the god of water, the Maya threw in ceremonial offerings consisting mainly of precious objects. Articles of gold, jade, copper, cloth and basketwork have been retrieved from its murky depths. So great was the city’s power that for centuries after its declines it was occupied sporadically for religious ceremonies before being forgotten and left to be swallowed by the jungle.
            </p>
            <p>
              And so the centuries passed until the arrival of the explorers, ancient relics promised. From among the trees and undergrowth, new discoveries continue to be made.
            </p>
            <p>
              Chichen Itza is a marvelous, magical place to penetrate the intriguing, imposing an unforgettable world of the Maya, and to experience a firsthand view of this extraordinary culture.
            </p>
            <h2>HACIENDA SOTUTA DE PEON</h2>
            <p>
              Hacienda Sotuta de Peon is a fabulous example of a restored, working hacienda. On this trip you will see how the henequen fiber is processed from the natural agave stalk to the finished products of rope and twine. Yucatan’s henequen haciendas produced 90% of the world’s production of twine in its heyday, giving it the name “green gold” in the early 1900’s. This tour will give you a good idea of Yucatan’s colonial history.
            </p>
            <h2>CAVES</h2>
            <p>
              The Yucatan peninsula's rocky subsoil shelters innumerable underground caverns and caves that offer a unique experience for those visiting this gorgeous region. In the old days, these places were considered sacred by the Maya, where they carried out religious ceremonies and presented offerings to the infra-world "inhabitants".
            </p>
            <h2>KAYAK</h2>
            <p>
              We paddle in kayaks through the beauty of the mangrove swamps, learning the importance of these of the ecosystem. Later we visit the archaeological zone of Xcambo, that was a Mayan city of great importance since they produced salt which they commercialized with other great Mayan cities. After visiting the archaeological site we go the beach of Progreso to eat in front of the sea under the shade of one of the palapas and to finalize with a walk on the boardwalk enjoying a crisp snack called “marquesita”.
            </p>
            <h2>NIGHT SNORKEL</h2>
            <p>
              Get ready for maximum adventure in Yucatan with the Night Snorkel and have dinner with a Mayan family. Filled with adventure, mystery, romance, emotion and education; we guarantee this will be a tour that you will never forget.
            </p>
          </div>
          <?php
        }else{
          ?>
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
          <?php
        }
        ?>
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
