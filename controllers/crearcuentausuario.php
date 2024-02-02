<?php
    class UsuarioRegistro{
        function Registro(){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            

            var_dump($nombre);
            var_dump($correo);
            var_dump($usuario);
            var_dump($contrasena);

        }
    }

    $usuario = new UsuarioRegistro();
    $usuario->Registro();

?>