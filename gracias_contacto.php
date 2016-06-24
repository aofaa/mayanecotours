<?php
include('includs/session.php');

if($_SESSION['lang']=='en') {
    $titulo="Thank you";
}else{
    $titulo="Gracias";
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
<body style="background-color: #01833B;">
<?php include('includs/analytics.php'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img src="images/logo-footer.png" class="img-responsive center-block img-gracias">
                <div id="gracias">
                    <h1>
                        <?php echo $_SESSION['lang']=='en'?'We have received your message!':'¡Hemos recibido tu mensaje!'; ?>
                    </h1>
                    <h2>
                        <?php echo $_SESSION['lang']=='en'?'Soon we will contact you':'Pronto nos pondremos en contacto contigo'; ?>

                    </h2>
                    <h4 id="cuentaregresiva"></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script language="JavaScript">

    /* Determinamos el tiempo total en segundos */

    var totalTiempo=10;

    /* Determinamos la url donde redireccionar */

    var url=".";



    function updateReloj()

    {
        <?php
        if($_SESSION['lang']=='en')
        {
        ?>
        $('#cuentaregresiva').html("Wait a moment we are being redirected again in "+totalTiempo+" seconds");
        <?php
        }else{
        ?>
        $('#cuentaregresiva').html("Espere un momento lo estamos redireccionando de nuevo en "+totalTiempo+" segundos");
        <?php
        }
        ?>

        if(totalTiempo==0)

        {

            window.location=url;

        }else{

            /* Restamos un segundo al tiempo restante */

            totalTiempo-=1;

            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */

            setTimeout("updateReloj()",1000);

        }

    }



    window.onload=updateReloj;

</script>
</body>
</html>
