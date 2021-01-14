<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["telefono"]) || !isset($_POST["mensaje"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$empresa = $_POST["empresa"];
$mensaje = $_POST["mensaje"];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1380094.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "info@biomedic.com.ar";  // Mi cuenta de correo
$smtpClave = "Cardi000";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "info@biomedic.com.ar";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
$mail->addBcc("sarevalo@aldeaglobal.com.ar");

$mail->Subject = "Mensaje desde sitio web Biomedic"; // Este es el titulo del email.
$mensajeHtml = "Nombre: " . nl2br($nombre) . "<br>";
$mensajeHtml .= "Email: " . nl2br($email). "<br>";
$mensajeHtml .= "Telefono: " . nl2br($telefono). "<br>";
$mensajeHtml .= "Empresa: " . nl2br($empresa). "<br><br>";
$mensajeHtml .= nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br /><br />Mensaje recibido desde sitio web Biomedic<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Desarrollo www.aldeaglobal.com.ar"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
echo($estadoEnvio);
exit();
if($estadoEnvio){
    header('Location: gracias.html');
	exit();
} else {
    echo "Ocurrio un error inesperado.";
}
