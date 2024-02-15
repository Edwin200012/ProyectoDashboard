<?php
session_start();

include_once("../route.php");
    class Usuario{
        function EditarContrasenaUsuario(){

            $id = $_SESSION['idsesion'];
            $nuevacontrasena = $_POST['confirmarcontrasena'];

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
                    "contrasena" => $nuevacontrasena
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->contrasenaactualizada)
                {
                    header('Location: ../miperfil.php?actualizacontrasena=true');    
                }
                
            else{
                echo $respuesta;  
            }
            
        }
    }

    $usuario = new Usuario();
    $usuario->EditarContrasenaUsuario();

?>