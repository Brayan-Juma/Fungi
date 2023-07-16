// Obtener el elemento del menú activo en la barra lateral
var sidebarMenuItems = document.querySelectorAll('.sidebar .menu li a');
var currentURL = window.location.href;

for (var i = 0; i < sidebarMenuItems.length; i++) {
    var menuItem = sidebarMenuItems[i];
    if (menuItem.href === currentURL) {
        menuItem.classList.add('active');
        break;
    }
}

// Obtener el elemento del menú activo en la barra de navegación
var navbarMenuItems = document.querySelectorAll('.navbar-menu li a');

for (var j = 0; j < navbarMenuItems.length; j++) {
    var navbarMenuItem = navbarMenuItems[j];
    if (navbarMenuItem.href === currentURL) {
        navbarMenuItem.classList.add('active');
        break;
    }
}

// Agregar funcionalidad a "Configuración" en el menú desplegable de la barra de navegación
var configuracionLink = document.getElementById('configuracion');

configuracionLink.addEventListener('click', function() {
    // Lógica para la acción de "Configuración"
    console.log("Haz clic en Configuración");
});

// Agregar funcionalidad a "Cerrar sesión" en el menú desplegable de la barra de navegación
var cerrarSesionLink = document.getElementById('cerrar-sesion');

cerrarSesionLink.addEventListener('click', function() {
    // Lógica para la acción de "Cerrar sesión"
    console.log("Haz clic en Cerrar sesión");
});


function cambiarContenido(event, seccionId) {
    event.preventDefault(); // Evita el comportamiento predeterminado de los enlaces
  
    // Oculta todas las secciones de contenido
    var secciones = document.querySelectorAll('section[id^="contenido-"]');
    for (var i = 0; i < secciones.length; i++) {
      secciones[i].style.display = "none";
    }
  
    // Muestra la sección de contenido seleccionada
    var seccion = document.getElementById(seccionId);
    seccion.style.display = "block";
  }
  
  
  