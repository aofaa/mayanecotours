<?php
require_once('../Clases/frmcontactopie.php');

$op = (isset($_REQUEST['op'])) ? $_REQUEST['op'] : '';		// opcion
$idFrmContactoPie = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : 0;	// id
$nombre = (isset($_REQUEST['nombre'])) ? $_REQUEST['nombre'] : '';
$tel = (isset($_REQUEST['tel'])) ? $_REQUEST['tel'] : '';
$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : '';
$comentarios = (isset($_REQUEST['comentarios'])) ? $_REQUEST['comentarios'] : '';
$titulo = (isset($_REQUEST['titulo'])) ? $_REQUEST['titulo'] : '';
$fecha = (isset($_REQUEST['fecha'])) ? $_REQUEST['fecha'] : '';




$frmcontactopie = new frmcontactoPie($idFrmContactoPie,$nombre,$tel,$email,$comentarios,$titulo,$fecha);



//print_r($_REQUEST);

switch ($op) {
	case 'Eliminar':
		$frmcontactopie->eliminar();
		break;

}
	//header('Location:lnoticias.php');
?>