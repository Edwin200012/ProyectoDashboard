<?php
    class Usuario{
        function Login(){
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            var_dump($usuario);
            var_dump($contrasena);

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>