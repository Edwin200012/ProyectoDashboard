<?php
include_once("../route.php");

class Empresa{
    function MostrarDatosContactoPorId(){
        $Id = $_GET["contacto"];
        // $Id = $_GET["idcontacto"];
        // $Id = 26;
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

        if (isset($informacion->contacto[0]->id))
        echo json_encode($informacion->contacto);
     else  
     echo json_encode("Error al mostrar");
}
}
$empresa = new Empresa();
$empresa->MostrarDatosContactoPorId();

?>