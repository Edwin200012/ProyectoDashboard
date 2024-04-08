<?php
session_start();

include_once("../route.php");
    class Empresa{
        function EditarEquipo(){
            $id = $_POST["equipo"];
            $nombre = $_POST["editar_nombre_equipo"];
            $puesto = $_POST["editar_puesto_equipo"];
            $descripcion = $_POST["editar_descripcion_equipo"];
            // $imagen = $_POST["editar_imagen_equipo"];
            $redes_sociales = $_POST["editar_redes_sociales_equipo"];

            if(isset($_FILES['editar_imagen_equipo'])){
            $nombreArchivo = $_FILES['editar_imagen_equipo']['name'];
            $tipo = $_FILES['editar_imagen_equipo']['type'];
            $tamano = $_FILES['editar_imagen_equipo']['size'];
            $temporal = $_FILES['editar_imagen_equipo']['tmp_name'];
            $error = $_FILES['editar_imagen_equipo']['error'];

            $carpetaDestino ='../imagenes_equipo/';
            $ubicacionFinal = $carpetaDestino . basename($_FILES['editar_imagen_equipo']['name']);
            }

            if(move_uploaded_file($_FILES['editar_imagen_equipo']['tmp_name'], $ubicacionFinal)){
                echo "El archivo se ha subido correctamente";
            } else {
                echo "Error al mover el archivo";
            }

            $url = Route::$url.Route::$editarEquipo;
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
                    "puesto" => $puesto,
                    "descripcion" => $descripcion,
                    "imagen" => $ubicacionFinal,
                    "redes_Sociales" => $redes_sociales,
                );

                curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

                $respuesta = curl_exec($curl);
                curl_close($curl);

                $informacion = json_decode($respuesta);
                var_dump($informacion);

                $mostrar = ($informacion->actualizado) ? header('Location: ../equipo.php?actualizaequipo=true') : $respuesta;
                echo $mostrar;

        }
}
$empresa = new Empresa();
$empresa->EditarEquipo();
?>