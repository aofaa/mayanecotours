<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="."><img src="images/logo.png" class="img-responsive center-block"></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="quienes_somos.php">
                        <?php if($_SESSION['lang']=='en'){echo'Get to know us';}else{echo'Quiénes Somos';} ?>
                    </a>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Our Tours';}else{echo'Nuestros Tours';} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Chichen Itza';}else{echo'Chichen Itzá';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                 ?>
                                    <li><a href="chichen_cenote.php">Cenote/ Rappel or Zip line/ Lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Tour in Archaeological Site</a></li>
                                    <li><a href="chichen_cancun.php">to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">to Playa del Carmen or Riviera</a></li>
                                <?php
                                }else{
                                    ?>

                                    <li><a href="chichen_cenote.php">Cenote/ Rappel o Tirolesa/ Comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Paseo en Zona Arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">con Llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">con Llegada a Playa del Carmen o Riviera</a></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Uxmal';}else{echo'Uxmal';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en') {
                                    ?>
                                    <li><a href="uxmal_comida.php">Snorkel & Lunch in a Mayan House <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">with Kabah Tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Light & Sound</a></li>
                                    <?php
                                }else{
                                ?>
                                    <li><a href="uxmal_comida.php">Esnórquel y Comida en Casa Maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">con Paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Luz y Sonido</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>

                        <li><a href="esnorquel_cenotes_hacienda.php"><?php if($_SESSION['lang']=='en'){echo'Snorkeling & Colonial Hacienda';}else{echo'Esnórquel en Cenotes y Hacienda';} ?><img src="images/estrella.png" class="img-estrella"></a></li>
                        <li><a href="Kayak_xcambo_progreso.php"><?php if($_SESSION['lang']=='en'){echo'Kayak/ Xcambo/ Progreso';}else{echo'Kayak/ X’cambó/ Progreso';} ?></a></li>
                        <li><a href="cenotes_cuzama.php"><?php if($_SESSION['lang']=='en'){echo'Cenotes Cuzama';}else{echo'Cenotes Cuzamá';} ?></a></li>
                        <li><a href="vida_maya.php"><?php if($_SESSION['lang']=='en'){echo'Mayan Life';}else{echo'Vida Maya';} ?></a></li>
                        <li><a href="rappel_esnorquel_gruta_comida_hacienda.php"><?php if($_SESSION['lang']=='en'){echo'Rappel/ Snorkel/ Cave/ Lunch in Hacienda';}else{echo'Rappel/ Esnórquel/ Gruta/ Comida en Hacienda';} ?></a></li>
                        <li><a href="celestun.php"><?php if($_SESSION['lang']=='en'){echo'Celestun';}else{echo'Celestún';} ?></a></li>
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Mayapan';}else{echo'Mayapán';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="mayapan_grutas_esnorquel.php">Caves & Snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Biking & Snorkeling</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="mayapan_grutas_esnorquel.php">Grutas y Esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Bicicleta y Esnórquel</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>
                        <li><a href="ruta_puuc_lotun.php"><?php if($_SESSION['lang']=='en'){echo'Puuc Route & Loltun';}else{echo'Ruta Puuc y Loltún';} ?></a></li>
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Diving';}else{echo'Buceo';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                ?>
                                <li><a href="buceo_cenote_una_inmersion.php">in Cenote/ Single Dive</a></li>
                                <li><a href="buceo_cenote_dos_inmersion.php">in Cenote/ Two Dives</a></li>
                                <li><a href="buceo_cueva_una_inmersion.php">in Cave/ Single Dive</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="buceo_cenote_una_inmersion.php">en Cenote/ Una Inmersión</a></li>
                                <li><a href="buceo_cenote_dos_inmersion.php">en Cenote/ Dos Inmersiones</a></li>
                                <li><a href="buceo_cueva_una_inmersion.php">en Cueva/ Una Inmersión</a></li>
                                <?php
                                } ?>
                            </ul>
                        </li>
                        <li><a href="hacienda_sotuta_peon.php"><?php if($_SESSION['lang']=='en'){echo'Hacienda Sotuta de Peon';}else{echo'Hacienda Sotuta de Peón';} ?></a></li>
                        <li><a href="izamal_dia.php"><?php if($_SESSION['lang']=='en'){echo'Day Trip to Izamal';}else{echo'Izamal de Día';} ?></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Activities';}else{echo'Actividades';} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Archaeological Sites';}else{echo'Zonas Arqueológicas';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ rappel or Zip Line/ Lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Chichen Itza-Tour in Archaeological Site</a></li>
                                    <li><a href="chichen_cancun.php">Chichen Itza-to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichen Itza-to Playa del Carmen or Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & Lunch in a Mayan House <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-with Kabah Tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Light & Sound</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ Xcambo/ Progreso</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & Snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & Snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="izamal_dia.php">Day Trip to Izamal</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ Rappel o Tirolesa/ Comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Chichén Itzá-Paseo en Zona Arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">Chichén Itzá-con Llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichén Itzá-con Llegada a Playa del Carmen o Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y Comida en Casa Maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-con Paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Luz y Sonido</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ X’cambó/ Progreso</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y Esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y Esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="izamal_dia.php">Izamal de Día</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Walking & Photography';}else{echo'Recorridos y Fotografía';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ Rappel or Zip Line/ Lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Chichen Itza-Tour in Archaeological Site</a></li>
                                    <li><a href="chichen_cancun.php">Chichen Itza-to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichen Itza-to Playa del Carmen or Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & lunch in a Mayan House <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-with Kabah Tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Light & Sound</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & Colonial Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ Xcambo/ Progreso</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="vida_maya.php">Mayan Life</a></li>
                                    <li><a href="celestun.php">Celestun</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & Snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & Snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="hacienda_sotuta_peon.php">Hacienda Sotuta de Peon</a></li>
                                    <li><a href="izamal_dia.php">Day Trip to Izamal</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ Rappel o Tirolesa/ Comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Chichén Itzá-Paseo en Zona Arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">Chichén Itzá-con Llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichén Itzá-con Llegada a Playa del Carmen o Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y Comida en Casa Maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-con Paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Luz y Sonido</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en Cenote y Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ X’cambó/ Progreso</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="vida_maya.php">Vida Maya</a></li>
                                    <li><a href="celestun.php">Celestún</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y Esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y Esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="hacienda_sotuta_peon.php">Hacienda Sotuta de Peón</a></li>
                                    <li><a href="izamal_dia.php">Izamal de Día</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Cenotes';}else{echo'Cenotes';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ Rappel or Zip Line/ Lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & Lunch in a Mayan House <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & Colonial Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="vida_maya.php">Mayan Life</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Snorkel/ Cave/ Lunch in Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & Snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & Snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="buceo_cenote_una_inmersion.php">Daving-in Cenote/ Single Dive</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Daving-in cenote/ Two Dives</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Daving-in Cave/ Single Dive</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ Rappel o Tirolesa/ Comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y Comida en Casa Maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en Cenote y Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="vida_maya.php">Vida Maya</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Esnórquel/ Gruta/ Comida en Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y Esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y Esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="buceo_cenote_una_inmersion.php">Buceo-en Cenote/ Una Inmersión</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Buceo-en Cenote/ Dos Inmersiones</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Buceo-en Cueva/ Una Inmersión</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Snorkel';}else{echo'Esnórquel';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & Lunch in a Mayan House <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & Colonial Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="vida_maya.php">Mayan Life</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Snorkel/ Cave/ Lunch in Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & Snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & Snorkeling</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y Comida en Casa Maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en Cenote y Hacienda <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="vida_maya.php">Vida Maya</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Esnórquel/ Gruta/ Comida en Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y Esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y Esnórquel</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Rappel';}else{echo'Rappel';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ Rappel or Zip line/ Lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Snorkel/ Cave/ Lunch in Hacienda</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ Rappel o Tirolesa/ Comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Esnórquel/ Gruta/ Comida en Hacienda</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Caves';}else{echo'Grutas';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Snorkel/ Cave/ Lunch in Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & Snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ Esnórquel/ Gruta/ Comida en Hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y Esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Diving';}else{echo'Buceo';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="buceo_cenote_una_inmersion.php">Diving-in Cenote/ Single Dive</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Diving-in Cenote/ Two Dives</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Diving-in Cave/ Single Dive</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="buceo_cenote_una_inmersion.php">Buceo-en Cenote/ Una Inmersión</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Buceo-en Cenote/ Dos Inmersiones</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Buceo-en Cueva/ Una Inmersión</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Kayak';}else{echo'Kayak';} ?> </a>
                            <ul class="dropdown-menu">
                                <li><a href="Kayak_xcambo_progreso.php"><?php if($_SESSION['lang']=='en'){echo'Kayak/ Xcambo/ Progreso';}else{echo'Kayak/ X’cambó/ Progreso';} ?></a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a href="tours_medida.php"><?php if($_SESSION['lang']=='en'){echo'Custom tour';}else{echo'Tours a la Medida';} ?></a></li>
                <li><a href="circuitos.php"><?php if($_SESSION['lang']=='en'){echo'Packages';}else{echo'Circuitos';} ?></a></li>
                <li><a href="testimonios.php"><?php if($_SESSION['lang']=='en'){echo'Testimonials';}else{echo'Testimonios';} ?></a></li>
                <li><a href="querido_viajero.php"><?php if($_SESSION['lang']=='en'){echo'Dear traveler';}else{echo'Querido Viajero';} ?></a></li>
                <li><a href="contacto.php"><?php if($_SESSION['lang']=='en'){echo'Contact us';}else{echo'Contacto';} ?></a></li>
                <li><a href="?lang=mx" class="img-idioma"><img src="images/esp.png"></a></li>
                <li><img src="images/raya-menu.jpg" class="linea-idioma"><a href="?lang=en" class="img-idioma"><img src="images/eng.png"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>