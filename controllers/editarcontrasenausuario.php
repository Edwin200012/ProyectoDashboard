<?php
session_start();
include_once("../route.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

    class Usuario{
        function EditarContrasenaUsuario(){

            $id = $_SESSION['idsesion'];
            // $actualcontrasena = $_POST['actualcontrasena'];
            $nuevacontrasena = $_POST['nuevacontrasena'];
            $confirmarcontrasena = $_POST['confirmarcontrasena'];


            $url = Route::$url.Route::$editarContrasenaUsuario;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

            $parametros = array (
                    "id" => $id,
                    // "actualcontrasena" =>$actualcontrasena,
                    "nuevacontrasena" => $nuevacontrasena,
                    "confirmarcontrasena" => $confirmarcontrasena
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->contrasenaactualizada)
                {
                    $_SESSION['contrasenasesion'] = $confirmarcontrasena;
                    $this->NotificacionContrasena();
                    header('Location: ../miperfil.php?actualizacontrasena=true');
                    
                }

            else{
                header('Location: ../miperfil.php?noactualizacontrasena=false');
            }
        }



    //Funcion para enviar notificacion al cambiar contrasena
    function NotificacionContrasena(){

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
    }

    }

    $usuario = new Usuario();
    $usuario->EditarContrasenaUsuario();

?>