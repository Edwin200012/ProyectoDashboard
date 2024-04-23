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
    function EditarImagenUsuario(){
        $id = $_SESSION['idsesion'];
        $rutaImagenNueva = $_POST['ruta_imagen_nueva'];
        $rutaImagenActual = $_POST['rutaImagenActual'];

        if(isset($_FILES['nuevaimagenperfil'])){
            $nombreArchivo = $_FILES['nuevaimagenperfil']['name'];
            $tipo = $_FILES['nuevaimagenperfil']['type'];
            $tamano = $_FILES['nuevaimagenperfil']['size'];
            $temporal = $_FILES['nuevaimagenperfil']['tmp_name'];
            $error = $_FILES['nuevaimagenperfil']['error'];

            $carpetaDestino ='../imagenes_perfil/';
            $ubicacionFinal = $carpetaDestino . $nombreArchivo;
        }

        // Verificar si la imagen actual es la imagen por defecto
        if($rutaImagenActual !== "imagen_default_usuario/icono_perfil_default.png") {
            // Eliminar la imagen anterior si no es la imagen por defecto
            if(file_exists("../" . $rutaImagenActual)) {
                if(!unlink("../" . $rutaImagenActual)) {
                    echo "Error al eliminar la imagen anterior.";
                    return;
                }
            } else {
                if(file_exists("../" . $rutaImagenActual)) {
                    unlink("../" . $rutaImagenActual);
                } else{
                    echo "Error al eliminar imagen";
                }
            }
        } else {
            echo "La imagen actual es la imagen por defecto. No se eliminará.";
        }

        // Mover la nueva imagen
        if(move_uploaded_file($_FILES['nuevaimagenperfil']['tmp_name'], $ubicacionFinal)){
            echo "La imagen se ha subido correctamente.";
        } else{
            echo "Error al mover la imagen.";
            return;
        }

        $url = Route::$url.Route::$editarImagenUsuario;

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
            "ruta" => "imagenes_perfil/" . $rutaImagenNueva
        );

        curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

        $respuesta = curl_exec($curl);
        curl_close($curl);

        $informacion = json_decode($respuesta);

        if($informacion->actualizado)
        {
            $_SESSION['rutasesion'] = "imagenes_perfil/" . $rutaImagenNueva;

            $this->NotificacionImagenActualizada();

            header('Location: ../miperfil.php?actualizaimagen=true');
        }

        else {
            echo $respuesta;
        }
    }


    //Funcion para enviar notificacion al cambiar contrasena
    function NotificacionImagenActualizada(){

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

            $mail->setFrom('edwinvazquezcal12@gmail.com', 'Remitente');

            //Añadir un destinatario
            $mail->addAddress((isset($_SESSION['correosesion']) ? $_SESSION['correosesion'] : 'Desconocido'));
            //Contenido
            $mail->isHTML(true);
            $mail->Subject = 'Actualizacion de imagen del Usuario: ' . (isset($_SESSION['usuariosesion']) ? $_SESSION['usuariosesion'] : 'Desconocido');
            $mail->Body    = 'Este es un correo electronico para confirmar que tu imagen de perfil ha sido actualizada exitosamente. Si no hiciste estos cambios, por favor contacta a soporte.';
            $mail->AltBody = 'Este es un correo electronico para confirmar que tu imagen de perfil ha sido actualizada exitosamente. Si no hiciste estos cambios, por favor contacta a soporte.';

            $mail->send();
            echo 'El mensaje ha sido enviado';

        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}

$usuario = new Usuario();
$usuario->EditarImagenUsuario();
?>
