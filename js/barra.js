document.getElementById("registroForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    fetch("../php/insertar.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        const mensajeRegistro = document.getElementById("mensajeRegistro");
        mensajeRegistro.innerText = data.mensaje;
        mensajeRegistro.style.display = "block";
    })
    .catch(error => console.error(error));
});



