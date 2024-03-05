<?php
class Route{
    //Usuario
    static $url = "https://localhost:7182/";
    static $crearUsuario = "Usuario/CrearUsuario";//POST
    static $loginUsuario = "Usuario/LoginUsuario";
    static $editarUsuario = "Usuario/EditarUsuario";//POST
    static $editarContrasenaUsuario = "Usuario/EditarContrasenaUsuario";//POST
    // static $eliminarUsuario = "Usuario/Eliminar?idusuario=";
    // static $mostrarporId = "Usuario/MostrarPorId?idusuario=";
    // static $editarUsuario = "Usuario/Editar?idusuario=";

    //Empresa
    static $enviarDatosContacto = "Empresa/Contacto";
    static $mostrarDatosContacto = "Empresa/MostrarDatosContacto";
    static $editarContacto = "Empresa/EditarContacto";
    static $eliminarContacto = "Empresa/EliminarContacto?idcontacto=";
}
?>