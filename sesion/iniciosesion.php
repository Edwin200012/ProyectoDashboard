<?php
// Comienzo de la sesión
session_start();
// Guardar datos de la sesión iniciada
$_SESSION["id"] = "1";
$_SESSION["nombre"] = "Jose";
$_SESSION["apellidop"] = "Mendez";
$_SESSION["apellidom"] = "Ruiz";
$_SESSION["usuario"] = "Jose15";
$_SESSION["correo"] = "jose15@gmail.com";
$_SESSION["contrasena"] = "jose123";
$_SESSION["telefono"] = "8715222008";
$_SESSION["direccion"] = "Gomez Palacio";

// echo "Sesión iniciada y establecido con nombre de usuario: " . $_SESSION["usuario"] . "<br>";
echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";

?>

<a href="mostrardatosiniciosesion.php">Mostrar Datos del usuario</a>
