<?php
session_start();

include_once("../route.php");
    class Empresa{
        function EditarNosotros(){
            $id = $_POST["nosotros"];
            $descripcion = $_POST["editardescripcionnosotros"];
            $mision = $_POST["editarmisionnosotros"];
            $vision = $_POST["editarvisionnosotros"];
            // $publicado = $_POST["editarpublicadonosotros"];
            $publicado = true;


            $url = Route::$url.Route::$editarNosotros;
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
                "descripcion" => $descripcion,
                "mision" => $mision,
                "vision" => $vision,
                "publicado" => $publicado
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));
            
            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            //Operador ternario
            $mostrar = ($informacion->actualizado) ? header('Location: ../acercadenosotros.php?actualizanosotros=true') : $respuesta;
            echo $mostrar;

        }

    }


    $empresa = new Empresa();
    $empresa->EditarNosotros();

?>