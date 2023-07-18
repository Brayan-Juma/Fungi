
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


function actualizarCombo() {
  var combo1 = document.getElementById("division");
  var combo2 = document.getElementById("clase");
  
  // Obtener el valor seleccionado en el primer combo box
  var opcionSeleccionada = combo1.value;
  
  // Limpiar el segundo combo box
  combo2.innerHTML = null;
  
  // Lógica para agregar opciones al segundo combo box basado en la selección del primero
  if (opcionSeleccionada === "opcion1") {
      combo2.options.add(new Option("Homobasidiomycetes", "Homo"));
      combo2.options.add(new Option("Heterobasidiomycetes", "hetero"));
  } else if (opcionSeleccionada === "opcion2") {
      // Agrega aquí las opciones correspondientes a la opción 2 si es necesario

      combo2.options.add(new Option("Opción X", "opcionX"));
      combo2.options.add(new Option("Opción Y", "opcionY"));
  }
}

function toggleDropdownMenu() {
  var dropdownMenu = document.getElementById("dropdown-menu");
  dropdownMenu.style.display = (dropdownMenu.style.display === "none") ? "block" : "none";
}