<?php
include_once('Captcha_contacto.php');
$captcha = new Captcha_contacto();
$captcha->genera_imagen();
//$captcha->valida_captcha();
?>