<?php
include_once("../route.php");
    class Usuario{
        function Login(){
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

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
                    header('Location: ../index.php');
                }
                else {
                    header('Location: ../registro.php');
                }

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>