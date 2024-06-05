<?php
session_start();

include_once("../route/route.php");
class Empresa{
    function Servicios(){
        $nombre_servicios = $_POST['nombre_servicios'];
        $descripcion_servicios = $_POST['descripcion_servicios'];
        $precio_servicios = $_POST['precio_servicios'];

        $url = Route::$url.Route::$enviarDatosServicios;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

       $parametros = array (
        "nombre" => $nombre_servicios,
        "descripcion" => $descripcion_servicios,
        "precio" => $precio_servicios
       );

       curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parametros));
       $respuesta = curl_exec($curl);
       curl_close($curl);

       $informacion = json_decode($respuesta);

       if($informacion->datosenviadosservicios)
       {
            header('Location: ../servicios.php?datosenviadosservicios=true');
       }
       else{
            header('Location: ../servicios.php?datosnoenviadosservicios=true');
       }

    }
}
$empresa = new Empresa();
$empresa->Servicios();

?>