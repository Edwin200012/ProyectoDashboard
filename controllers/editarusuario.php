<?php
include_once("../route.php");
    class Usuario{
        function EditarUsuario(){
            $id = '1';
            $nombre = $_POST['editarnombre'];
            $apellidop = $_POST['editarapellidop'];
            $apellidom = $_POST['editarapellidom'];
            $usuario = $_POST['editarusuario'];
            $correo = $_POST['editarcorreo'];
            $telefono = $_POST['editartelefono'];
            $direccion = $_POST['editardireccion'];
            $contrasena = $_POST['editarconfirmarcontrasena'];

            var_dump($id);
            var_dump($nombre);
            var_dump($apellidop);
            var_dump($apellidom);
            var_dump($usuario);
            var_dump($correo);
            var_dump($telefono);
            var_dump($direccion);
            var_dump($contrasena);

            $url = Route::$url.Route::$editarUsuario;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

            $parametros = array (           
                    // "id" => 1,         
                    "nombre" => $nombre,
                    "apellidop" => $apellidop,
                    "apellidom" => $apellidom,
                    "usuario" => $usuario,
                    "correo" => $correo,
                    "telefono" => $telefono,
                    "direccion" => $direccion,
                    "contrasena" => $contrasena
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            var_dump($respuesta);
            var_dump($informacion);

            if ($informacion->actualizado)
                {
                    header('Location: ../index.php');       
                }
                
            else{
                echo $respuesta;
            }
            
        }
    }

    $usuario = new Usuario();
    $usuario->EditarUsuario();

?>