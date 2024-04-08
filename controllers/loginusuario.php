<?php
session_start();
$correosesion = $_SESSION['correosesion'];
$contrasenasesion = $_SESSION['contrasenasesion'];

include_once("../route.php");
    class Usuario{
        function Login(){
            $correo = $_SESSION['correosesion'];
            $contrasena = $_SESSION['contrasenasesion'];

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
                    
                    $_SESSION['idsesion'] = $informacion->usuarios[0]->id;
                    $_SESSION['nombresesion'] = $informacion->usuarios[0]->nombre;
                    $_SESSION['apellidopsesion'] = $informacion->usuarios[0]->apellidoP;
                    $_SESSION['apellidomsesion'] = $informacion->usuarios[0]->apellidoM;
                    $_SESSION['usuariosesion'] = $informacion->usuarios[0]->usuario;
                    $_SESSION['telefonosesion'] = $informacion->usuarios[0]->telefono;
                    $_SESSION['direccionsesion'] = $informacion->usuarios[0]->direccion;
                    $_SESSION['contrasenasesion'] = $informacion->usuarios[0]->contrasena;
                    $rutasesion = "imagenes_perfil/icono-perfil-default.png";

                    $_SESSION['rutasesion'] = $rutasesion;

                    // $_SESSION['nombreusuario'] = $informacion->usuarios['nombre'];
                    sleep(1);
                    header('Location: ../index.php');
                    // var_dump($_SESSION);
                    // var_dump($informacion->usuarios[0]->usuario);

                }
                else {
                    header('Location: ../login.php?buscar=false');
                }

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>