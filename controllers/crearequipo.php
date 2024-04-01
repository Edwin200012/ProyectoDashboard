<?php
session_start();

include_once("../route.php");
class Empresa{
    function Equipo(){
        $nombre_equipo = $_POST['nombre_equipo'];
        $puesto_equipo = $_POST['puesto_equipo'];
        $descripcion_equipo = $_POST['descripcion_equipo'];
        $imagen_equipo = $_POST['imagen_equipo'];
        $redes_sociales_equipo = $_POST['redes_sociales_equipo'];

        $url = Route::$url.Route::$enviarDatosEquipo;
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        $parametros = array (
            "nombre" => $nombre_equipo,
            "puesto" => $puesto_equipo,
            "descripcion" => $descripcion_equipo,
            "imagen" => $imagen_equipo,
            "redes_Sociales" => $redes_sociales_equipo
        );

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parametros));
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $informacion = json_decode($respuesta);

        if($informacion->datosenviadosequipo)
        {
            header('Location: ../equipo.php?datosenviadosequipo=true');
        }
        else{
            header('Location: ../equipo.php?datosnoenviadosequipo=true');
        }
        
    }
}

$empresa = new Empresa();
$empresa->Equipo();

?>