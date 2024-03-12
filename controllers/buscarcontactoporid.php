<?php
include_once("../route.php");

class Empresa{
    function MostrarDatosContactoPorId(){
        // $Id = 26;
        $Id = $_GET['idcontacto'];
        $url = Route::$url.Route::$mostrarDatosContactoPorId.$Id;
        var_dump($url);
        var_dump($Id);

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

        if (isset($informacion->contacto[0]->idcontacto))
        echo json_encode($informacion->contacto);
     else  
     echo json_encode("Error al mostrar");
}
}
$empresa = new Empresa();
$empresa->MostrarDatosContactoPorId();

?>