<?php
class Route{
    //Usuario
    static $url = "https://localhost:7182/";
    static $crearUsuario = "Usuario/CrearUsuario";
    static $loginUsuario = "Usuario/LoginUsuario";
    static $editarUsuario = "Usuario/EditarUsuario";
    static $editarContrasenaUsuario = "Usuario/EditarContrasenaUsuario";
    static $editarImagenUsuario = "Usuario/EditarImagenUsuario";
    static $resetImagenUsuario = "Usuario/ResetImagenUsuario";
    // static $eliminarUsuario = "Usuario/Eliminar?idusuario=";
    // static $mostrarporId = "Usuario/MostrarPorId?idusuario=";
    // static $editarUsuario = "Usuario/Editar?idusuario=";

    //Empresa
    //Contacto
    static $mostrarDatosContacto = "Empresa/MostrarDatosContacto";
    static $enviarDatosContacto = "Empresa/InsertarContacto";
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
    static $enviarDatosServicios = "Empresa/InsertarServicios";
    static $editarServicios = "Empresa/EditarServicios";
    static $mostrarDatosServiciosPorId = "Empresa/MostrarDatosServiciosPorId?idservicios=";
    static $eliminarServicios = "Empresa/EliminarServicios?idservicios=";
}
?>