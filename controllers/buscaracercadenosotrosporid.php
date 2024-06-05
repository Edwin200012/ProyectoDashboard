<?php
session_start();

include_once("../route/route.php");

class Empresa{
    function MostrarDatosNosotrosPorId(){
        $Id = $_GET['idnosotros'];
        $url = Route::$url.Route::$mostrarDatosNosotrosPorId.$Id;

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

        if ($informacion->nosotros[0]->id)
        echo json_encode($informacion->nosotros);
     else  
     echo json_encode("Error al mostrar");
}
}
$empresa = new Empresa();
$empresa->MostrarDatosNosotrosPorId();

?>