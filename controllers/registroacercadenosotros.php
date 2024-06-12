<?php
session_start();
include_once("../route/route.php");

    class Empresa {
        function MostrarDatosNosotros(){
            $url = Route::$url.Route::$mostrarDatosNosotros;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            $respuesta = curl_exec($curl);

            echo $respuesta;
        }
    }

    $empresa = new Empresa();
    $empresa->MostrarDatosNosotros();
?>