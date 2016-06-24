<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
  $titulo="Dear traveler";
}else{
  $titulo="Querido Viajero";
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
  <?php
  if($_SESSION['lang']=='en')
  {
    ?>
    <img src="images/eng/banner_querido_viajero.jpg" class="banner-interiores">
    <?php
  }else{
    ?>
    <img src="images/banner_querido_viajero.jpg" class="banner-interiores">
    <?php
  }
  ?>
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
          <a href="pdf/Eventos_culturales_en_Merida_ingles.pdf" target="_blank"><img src="images/eng/eventos.jpg" class="img-responsive img-eventos"></a>
          <p>
            In this section, you will know about the most important festivities in Merida and a brief review for the richness Yucatecan culture in order to get closer to the beautiful land that you will visit.
          </p>
          <h2>FESTIVITIES & ACTIVITIES</h2>
          <p>
            <strong>Merida’s anniversary arts festival</strong><br>
            The night of January 5, like every year with the traditional alborada (dawn), Merida awakes to the voice of hundreds of troubadours that sing to the city in the eve of its anniversary. From that day, more than 170 events will take place on days of intense cultural activity that will adorn the celebrations of the anniversary of the foundation of Merida, Yucatan.
          </p>
          <p>
            The Festival of the City resurrects and shares its customs and traditions with its visitors through dance, music, theatre, visual arts and literature spectacles.
          </p>
          <p>
            <strong>Merida Carnival</strong><br>
            Popular celebration, during the first weeks of February, it summons its citizens to the streets to enjoy the Paseo de Carnival; these celebrations to the God Momo usually take place before lent. During five consecutive days, the hustle and bustle reigns, as well as the joy and the participation of the community amusing itself with musical groups, parades and events throughout Paseo de Montejo.
          </p>
          <p>
            <strong>Cultural autumn</strong><br>
            The Institute of Culture of Yucatan (ICY) programs an events season named Cultural Autumn, beginning in October. The shows take place in different stages like the Culture House, the beautiful José Peón Contreras theatre, the Daniel Ayala Pérez theatre and other important places, with plays, dance and plastic arts. A cultural interchange also takes place with the Cervantino Festival from Guanajuato.
          </p>
          <p>
            <strong>Yucatan fair</strong><br>
            During 15 days different exhibitions presented of pedigree cattle and artisan craft, industrial, tourist and commercial samples, where the best of the production of the state is displayed. It takes place in November and there are equestrian competitions, charreadas, sport activities, cultural events and the roosters palenque, where artistic shows are given with figures of national and international reputation.
          </p>
          <p>
            <strong>Merida on Sunday</strong><br>
            Every Sunday there are outdoor shows in different places in the downtown. Worth noting are the traditional “vaquería”, custom born in the old haciendas of the state, where the women took care of the guests and their wives and in the end danced to mayan sones combined with spanish music, in honour of the landlord or owner of the hacienda.
          </p>
          <p>
            In this cultural event stands are placed with crafts and traditional Yucatecan clothes, like the huipiles, guayaberas, Yucatecan antojitos or traditional Mexican snacks, etc…
          </p>
          <h2>TRADITIONS</h2>
          <p>
            <strong>Hanal Pixán (Day of dead)</strong><br>
            In Mayan it means “Food for the souls”. This tradition goes back to antiquity to venerate the memory of relatives who have passed away. In towns of the interior of the state novenas take place, as well as prayers, offerings, and during the 1st and 2nd of November, a visit to the cemetery is obligatory to pray for your loved ones;  These dates are dedicated to spending time with the souls in their annual passing through by the earthly plane, when they receive permission to visit their relatives. The delicious “mucbilpollos” or “pibes”, a big tamal made of corn flour, stuffed with chicken and pork made.
          </p>
          <p>
            <strong>La Jarana</strong><br>
            In Spanish, the term “jarana” means “racket” or “noisy party”. However, throughout Mexico, jarana refers to the main dance of Yucatecan popular celebrations.
          </p>
          <p>
            The resounding music is usually played by a typical jarana orchestra, consisting of two clarinets, two trumpets, two trombones, a “güiro” (a dry gourd with numerous slits, stricken with a thin stick to make a scratchy sound) and a set of timbales (tropical music kettledrums). Jarana music derived from old regional rhythms known as “sones”, but it is also a combination of European rhythms and ancient musical expressions of the Maya people.
          </p>
          <p>
            Strictly speaking, no special attire is needed to dance a jarana, but female dancers usually wear a typical Yucatecan “hipil” or “terno de gala” (the full dress version of a “hipil”), white high heeled shoes and a Santa Maria shawl. The traditional men’s attire consists of white drill pants, a white silk or linen loose-fitting shirt (known as “guayabera”), a Panama hat, a red scarf hanging from one of the pockets, and Yucatecan leather sandals (known as “alpargatas”). Yucatecan traditional dress known as “traje de mestizo/mestiza”.
          </p>
          <h2>RASGOS CULTURALES</h2>
          <p>
            <strong>Yucatecan music</strong><br>
            The geographic position of Yucatan, the ethnic composition of its inhabitants and its cultural links with the main European centers enabled the blossoming of a people of great artistic vocation, especially for music and poetry.
          </p>
          <p>
            In the dawn of the XX century,  Ricardo Palmerin (Peregrina), Guty Cárdenas (Caminante del Mayab) and Pepe Dominguez (Granito de Sal) arose, who by giving music to the verses of some writings brought life to the golden age of the Yucatecan song. Without a doubt, Yucatan is an inexhaustible quarry of great composers and poets.
          </p>
          <p>
            <strong>Language</strong><br>
            In Merida, the capital of the State of Yucatan, the prevailing language is Spanish. However, Yucatec an- Maya is still spoken in neighboring rural communities.
          </p>
          <p>
            <strong>Gastronomy</strong><br>
            Yucatecan traditional cuisine derived from the mixing of Spanish and Maya cultures is precisely the combination of recipes and ingredients from those two culinary traditions that has resulted in the characteristic flavors of our cuisine.
          </p>
          <p>
            Indeed, Yucatecan food is renowned throughout Mexico for its strong condiments and the predominant use of corn. For instance, dishes like lime soup, papadzules and Motul¬style eggs all made with fried corn tortillas, and panuchos and dzotolbichay made with corn dough; another common ingredient in some of the most exquisite traditional Yucatecan dishes is turkey.
          </p>
          <p>
            Merida boasts a large number of restaurants where you will be able to find any kind of food, from the most basic and inexpensive to the most sophisticated fine dining.
            The city’s choice of international gourmet cuisine is ever growing.
          </p>
          <h2>WEATHER</h2>
          <p>
            The weather of Merida and the rest of the Yucatan Peninsula are warm and humid. There is a long rainy season from May to January, although rains during the dry months (February, March and April) are not unheard of. The warmest months are April and May, when temperature reaches 40°C (104°F). According to meteorologists, Merida’s weather falls in the “Awo” category (warm, sub humid, with summer rains). Average temperature is 26.61°C (80°F).
          </p>
          <p>
            The predominant winds blow from the southeast (known in Maya as "lahunlakin ik"), the northeast ("xamanxikin ik") and the north ("xaman ik"). Mild tropical storms occur sporadically between August and October. Between September and January, winds blowing from the north bring about cool and overcast spells that last several days. Between these relieving periods, “Kin”, the sun, shines over Merida almost as intensely as during the summer.
          </p>
          <h2>GEOGRAPHIC  LOCATION</h2>
          <p>
            Merida is located less than 50 km from the Gulf of Mexico, on the northeast part of the State of Yucatan, which occupies the northernmost third of the Yucatan Peninsula. The city’s coordinates are 20° 58' 04 " N, 89° 37' 18" W.
          </p>
          <p>
            Yucatán borders are with the state of Quintana Roo to the east, the state of Campeche to the west, and the Gulf of México to the north. Yucatán has a very flat landscape and most of the state is slightly above sea level.
          </p>
        </div>
          <?php
        }else{
          ?>
          <div id="info-general">
            <p>&nbsp;</p>
            <a href="pdf/Eventos_culturales_en_Merida_espanol.pdf" target="_blank"><img src="images/eventos.jpg" class="img-responsive img-eventos"></a>
            <p>
              En esta sección te presentamos información relevante acerca de las festividades más importantes de la ciudad de Mérida, al igual que un breve repaso por la riqueza cultural yucateca con el fin de acercarte más a la bella tierra que visitarás.
            </p>
            <h2>FESTIVIDADES Y ACTIVIDADES</h2>
            <p>
              <strong>Aniversario de la ciudad</strong><br>
              La noche del 5 de enero, la tradicional alborada despierta a la Blanca Mérida al son de cientos de trovadores que le cantan a la ciudad, en vísperas de su aniversario. A partir de ese día se llevan a cabo más de 170 eventos, una intensa actividad cultural que engalana los festejos por el aniversario de la fundación de Mérida, capital del estado de Yucatán.
            </p>
            <p>
              El Festival de la Ciudad, a través de espectáculos de danza, música, teatro, artes visuales y literatura, rescata las costumbres y tradiciones que comparte con propios y extraños, asombrándolos con cada propuesta que ofrece.
            </p>
            <p>
              <strong>Carnaval de Mérida</strong><br>
              Fiesta popular que se realiza durante el mes de febrero o marzo (antes que inicie el periodo de Cuaresma), convocando a los ciudadanos a salir a las calles y disfrutar de los paseos de carros alegóricos; estos festejos son en honor al dios Momo. Durante cinco días consecutivos impera el bullicio y la alegría de la gente, que se divierte con música y baile.
            </p>
            <p>
              <strong>Otoño Cultural</strong><br>
              El Instituto de Cultura de Yucatán (ICY), programa una temporada de eventos denominada Otoño Cultural, dando inicio en el mes de octubre. Los espectáculos se realizan en diferentes escenarios como la Casa de la Cultura, el histórico Teatro José Peón Contreras, el Teatro Daniel Ayala Pérez y otros sitios de importancia, con obras de teatro, danza y artes plásticas. También se hace un intercambio cultural con el Festival Cervantino que se desarrolla en Guanajuato.
            </p>
            <p>
              <strong>Feria Yucatán</strong><br>
              Durante 15 días se llevan a cabo diferentes exposiciones de ganado de alto registro, además de muestras artesanales, industriales, turísticas y comerciales, donde se da a conocer lo mejor que se produce en la entidad. Se realiza en el mes de noviembre.
            </p>
            <p>
              Competencias ecuestres, charreadas, actividades deportivas, eventos culturales y el palenque de gallos, forman parte del programa además de espectáculos artísticos con figuras de renombre nacional e internacional.
            </p>
            <p>
              <strong>Mérida en Domingo</strong><br>
              Todos los domingos se ofrecen espectáculos al aire libre, en diferentes partes del centro de la ciudad. Cabe destacar la tradicional vaquería, costumbre nacida en las antiguas haciendas del estado, donde las mujeres atendían a los invitados y esposas, y al final bailaban sones mayas combinados con música española, en honor del patrón o dueño de la hacienda.
              En este evento cultural se ofrecen artesanías y ropa típica, como los huipiles y guayaberas así como variedad de platillos y antojitos yucatecos.
            </p>
            <h2>TRADICIONES</h2>
            <p>
              <strong>Hanal Pixán (Día de muertos)</strong><br>
              En maya significa “Comida de las ánimas”. Esta tradición se remonta en la antigüedad para venerar la memoria de los fallecidos. En los pueblos del interior del estado se realizan novenas, rezos, ofrendas los días 1 y 2 de noviembre, las cuales son fechas dedicadas a la convivencia con las ánimas en su paso anual por el plano terrenal, ya que “reciben permiso” para visitar a sus familiares. También se acostumbra la elaboración de los sabrosos mucbipollos o pibes, tamal grande hecho de masa de harina de maíz, relleno de carne de pollo y cerdo.
            </p>
            <p>
              <strong>La Jarana</strong><br>
              El término jarana, entendido como "alboroto", se refiere al principal baile de las fiestas populares en Yucatán. Una auténtica muestra del mestizaje artístico. La jarana atrae y conquista, ya sea por la cadencia y elegancia de los pasos, por la alegría de la música, o por la actitud solemne de los bailadores que zapatean sobre el suelo.
            </p>
            <p>
              Su música, estrepitosa y sonora, está generalmente a cargo de una típica orquesta jaranera, integrada por dos clarinetes, dos trompetas, dos trombones, un güiro y los timbales; derivada de antiguos sones regionales, la música es también una mezcla peculiar de las canciones y ritmos europeos con expresiones milenarias del alma musical del pueblo maya.
            </p>
            <p>
              Aunque en término estricto no es necesaria una prenda especial, generalmente las mujeres visten el típico huipil yucateco o el terno de gala, calzan zapatos blancos y se envuelven con un rebozo de Santa María además de infinidad de collares y pulsos de filigrana y un tocado de flores en la cabeza. Los hombres también deben vestir de mestizos, con pantalón de dril y guayabera de seda o lino, ambos de color blanco, sobre la cabeza llevan un sombrero tejido, en los bolsillos un paliacate rojo y calzan alpargatas yucatecas o sandalia con tacón.
            </p>
            <h2>RASGOS CULTURALES</h2>
            <p>
              <strong>Música Yucateca</strong><br>
              La posición geográfica de Yucatán, la composición étnica de sus habitantes y su vinculación cultural con los principales centros de Europa, propiciaron el florecimiento de un pueblo con gran vocación artística, especialmente hacia la música y la poesía.
            </p>
            <p>
              En los albores del siglo XX surgen Ricardo Palmerín (Peregrina), Guty Cárdenas (Caminante del Mayab) y Pepe Domínguez (Granito de Sal), que musicalizando versos de algunos escritos dieron vida a la “Época de oro de la canción yucateca”.
            </p>
            <p>
              <strong>Idioma</strong><br>
              En la capital del estado, Mérida, el idioma predominante es el español sin embargo en las comunidades rurales aún se conserva la lengua maya.
            </p>
            <p>
              <strong>Gastronomía</strong><br>
              La cocina tradicional yucateca deriva básicamente de la cultura hispana y la cultura maya. El gusto exquisito que la caracteriza depende de la combinación de recetas e ingredientes; su sabor típico es reconocible en todo México por el predominio de los condimentos fuertes empleados en su sazón.
            </p>
            <p>
              El maíz es también componente esencial de la gastronomía yucateca y es consumido abundantemente, la sopa de lima, el papadzul y los huevos motuleños son platillos cocinados con tortilla frita mientras que el panucho y el dzotolbichay, se preparan con masa. La carne de pavo, excepcionalmente empleada en Yucatán, es también ingrediente básico en una gran cantidad de suculentas recetas tradicionales.
            </p>
            <p>
              La ciudad de Mérida cuenta con una extensa oferta de restaurantes en los que es posible degustar toda clase de comidas, desde las más elementales y económicas, hasta las más sofisticadas.
            </p>
            <h2>CLIMA</h2>
            <p>
              La Península de Yucatán tiene un clima caliente y húmedo. La extensión de lluvias es larga y va desde mayo hasta enero, aunque no es raro que llueva durante los llamados meses secos como febrero, marzo y abril. Los meses más calurosos son abril y mayo, llegando el termómetro en ocasiones hasta 40° centígrados. Los meteorólogos clasifican el clima como tipo “Awo” (cálido subhúmedo, con lluvias durante el verano), con una temperatura promedio de 26° centígrados.
            </p>
            <p>
              Las tormentas tropicales son esporádicas y leves entre los meses de agosto y octubre, y de septiembre hasta enero son comunes los vientos del norte que nublan y refrescan la ciudad, después de los cuales vuelve a brillar "Kin", el Dios del sol, casi con la misma intensidad que en verano.
            </p>
            <h2>UBICACIÓN GEOGRÁFICA</h2>
            <p>
              Mérida está localizada a 50 km del Golfo de México, en la parte noreste del Estado de Yucatán.
              El estado de Yucatán abarca la parte norte de la Península del mismo nombre; sus coordenadas son 20° 58' 04" N, 89° 37' 18" O. Al este colinda con el estado de Quintana Roo, al oeste con el Estado de Campeche y al norte con el Golfo de México. Posee una topografía muy plana y está situado cerca del nivel del mar.
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
