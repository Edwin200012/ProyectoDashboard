<?php
    //Continuamos la sesión
    session_start();
    session_destroy();
    header("location:/NiceAdmin/login.php");
?>