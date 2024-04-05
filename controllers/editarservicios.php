<?php
session_start();

include_once("../route.php");
class Empresa{
    function EditarServicios(){
        $id = $_POST["servicios"];
        $nombre = $_POST["editar_nombre_servicios"];
        $descripcion = $_POST["editar_descripcion_servicios"];
        $precio = $_POST["editar_precio_servicios"];

        $url = Route::$url.Route::$editarServicios;
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
            "descripcion" => $descripcion,
            "precio" => $precio
        );

        var_dump($parametros);

        curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

        $respuesta = curl_exec($curl);
        curl_close($curl);

        $informacion = json_decode($respuesta);

        $mostrar = ($informacion->actualizado) ? header('Location: ../servicios.php?actualizaservicios=true') : $respuesta;
        echo $mostrar;

    }
}

$empresa = new Empresa();
$empresa->EditarServicios();
?>