<?php
    //Continuamos la sesión
    session_start();
    $id=$_SESSION['id'];
    $nombre=$_SESSION['nombre'];
    $apellidop=$_SESSION['apellidop'];
    $apellidom=$_SESSION['apellidom'];
    $usuario=$_SESSION['usuario'];
    $correo=$_SESSION['correo'];
    $contrasena=$_SESSION['contrasena'];
    $telefono=$_SESSION['telefono'];
    $direccion=$_SESSION['direccion'];
    //Devolver los valores de la sesión
    echo "Datos de Sesión del usuario: ", $id;
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once ("../plantilla/head.php");
  ?>
</head>
<body>

 
<br>

<label for="nombre">Nombre:</label>
<input name="nombre" id="nombre" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text" placeholder="Nombre" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["nombre"] ?>">

<br style="margin-top: .75%;">

<label for="apellidop">ApellidoP:</label>
<input name="apellidop" id="apellidop" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text" placeholder="ApellidoP" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["apellidop"] ?>">

<br style="margin-top: .75%;">

<label for="apellidom">ApellidoM:</label>
<input name="apellidom" id="apellidom" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text" placeholder="ApellidoM" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["apellidom"] ?>">

<br style="margin-top: .75%;">

<label for="usuario">Usuario:</label>
<input name="usuario" id="usuario" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text"  placeholder="Usuario" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["usuario"] ?>">

<br style="margin-top: .75%;">

<label for="correo">Correo:</label>
<input name="correo" id="correo" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text"  placeholder="Correo" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["correo"] ?>">

<br style="margin-top: .75%;">

<label for="contrasena">Contraseña:</label>
<input name="contrasena" id="contrasena" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text"  placeholder="Contrasena" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["contrasena"] ?>">

<br style="margin-top: .75%;">

<label for="telefono">Telefono:</label>
<input name="telefono" id="telefono" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text"  placeholder="telefono" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["telefono"] ?>">

<br style="margin-top: .75%;">

<label for="direccion">Dirección:</label>
<input name="direccion" id="direccion" readonly style="width: 180px; height: 30px; border-radius: 30px; text-align: center;" type="text"  placeholder="direccion" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $_SESSION["direccion"] ?>">
<br style="margin-top: .75%;">







<?php
    include_once ("../plantilla/scripts.php");
  ?>

<a href="cerrarsesion.php">
<button>
    Cerrar Sesión
</button>
</a>


</body>
</html>



