<?php
    class Usuario{
        function Login(){
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            var_dump($correo);
            var_dump($contrasena);

        }
    }

    $usuario = new Usuario();
    $usuario->Login();

?>