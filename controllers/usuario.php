<?php
    class Usuario{
        function Login(){
            $usuario = $_POST['username'];
            $contrasena = $_POST['password'];

            var_dump($usuario);
            var_dump($contrasena);

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>