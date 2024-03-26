<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.elasticemail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'edwinvazquezcal12@gmail.com';                     //SMTP username
$mail->Password   = 'EC322809F8A153B2A637C022C1923DD40F1B';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Destinatarios
    $mail->setFrom('edwinvazquezcal12@gmail.com', 'Remitente');

    //Añadir un destinatario
    $mail->addAddress('fawigek423@glaslack.com');   

    //Contenido
    $mail->isHTML(true);                                  //Setear formato de email a HTML
    // $mail->Subject = 'Cambio de contrasena del Usuario'$_SESSION['usuariosesion']';
    $mail->Subject = 'Cambio de contrasena del Usuario: ' . (isset($_SESSION['usuariosesion']) ? $_SESSION['usuariosesion'] : 'Desconocido');
    $mail->Body    = 'Este es un correo electronico para confirmar que tu contrasena ha sido cambiada exitosamente. Si no hiciste este cambio, por favor contacta a soporte.';
    $mail->AltBody = 'Este es un correo electonico para confirmar que tu contrasena ha sido cambiada exitosamente. Si no hiciste este cambio, por favor contacta a soporte.';

    $mail->send();
    echo 'El mensaje ha sido enviado';

} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}
?>
