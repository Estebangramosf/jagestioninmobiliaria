<?php 
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "ceo.intweb@gmail.com, gestion.j.a0602@gmail.com, pamelaramosahumada@gmail.com, danielapolanco08@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) || !isset($_POST['url']) || !isset($_POST['email']) || !isset($_POST['telefono']) || !isset($_POST['message'])) {
	echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
	echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
	die();
}else{
	$email_from=$_POST['email'];
	$email_message = "Detalles del formulario de contacto:\n\n";
	$email_message .= "Nombre: " . $_POST['name'] . "\n";
	$email_message .= "Enlace de envío: " . $_POST['url'] . "\n";
	$email_message .= "E-mail: " . $_POST['email'] . "\n";
	$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
	$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";
	if (isset($_POST['opciones'])) {
		$opcionLimpieza = $_POST['opciones'];
		if($opcionLimpieza==1){
			$email_message .= "La cotización SI inlcuye servicio de limpieza." . "\n";
		}elseif ($opcionLimpieza==2) {
			$email_message .= "La cotización NO inlcuye servicio de limpieza." . "\n";
		}
	}else{
		$email_message .= "La consulta no fue realizada por algún producto." . "\n";	
	}
	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	//header("location:javascript://history.go(-1)");
	header("Location: ../success.php?state=0/");
}	
}
?>