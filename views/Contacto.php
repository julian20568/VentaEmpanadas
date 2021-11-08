<?php
$errores = '';
$enviado = '';
/*comprobar si el usuario envio el formulario y si el boton esta seteado*/
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	/*comprobar si el formulario tiene contenido*/
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}else{
		$errores .= 'Por favor ingresa un nombre <br />';
	}

	/*!empty comprueba que una variable no este vacia, si tiene contenido ejecuta el codigo*/
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		//$correo = filter_var($correo, FILTER_VALIDATE_EMAIL)
		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br />';
		}
	}else{
		$errores .= 'Por favor ingresa un correo <br />';
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	}else{
		$errores .= 'Por favor Ingresa el mensaje <br />';
	}
	/*comprobar si no hay errores*/
	if (!$errores) {
		$enviar_a = 'jaop17@hotmail.com';
		$asunto = 'Correo enviado desde mi pagina.com';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//Para que el email se envie se debe probar en un dominio
		#mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}

require 'contacto.view.php';

?>