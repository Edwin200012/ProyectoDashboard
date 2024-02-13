<?php
    session_start();
    $correo = $_SESSION['correo'];
    $contrasena = $_SESSION['contrasena'];
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
                    
                    $_SESSION['id'] = $informacion->usuarios[0]->id;
                    $_SESSION['nombre'] = $informacion->usuarios[0]->nombre;
                    $_SESSION['apellidop'] = $informacion->usuarios[0]->apellidoP;
                    $_SESSION['apellidom'] = $informacion->usuarios[0]->apellidoM;
                    $_SESSION['usuario'] = $informacion->usuarios[0]->usuario;
                    $_SESSION['telefono'] = $informacion->usuarios[0]->telefono;
                    $_SESSION['direccion'] = $informacion->usuarios[0]->direccion;

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