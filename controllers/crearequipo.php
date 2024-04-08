<?php
session_start();

include_once("../route.php");
class Empresa{
    function Equipo(){
        $nombre_equipo = $_POST['nombre_equipo'];
        $puesto_equipo = $_POST['puesto_equipo'];
        $descripcion_equipo = $_POST['descripcion_equipo'];
        // $imagen_equipo = $_POST['imagen_equipo'];
        $redes_sociales_equipo = $_POST['redes_sociales_equipo'];

        if(isset($_FILES['imagen_equipo'])){
        $nombreArchivo = $_FILES['imagen_equipo']['name'];
        $tipo = $_FILES['imagen_equipo']['type'];
        $tamano = $_FILES['imagen_equipo']['size'];
        $temporal = $_FILES['imagen_equipo']['tmp_name'];
        $error = $_FILES['imagen_equipo']['error'];

        $carpetaDestino ='../imagenes_equipo/';
        $ubicacionFinal = $carpetaDestino . basename($_FILES['imagen_equipo']['name']);

      }

      if(move_uploaded_file($_FILES['imagen_equipo']['tmp_name'], $ubicacionFinal)){
        echo "El archivo se ha subido correctamente";
    } else {
        echo "Error al mover el archivo";
    }


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
                "imagen" => $ubicacionFinal,
                "redes_Sociales" => $redes_sociales_equipo
            );
        
            var_dump($parametros);

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