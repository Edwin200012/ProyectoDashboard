<?php
session_start();

include_once("../route.php");

class Empresa {
    function EliminarNosotros(){
        $Id = $_POST["id"];

        $url = Route::$url.Route::$eliminarNosotros.$Id;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

        $respuesta = curl_exec($curl);
        curl_close($curl);

        $informacion = json_decode($respuesta);

        if ($informacion->informacioneliminada)
            echo json_encode("Eliminado");
        else
            echo json_encode("Error al eliminar");
    }
}

$empresa = new Empresa();
$empresa->EliminarNosotros();

?>