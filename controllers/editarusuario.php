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
        function EditarUsuario(){
            
            $id = $_SESSION['idsesion'];
            $nombre = $_POST['editarnombre'];
            $apellidop = $_POST['editarapellidop'];
            $apellidom = $_POST['editarapellidom'];
            $usuario = $_POST['editarusuario'];
            $correo = $_POST['editarcorreo'];
            $telefono = $_POST['editartelefono'];
            $direccion = $_POST['editardireccion'];
            $rutaImagenActual = $_POST['nombre_imagen_editar'];
            var_dump($direccion);
            var_dump($rutaImagenActual);

            if(isset($_FILES['editarimagenperfil'])){
                $nombreArchivo = $_FILES['editarimagenperfil']['name'];
                $tipo = $_FILES['editarimagenperfil']['type'];
                $tamano = $_FILES['editarimagenperfil']['size'];
                $temporal = $_FILES['editarimagenperfil']['tmp_name'];
                $error = $_FILES['editarimagenperfil']['error'];

                $carpetaDestino ='../imagenes_perfil/';
                $ubicacionFinal = $carpetaDestino . basename($_FILES['editarimagenperfil']['name']);
            }

            if(move_uploaded_file($_FILES['editarimagenperfil']['tmp_name'], $ubicacionFinal)){
                echo "La imagen se ha subido correctamente.";
            } else{
                echo "Error al mover la imagen.";
            }

            $url = Route::$url.Route::$editarUsuario;

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
                    "nombre" => $nombre,
                    "apellidop" => $apellidop,
                    "apellidom" => $apellidom,
                    "usuario" => $usuario,
                    "correo" => $correo,
                    "telefono" => $telefono,
                    "direccion" => $direccion,
                    "ruta" => "imagenes_perfil/" . $rutaImagenActual
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->actualizado)
                {
                    $_SESSION['nombresesion'] = $nombre;
                    $_SESSION['apellidopsesion'] = $apellidop;
                    $_SESSION['apellidomsesion'] = $apellidom;
                    $_SESSION['usuariosesion'] = $usuario;
                    $_SESSION['correosesion'] = $correo;
                    $_SESSION['telefonosesion'] = $telefono;
                    $_SESSION['direccionsesion'] = $direccion;
                    $_SESSION['rutasesion'] = "imagenes_perfil/" . $rutaImagenActual;
                    
                    $this->NotificacionDatosActualizados();

                    header('Location: ../miperfil.php?actualizadatos=true');
                }
                
            else{
                echo $respuesta;
            }
            
        }


//Funcion para enviar notificacion al cambiar contrasena
function NotificacionDatosActualizados(){

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
    $mail->Subject = 'Actualizacion de datos del Usuario: ' . (isset($_SESSION['usuariosesion']) ? $_SESSION['usuariosesion'] : 'Desconocido');
    $mail->Body    = 'Este es un correo electronico para confirmar que tus datos han sido actualizados exitosamente. Si no hiciste estos cambios, por favor contacta a soporte.';
    $mail->AltBody = 'Este es un correo electonico para confirmar que tus datos han sido actualizados exitosamente. Si no hiciste estos cambios, por favor contacta a soporte.';

    $mail->send();
    echo 'El mensaje ha sido enviado';

    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }

        }
}

    $usuario = new Usuario();
    $usuario->EditarUsuario();

?>