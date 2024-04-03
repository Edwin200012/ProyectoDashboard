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
    //Contacto
    static $enviarDatosContacto = "Empresa/InsertarContacto";
    static $mostrarDatosContacto = "Empresa/MostrarDatosContacto";
    static $editarContacto = "Empresa/EditarContacto";
    static $eliminarContacto = "Empresa/EliminarContacto?idcontacto=";
    static $mostrarDatosContactoPorId = "Empresa/MostrarDatosContactoPorId?idcontacto=";
    //Equipo
    static $mostrarDatosEquipo = "Empresa/MostrarDatosEquipo";
    static $enviarDatosEquipo = "Empresa/InsertarEquipo";
    static $editarEquipo = "Empresa/EditarEquipo";
    static $mostrarDatosEquipoIntegrantePorId = "Empresa/MostrarDatosEquipoIntegrantePorId?idequipo=";
    static $eliminarEquipo = "Empresa/EliminarEquipo?idequipo=";
    //Servicios
    static $mostrarDatosServicios = "Empresa/MostrarDatosServicios";
}
?>