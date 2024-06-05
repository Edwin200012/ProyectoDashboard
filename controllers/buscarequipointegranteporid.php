<?php
session_start();
include_once("../route/route.php");

class Empresa{
    function MostrarDatosEquipoIntegrantePorId(){
        $Id = $_GET['idequipo'];
        $url = Route::$url.Route::$mostrarDatosEquipoIntegrantePorId.$Id;

        $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        ]);

        $respuesta = curl_exec($curl);
        curl_close($curl);
        $informacion = json_decode($respuesta);

        if($informacion->equipo[0]->id)
        echo json_encode($informacion->equipo);
    else
    echo json_encode("Error al mostrar");
    }
}

$empresa = new Empresa();
$empresa->MostrarDatosEquipoIntegrantePorId();
?>