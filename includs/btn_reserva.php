<?php
if($_SESSION['lang']=='en')
{
    ?>
    <a href="#." data-toggle="modal" data-target="#myModal">
        <img src="images/eng/btn-reserva.png" class="img-responsive btn-reserva center-block">
    </a>
    <?php
}else{
    ?>
    <a href="#." data-toggle="modal" data-target="#myModal">
        <img src="images/btn-reserva.png" class="img-responsive btn-reserva center-block">
    </a>
    <?php
}
?>