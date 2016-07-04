<?php
require_once('../Clases/frmcontactotour.php');

$op = (isset($_REQUEST['op'])) ? $_REQUEST['op'] : '';		// opcion
$idFrmContactoTour = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : 0;	// id
$nombre = (isset($_REQUEST['nombre'])) ? $_REQUEST['nombre'] : '';
$tel = (isset($_REQUEST['tel'])) ? $_REQUEST['tel'] : '';
$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : '';
$comentarios = (isset($_REQUEST['comentarios'])) ? $_REQUEST['comentarios'] : '';
$fecha = (isset($_REQUEST['fecha'])) ? $_REQUEST['fecha'] : '';




$frmcontactotour = new frmContactoTour($idFrmContactoTour,$nombre,$tel,$email,$comentarios,$fecha);



//print_r($_REQUEST);

switch ($op) {
	case 'Eliminar':
		$frmcontactotour->eliminar();
		break;

}
	//header('Location:lnoticias.php');
?>