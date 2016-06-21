<?php
header('Content-type: text/html; charset=utf-8');
require_once('frmcontactotour.php');
include_once('Captcha_tour.php');

$msg = "";

//print_r($_POST);
if(isset($_POST['btnTour'])) {
	$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';	
	$captcha = new Captcha_tour(0);
		
	if($captcha->valida_captcha($codigo)) {
		
		
		if(isset($_POST['email']) &&
				isset($_POST['nombre']) &&
				isset($_POST['tel']) &&
				isset($_POST['comentarios'])) {

				$nombre = htmlentities($_POST['nombre'], ENT_QUOTES);
				$tel = htmlentities($_POST['tel'], ENT_QUOTES);
				$email = htmlentities($_POST['email'], ENT_QUOTES);
				$comentarios = htmlentities($_POST['comentarios'], ENT_QUOTES);
				
			$frmcontactotour = new frmContactoTour($id,$nombre,$tel,$email,$comentarios);
				
			$email_to = "jesus.caamal@imaginaestudio.mx";
			$email_subject= "Formulario contacto tour a la medida";
		
			$email_message= "<html>
									<body>
									  <table>
										<tr>
											<td align='right'>Nombre:</td>
											<td>".$nombre."</td>
										</tr>
										<tr>
											<td align='right'>Teléfono:</td>
											<td>".$tel."</td>
										</tr>
										<tr>
											<td align='right'>Correo electrónico:</td>
											<td>".$email."</td>
										</tr>
										<tr>
											<td align='right'>Comentarios:</td>
											<td>".$comentarios."</td>
										</tr>

									</table>
									</body>
									</html>";
			
			// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
				$cabeceras = "MIME-Version: 1.0\r\n";
				$cabeceras .= "Content-type: text/html; charset=utf-8"."\r\n";
				$cabeceras.= "From: ".$email."\r\n";
				$cabeceras .= "X-Mailer: PHP/".phpversion()."\r\n";
				
				
			if(mail($email_to, $email_subject,$email_message, $cabeceras))
			{
				$frmcontactotour->insertar();
				
				 echo "<script language='javascript'>
							window.location.href = 'gracias.php';
					   </script>";
			}

		}
	}else{
		$msg = "<p>Captcha incorrecto</p>";
	}
	
	echo $msg;
}


?>