<style>
    .whatsapp-button {
        position: fixed;
        right: 30px;
        bottom: 30px;
        background-color: #25d366;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 2px 2px 10px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        z-index: 1000;
        transition: background-color 0.5s, transform 0.5s;
    }

    .whatsapp-button:hover {
        background-color: #34b7f1;
        transform: rotate(360deg);
    }

/* Eliminar cualquier decoración de texto */


/* Mostrar tooltip y diseño del mismo */
.whatsapp-button:hover::after {
    content: "¡Contacto Soporte!";
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: transparent;
    color: black;
    padding: 8px 10px;
    border-radius: 4px;
    white-space: nowrap;
    font-size: 14px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Diseño del icono de WhatsApp */
    .whatsapp-icon {
    color: white;
    font-size: 30px;
    animation: pulse 3s infinite;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%; /* Ajustar el alto para que el icono ocupe todo el espacio del botón */
}

/* Animaciones del circulo */
.circle {
  width: 60px;
  height: 60px;
  background-color: #25d366;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 2s;
}

.circle:hover {
  transform: scale(1.1) rotate(360deg);
}

/* Estilos icono */
.circle i {
  color: #fff;
  font-size: 24px; /* Tamaño del ícono */
}

@keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div id="whatsapp-button">
  <a class="whatsapp-button" href="https://api.whatsapp.com/send?phone=+528712400654&text=Hola,%20contacto%20con%20soporte,%20olvide%20mi%20contrasena." target="_blank">
      <i class="bi bi-whatsapp whatsapp-icon"></i>
  </a>
</div>
