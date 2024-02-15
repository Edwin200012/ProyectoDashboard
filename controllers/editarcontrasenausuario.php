<?php
session_start();

include_once("../route.php");
    class Usuario{
        function EditarContrasenaUsuario(){

            $id = $_SESSION['idsesion'];
            $actualcontrasena = $_POST['actualcontrasena'];
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
                    "actualcontrasena" =>$actualcontrasena,
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
                    header('Location: ../miperfil.php?actualizacontrasena=true');
                }
                
            else{
                header('Location: ../miperfil.php?noactualizacontrasena=false');
            }
        }
    }

    $usuario = new Usuario();
    $usuario->EditarContrasenaUsuario();

?>