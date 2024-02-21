<?php
session_start();

include_once("../route.php");
    class Usuario{
        function EditarUsuario(){
            
            $id = $_SESSION['idsesion'];
            $nombre = $_POST['editarnombre'];
            $apellidop = $_POST['editarapellidop'];
            $apellidom = $_POST['editarapellidom'];
            $usuario = $_POST['editarusuario'];
            $correo = $_POST['editarcorreo'];
            $telefono = $_POST['editartelefono'];
            $direccion = $_POST['editardireccion'];

            if(isset($_FILES['imagenperfil'])){
                $nombreArchivo = $_FILES['imagenperfil']['name'];
                $tipo = $_FILES['imagenperfil']['type'];
                $tamano = $_FILES['imagenperfil']['size'];
                $temporal = $_FILES['imagenperfil']['tmp_name'];
                $error = $_FILES['imagenperfil']['error'];

                $carpetaDestino ='../imagenesperfil/';
                $ubicacionFinal = $carpetaDestino . basename($_FILES['imagenperfil']['name']);
            }

            if(move_uploaded_file($_FILES['imagenperfil']['tmp_name'], $ubicacionFinal)){
                echo "La imagen se ha subido correctamente.";
            } else{
                echo "Error al mover la imagen.";
            }

            $url = Route::$url.Route::$editarUsuario;

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
                    "apellidop" => $apellidop,
                    "apellidom" => $apellidom,
                    "usuario" => $usuario,
                    "correo" => $correo,
                    "telefono" => $telefono,
                    "direccion" => $direccion,
                    "ruta" => $ubicacionFinal
            );

            curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($parametros));

            $respuesta = curl_exec($curl);
            curl_close($curl);

            $informacion = json_decode($respuesta);

            if ($informacion->actualizado)
                {
                    // echo $informacion;
                    $_SESSION['nombresesion'] = $nombre;
                    $_SESSION['apellidopsesion'] = $apellidop;
                    $_SESSION['apellidomsesion'] = $apellidom;
                    $_SESSION['usuariosesion'] = $usuario;
                    $_SESSION['correosesion'] = $correo;
                    $_SESSION['telefonosesion'] = $telefono;
                    $_SESSION['direccionsesion'] = $direccion;
                    $_SESSION['rutasesion'] = $ubicacionFinal;
                    
                    // echo $_SESSION;
                    header('Location: ../miperfil.php?actualizadatos=true');
                }
                
            else{
                echo $respuesta;
            }
            
        }
    }

    $usuario = new Usuario();
    $usuario->EditarUsuario();

?>