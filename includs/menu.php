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
                                    <li><a href="chichen_cenote.php">Cenote/ rappel or zip line/ lunch <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Tour in archaeological site</a></li>
                                    <li><a href="chichen_cancun.php">to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">to Playa del Carmen or Riviera</a></li>
                                <?php
                                }else{
                                    ?>

                                    <li><a href="chichen_cenote.php">Cenote/ rappel o tirolesa/ comida <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="chichen_paseo.php">Paseo en zona arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">Con llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">Con llegada a Playa del Carmen o Riviera</a></li>
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
                                    <li><a href="uxmal_comida.php">Snorkel & lunch in mayan house <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">With Kabah tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Light & sound</a></li>
                                    <?php
                                }else{
                                ?>
                                    <li><a href="uxmal_comida.php">Esnórquel y comida en casa maya <img src="images/estrella.png" class="img-estrella"></a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Con paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Luz y sonido</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>

                        <li><a href="esnorquel_cenotes_hacienda.php"><?php if($_SESSION['lang']=='en'){echo'Snorkeling & colonial hacienda';}else{echo'Esnórquel en cenote y hacienda';} ?></a></li>
                        <li><a href="izamal_dia.php"><?php if($_SESSION['lang']=='en'){echo'Day trip to Izamal';}else{echo'Izamal de día';} ?></a></li>
                        <li><a href="hacienda_sotuta_peon.php"><?php if($_SESSION['lang']=='en'){echo'Hacienda Sotuta de Peon';}else{echo'Hacienda Sotuta de Peón';} ?></a></li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Diving';}else{echo'Buceo';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                ?>
                                <li><a href="buceo_cenote_una_inmersion.php">In cenote/ single dive</a></li>
                                <li><a href="buceo_cenote_dos_inmersion.php">In cenote/ two dives</a></li>
                                <li><a href="buceo_cueva_una_inmersion.php">In cave/ single dive</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="buceo_cenote_una_inmersion.php">En cenote/ una inmersión</a></li>
                                <li><a href="buceo_cenote_dos_inmersion.php">En cenote/ dos inmersiones</a></li>
                                <li><a href="buceo_cueva_una_inmersion.php">En cueva/ una inmersión</a></li>
                                <?php
                                } ?>
                            </ul>
                        </li>

                        <li><a href="celestun.php"><?php if($_SESSION['lang']=='en'){echo'Celestun';}else{echo'Celestún';} ?></a></li>
                        <li><a href="cenotes_cuzama.php"><?php if($_SESSION['lang']=='en'){echo'Cenotes Cuzama';}else{echo'Cenotes Cuzamá';} ?> <img src="images/estrella.png" class="img-estrella"></a></li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Mayapan';}else{echo'Mayapán';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="mayapan_grutas_esnorquel.php">Caves & snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Biking & snorkeling</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="mayapan_grutas_esnorquel.php">Grutas y esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Bicicleta y esnórquel</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li><a href="rappel_esnorquel_gruta_comida_hacienda.php"><?php if($_SESSION['lang']=='en'){echo'Rappel/ snorkel/ cave/ lunch in hacienda';}else{echo'Rappel/ esnórquel/ gruta/ comida en hacienda';} ?></a></li>
                        <li><a href="ruta_puuc_lotun.php"><?php if($_SESSION['lang']=='en'){echo'Puuc Route & Loltun';}else{echo'Ruta Puuc y Loltún';} ?></a></li>
                        <li><a href="vida_maya.php"><?php if($_SESSION['lang']=='en'){echo'Mayan life';}else{echo'Vida maya';} ?></a></li>
                        <li><a href="Kayak_xcambo_progreso.php"><?php if($_SESSION['lang']=='en'){echo'Kayak/ Xcambo/ Progreso';}else{echo'Kayak/ X’cambó/ Progreso';} ?></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Activities';}else{echo'Actividades';} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Archaeological Sites';}else{echo'Zonas arqueológicas';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ rappel or zip line/ lunch</a></li>
                                    <li><a href="chichen_paseo.php">Chichen Itza-Tour in archaeological site</a></li>
                                    <li><a href="chichen_cancun.php">Chichen Itza-to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichen Itza-to Playa del Carmen or Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & lunch in mayan house</a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-With Kabah tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Light & sound</a></li>
                                    <li><a href="izamal_dia.php">Day trip to Izamal</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ Xcambo/ Progreso</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ rappel o tirolesa/ comida</a></li>
                                    <li><a href="chichen_paseo.php">Chichén Itzá-Paseo en zona arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">Chichén Itzá-Con llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichén Itzá-Con llegada a Playa del Carmen o Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y comida en casa maya</a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-Con paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Luz y sonido</a></li>
                                    <li><a href="izamal_dia.php">Izamal de día</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ X’cambó/ Progreso</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Walk & photography';}else{echo'Recorridos y fotografía';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ rappel or zip line/ lunch</a></li>
                                    <li><a href="chichen_paseo.php">Chichen Itza-Tour in archaeological site</a></li>
                                    <li><a href="chichen_cancun.php">Chichen Itza-to Cancun</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichen Itza-to Playa del Carmen or Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & lunch in mayan house</a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-With Kabah tour</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Light & sound</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="izamal_dia.php">Day trip to Izamal</a></li>
                                    <li><a href="hacienda_sotuta_peon.php">Hacienda Sotuta de Peon</a></li>
                                    <li><a href="celestun.php">Celestun</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & colonial hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & snorkeling</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="vida_maya.php">Mayan life</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ Xcambo/ Progreso</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ rappel o tirolesa/ comida</a></li>
                                    <li><a href="chichen_paseo.php">Chichén Itzá-Paseo en zona arqueológica</a></li>
                                    <li><a href="chichen_cancun.php">Chichén Itzá-Con llegada a Cancún</a></li>
                                    <li><a href="chichen_playa_carmen.php">Chichén Itzá-Con llegada a Playa del Carmen o Riviera</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y comida en casa maya</a></li>
                                    <li><a href="uxmal_paseo_kabah.php">Uxmal-Con paseo en Kabáh</a></li>
                                    <li><a href="uxmal_luz_sonido.php">Uxmal-Luz y sonido</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="izamal_dia.php">Izamal de día</a></li>
                                    <li><a href="hacienda_sotuta_peon.php">Hacienda Sotuta de Peón</a></li>
                                    <li><a href="celestun.php">Celestún</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en cenote y hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y esnórquel</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="vida_maya.php">Vida maya</a></li>
                                    <li><a href="Kayak_xcambo_progreso.php">Kayak/ X’cambó/ Progreso</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Cenotes';}else{echo'Cenotes';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ rappel or zip line/ lunch</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & lunch in mayan house</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="buceo_cenote_una_inmersion.php">Daving-In cenote/ single dive</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Daving-In cenote/ two dives</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Daving-In cave/ single dive</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & colonial hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & snorkeling</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ snorkel/ cave/ lunch in hacienda</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Puuc Route & Loltun</a></li>
                                    <li><a href="vida_maya.php">Mayan life</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ rappel o tirolesa/ comida</a></li>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y comida en casa maya</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="buceo_cenote_una_inmersion.php">Buceo-En cenote/ una inmersión</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Buceo-En cenote/ dos inmersiones</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Buceo-En cueva/ una inmersión</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en cenote y hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y esnórquel</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ esnórquel/ gruta/ comida en hacienda</a></li>
                                    <li><a href="ruta_puuc_lotun.php">Ruta Puuc y Loltún</a></li>
                                    <li><a href="vida_maya.php">Vida maya</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Kayak';}else{echo'Kayak';} ?> </a>
                            <ul class="dropdown-menu">
                                <li><a href="Kayak_xcambo_progreso.php"><?php if($_SESSION['lang']=='en'){echo'Kayak/ Xcambo/ Progreso';}else{echo'Kayak/ X’cambó/ Progreso';} ?></a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Snorkel';}else{echo'Esnórquel';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="uxmal_comida.php">Uxmal-Snorkel & lunch in mayan house</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzama</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Snorkeling & colonial hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & snorkeling</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapan-Biking & snorkeling</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ snorkel/ cave/ lunch in hacienda</a></li>
                                    <li><a href="vida_maya.php">Mayan life</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="uxmal_comida.php">Uxmal-Esnórquel y comida en casa maya</a></li>
                                    <li><a href="cenotes_cuzama.php">Cenotes Cuzamá</a></li>
                                    <li><a href="esnorquel_cenotes_hacienda.php">Esnórquel en cenote y hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y esnórquel</a></li>
                                    <li><a href="mayapan_bicicleta_esnorquel.php">Mayapán-Bicicleta y esnórquel</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ esnórquel/ gruta/ comida en hacienda</a></li>
                                    <li><a href="vida_maya.php">Vida maya</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Rappel';}else{echo'Rappel';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichen Itza-Cenote/ rappel or zip line/ lunch</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ snorkel/ cave/ lunch in hacienda</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="chichen_cenote.php">Chichén Itzá-Cenote/ rappel o tirolesa/ comida</a></li>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ esnórquel/ gruta/ comida en hacienda</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Caves';}else{echo'Grutas';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ snorkel/ cave/ lunch in hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapan-Caves & snorkeling</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="rappel_esnorquel_gruta_comida_hacienda.php">Rappel/ esnórquel/ gruta/ comida en hacienda</a></li>
                                    <li><a href="mayapan_grutas_esnorquel.php">Mayapán-Grutas y esnórquel</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['lang']=='en'){echo'Daving';}else{echo'Buceo';} ?> </a>
                            <ul class="dropdown-menu">
                                <?php
                                if($_SESSION['lang']=='en'){
                                    ?>
                                    <li><a href="buceo_cenote_una_inmersion.php">Daving-In cenote/ single dive</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Daving-In cenote/ two dives</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Daving-In cave/ single dive</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="buceo_cenote_una_inmersion.php">Buceo-En cenote/ una inmersión</a></li>
                                    <li><a href="buceo_cenote_dos_inmersion.php">Buceo-En cenote/ dos inmersiones</a></li>
                                    <li><a href="buceo_cueva_una_inmersion.php">Buceo-En cueva/ una inmersión</a></li>
                                    <?php
                                } ?>
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