<?php
//vemos si el usuario y contraseña es váildo
if ($_POST["usuario"]=="miguel" && $_POST["contrasena"]=="qwerty"){
    //usuario y contraseña válidos
    session_name("loginUsuario");
    //asigno un nombre a la sesión para poder guardar diferentes datos
   session_start();
    // inicio la sesión
    $_SESSION["autentificado"]= "SI";
    //defino la sesión que demuestra que el usuario está autorizado
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
    //defino la fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss
    header ("Location: aplicacion.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: index.php?errorusuario=si");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Sesion</H1>
</body>
</html>


