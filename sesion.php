<?php
    session_start();
    $correo = $_SESSION['correo'];
    $contrasena = $_SESSION['contrasena'];
    var_dump($_SESSION['correo']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion Iniciada</title>
</head>
<body>
    <h2>Bienvenido <?php echo $correo ?></h2>
    <h2>Su contraseña es: <?php echo $contrasena ?></h2>
    
</body>
</html>