<?php
include_once("../route.php");
    class Empresa{
        function EditarContacto(){
            // $id = $_POST["editaridcontacto"];
            $id = $_POST["contacto"];
            $correo = $_POST["editarcorreocontacto"];
            $telefono = $_POST["editartelefonocontacto"];
            $ubicacion = $_POST["editarubicacioncontacto"];


            $url = Route::$url.Route::$editarContacto;
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
                "correo" => $correo,
                "telefono" => $telefono,
                "ubicacion" => $ubicacion
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));
            
            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            //Operador ternario
            $mostrar = ($informacion->actualizado) ? header('Location: ../contacto.php?actualizacontacto=true') : $respuesta;
            echo $mostrar;

        }

    }


    $empresa = new Empresa();
    $empresa->EditarContacto();

?>