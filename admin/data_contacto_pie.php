<?php
include_once('../Clases/Seguridad.php');
$seguridad=new Seguridad();
$seguridad->candado();

require_once('../Clases/frmcontactopie.php');


$tmpfrmcontactopie = new frmcontactoPie(0,'','','','','','');
$frm_contacto_pie = $tmpfrmcontactopie->listar();


header('Content-type: application/vnd.ms-excel');

header("Content-Disposition: attachment; filename=Registros_Contacto_pie.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Datos contacto pie </title>

</head>

<body>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
            	<th style="background-color:#01833B; text-align:center; color:#FFF;">#</th>
                <th style="background-color:#01833B; text-align:center; color:#FFF;">Nombre</th>
                <th style="background-color:#01833B; text-align:center; color:#FFF;">Teléfono</th>
				<th style="background-color:#01833B; text-align:center; color:#FFF;">Email</th>
				<th style="background-color:#01833B; text-align:center; color:#FFF;">Pais</th>
				<th style="background-color:#01833B; text-align:center; color:#FFF;">Estado</th>
                <th style="background-color:#01833B; text-align:center; color:#FFF;">Comentarios</th>
				<th style="background-color:#01833B; text-align:center; color:#FFF;">Título</th>
				<th style="background-color:#01833B; text-align:center; color:#FFF;">Fecha</th>
            </tr>
		<?php
		$cont=0;
		foreach ($frm_contacto_pie as $e) {
			$cont++;
			
					echo'<tr>';
						echo'<td align="center">'.$cont.'</td>';
						echo'<td align="center">'.$e['nombre'].'</td>';
						echo'<td align="center">'.$e['tel'].'</td>';
						echo'<td align="center">'.$e['email'].'</td>';
						echo'<td align="center">'.$e['pais'].'</td>';
						echo'<td align="center">'.$e['estado'].'</td>';
						echo'<td align="center">'.$e['comentarios'].'</td>';
						echo'<td align="center">'.$e['titulo'].'</td>';
						echo'<td align="center">'.$e['fecha'].'</td>';
					echo'</tr>';
				}
        ?>
        </tr>
           </table>
			
</body>

</html>