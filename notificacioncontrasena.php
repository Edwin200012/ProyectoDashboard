<?php
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $_ENV['HOST'];                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV['USERNAME'];                     //SMTP username
    $mail->Password   = $_ENV['PASSWORD'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = $_ENV['PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Destinatarios
    $mail->setFrom('edwinvazquezcal12@gmail.com', 'Remitente');

    //Añadir un destinatario
    // $mail->addAddress('fawigek423@glaslack.com');   
    $mail->addAddress((isset($_SESSION['correosesion']) ? $_SESSION['correosesion'] : 'Desconocido'));
    //Contenido
    $mail->isHTML(true);
    $mail->Subject = 'Cambio de contrasena del Usuario: ' . (isset($_SESSION['usuariosesion']) ? $_SESSION['usuariosesion'] : 'Desconocido');
    $mail->Body    = 'Este es un correo electronico para confirmar que tu contrasena ha sido cambiada exitosamente. Si no hiciste este cambio, por favor contacta a soporte.';
    $mail->AltBody = 'Este es un correo electonico para confirmar que tu contrasena ha sido cambiada exitosamente. Si no hiciste este cambio, por favor contacta a soporte.';

    $mail->send();
    echo 'El mensaje ha sido enviado';

} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}
?>
