<?php
    session_start();
    $correo = $_SESSION['correo'];
    $contrasena = $_SESSION['contrasena'];
    // var_dump($_SESSION['correo']);
?>
<?php
include_once("../route.php");
    class Usuario{
        function Login(){
            $correo = $_SESSION['correo'];
            $contrasena = $_SESSION['contrasena'];

            $url = Route::$url.Route::$loginUsuario;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

                $parametros = array (
                        "correo"=> $correo,
                        "contrasena" => $contrasena
                );

                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parametros));

                $respuesta = curl_exec($curl);
                curl_close($curl);
                

                $informacion = json_decode($respuesta);

                if ($informacion->buscar)
                {
                    
                    // $_SESSION['nombreusuario'] = 'jose';
                    // $_SESSION['nombreusuario'] = $informacion->usuarios['nombre'];
                    sleep(1);
                    header('Location: ../index.php');
                    // var_dump($_SESSION);
                    // var_dump($informacion->usuarios);
                    
                }
                else {
                    header('Location: ../login.php?buscar=false');
                }

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>