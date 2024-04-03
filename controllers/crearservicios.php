<?php
session_start();

include_once("../route.php");
class Empresa{
    function Servicios(){
        $nombre_servicios = $_POST['nombre_servicios'];
        $descripcion_servicios = $_POST['descripcion_servicios'];
        $precio_servicios = $_POST['precio_servicios'];

        // var_dump($nombre_servicios);
        // var_dump($descripcion_servicios);
        // var_dump($precio_servicios);

    }
}
$empresa = new Empresa();
$empresa->Servicios();

?>