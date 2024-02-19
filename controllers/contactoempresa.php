<?php
include_once("../route.php");

    class Empresa {
        function Contacto(){
            $correocontacto = $_POST['correocontacto'];
            $telefonocontacto = $_POST['telefonocontacto'];
            $ubicacioncontacto = $_POST['ubicacioncontacto'];

            $url = Route::$url.Route::$enviarDatosContacto;

            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

            $parametros = array (
                "correo" => $correocontacto,
                "telefono" => $telefonocontacto,
                "ubicacion" => $ubicacioncontacto
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parametros));
            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if($informacion->datosenviados)
            {
                header('Location: ../contacto.php?datosenviados=true');
            }
            else{
                header('Location: ../contacto.php?datosnoenviados=true');
            }
        }
    }

    $empresa = new Empresa();
    $empresa->Contacto();

?>