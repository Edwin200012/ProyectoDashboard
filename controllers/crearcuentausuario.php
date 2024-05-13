<?php
session_start();

include_once("../route.php");
    class Usuario{
        function CrearUsuario(){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $nuevacontrasena = $_POST['nuevacontrasena'];
            $contrasena = $_POST['contrasenaconfirmar'];
            $rutasesion = "imagen_default_usuario/icono_perfil_default.png";

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
                    "nuevacontrasena" => $nuevacontrasena,
                    "contrasena" => $contrasena,
                    "ruta" => $rutasesion
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->registrado)
                {
                    header('Location: ../registro.php?registrar=true');      
                }
                else if($informacion->registradoCorreo){
                    header('Location: ../registro.php?noregistrarcorreo=true');
                }
                
            else{
                header('Location: ../registro.php?noregistrar=true');
            }
            
        }
    }

    $usuario = new Usuario();
    $usuario->CrearUsuario();

?>