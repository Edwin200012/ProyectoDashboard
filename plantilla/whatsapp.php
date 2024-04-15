<style>
#whatsapp-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
  text-decoration: none;
}

/* Eliminar cualquier decoración de texto */
#whatsapp-button a {
  text-decoration: none !important;
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
  transition: transform 1s;
}

.circle:hover {
  transform: scale(1.1) rotate(360deg);
}

/* Estilos icono */
.circle i {
  color: #fff;
  font-size: 24px; /* Tamaño del ícono */
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div id="whatsapp-button">
  <a title="Soporte" href="https://api.whatsapp.com/send?phone=+528712400654&text=Hola,%20contacto%20con%20soporte" target="_blank">
    <div class="circle" id="whatsapp-circle">
      <i class="fab fa-whatsapp"></i>
    </div>
  </a>
</div>


<!-- Rotar circulo -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
   var circle = document.getElementById('whatsapp-circle');
   circle.addEventListener('click', function() {
   circle.classList.add('rotate'); // Agregar la clase 'rotate' al hacer clic
    setTimeout(function() {
      circle.classList.remove('rotate'); // Eliminar la clase 'rotate' después de 0.3 segundos
    }, 300);
  });
});


</script>
