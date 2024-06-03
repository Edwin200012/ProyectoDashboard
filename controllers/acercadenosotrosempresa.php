<?php
session_start();

include_once("../route.php");

    class Empresa {
        function Nosotros(){
            // Validar que los campos no esten vacios
            if (!isset($_POST['acercadenosotros']) || empty(trim($_POST['acercadenosotros'])) ||
            !isset($_POST['mision']) || empty(trim($_POST['mision'])) ||
            !isset($_POST['vision']) || empty(trim($_POST['vision']))) {
            // Redireccionar si hay campos vacíos
            header('Location: ../acercadenosotros.php?datosnoenviados=true');
            exit();
        }
            $acercadenosotros = $_POST['acercadenosotros'];
            $mision = $_POST['mision'];
            $vision = $_POST['vision'];
            $publicado = false;

            $url = Route::$url.Route::$enviarDatosNosotros;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

            $parametros = array (
                "descripcion" => $acercadenosotros,
                "mision" => $mision,
                "vision" => $vision,
                "publicado" =>$publicado
            );
            var_dump($parametros);

            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parametros));
            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if($informacion->datosenviados)
            {
                header('Location: ../acercadenosotros.php?datosenviados=true');
            }
            else{
                header('Location: ../acercadenosotros.php?datosnoenviados=true');
            }
        }
    }

    $empresa = new Empresa();
    $empresa->Nosotros();

?>