function realizarBusqueda() {
    var searchValue = document.getElementById("searchInput").value.toLowerCase();
    var resultsContainer = document.getElementById("searchResults");
    var paragraphs = document.getElementById("content").getElementsByTagName("p");

    resultsContainer.innerHTML = ""; // Limpiamos los resultados previos

    for (var i = 0; i < paragraphs.length; i++) {
        var text = paragraphs[i].textContent.toLowerCase();
        if (text.includes(searchValue)) {
            resultsContainer.style.display = "block";
            resultsContainer.innerHTML += "<p>" + paragraphs[i].textContent + "</p>";
        }
    }
}