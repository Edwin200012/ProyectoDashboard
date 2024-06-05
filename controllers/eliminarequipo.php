<?php
session_start();

include_once("../route/route.php");

class Empresa{
    function EliminarEquipo(){
        $Id = $_POST["id"];
        $Ruta = $_POST["ruta"];
        $url = Route::$url.Route::$eliminarEquipo.$Id;

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

        if($informacion->equipointegranteeliminado)
        {
            unlink($Ruta);
            echo json_encode("Eliminado");
        }
        
        else{
            echo json_encode("Error al eliminar");
        }
    }
}

$empresa = new Empresa();
$empresa->EliminarEquipo();
?>