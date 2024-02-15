<?php
session_start();

include_once("../route.php");
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