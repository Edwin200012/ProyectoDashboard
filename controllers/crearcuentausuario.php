<?php
include_once("../route.php");
include_once ("../plantilla/head.php");
include_once ("../plantilla/scripts.php");
    class Usuario{
        function CrearUsuario(){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            $url = Route::$url.Route::$crearUsuario;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

            $parametros = array (                    
                    "nombre" => $nombre,
                    "usuario" => $usuario,
                    "correo" => $correo,
                    "contrasena" => $contrasena
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->registrado)
                {
                    // sleep(2);
                    header('Location: ../registro.php?registrar=true');
                     
                        
                }
                
            else{
                echo $respuesta;
            }
            
        }
    }

    $usuario = new Usuario();
    $usuario->CrearUsuario();

?>