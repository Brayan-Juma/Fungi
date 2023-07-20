<?php
require_once('./conexion.php');

$conn = conexionbd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreCientifico = $_POST['nombrehongo'];
    $habitat = $_POST['habitat'];
    $cantidad = $_POST['cantidad'];
    $imagen = $_FILES['imagen']['name'];
    $descripcion = $_POST['descripcion'];

    // Directorio donde se guardarán las imágenes
    $directorioImagenes = "../imagenes/";
    // Ruta completa de la imagen
    $rutaImagen = $directorioImagenes . $imagen;
    // Mover la imagen al directorio
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);

    // Insertar datos en la tabla division
    $queryDivision = "INSERT INTO division (nombre) VALUES (?)";
    $stmtDivision = $conn->prepare($queryDivision);
    $stmtDivision->execute([$nombreCientifico]);

    // Obtener el ID de la división recién insertada
    $idDivision = $conn->lastInsertId();

    // Insertar datos en la tabla clase
    $queryClase = "INSERT INTO clase (nombre, id_division) VALUES (?, ?)";
    $stmtClase = $conn->prepare($queryClase);
    $stmtClase->execute([$nombreClase, $idDivision]);

    // Obtener el ID de la clase recién insertada
    $idClase = $conn->lastInsertId();

    // Insertar datos en la tabla orden
    $queryOrden = "INSERT INTO orden (nombre, id_clase) VALUES (?, ?)";
    $stmtOrden = $conn->prepare($queryOrden);
    $stmtOrden->execute([$nombreOrden, $idClase]);

    // Obtener el ID de la orden recién insertada
    $idOrden = $conn->lastInsertId();

    // Insertar datos en la tabla familia
    $queryFamilia = "INSERT INTO familia (nombre, id_orden) VALUES (?, ?)";
    $stmtFamilia = $conn->prepare($queryFamilia);
    $stmtFamilia->execute([$nombreFamilia, $idOrden]);

    // Obtener el ID de la familia recién insertada
    $idFamilia = $conn->lastInsertId();

    // Insertar datos en la tabla genero
    $queryGenero = "INSERT INTO genero (nombre, id_familia) VALUES (?, ?)";
    $stmtGenero = $conn->prepare($queryGenero);
    $stmtGenero->execute([$nombreGenero, $idFamilia]);

    // Obtener el ID del género recién insertado
    $idGenero = $conn->lastInsertId();

    // Insertar datos en la tabla especie
    $queryEspecie = "INSERT INTO especie (nombre_cientifico, id_genero, habitat, cantidad, imagen, descripcion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmtEspecie = $conn->prepare($queryEspecie);
    $stmtEspecie->execute([$nombreCientifico, $idGenero, $habitat, $cantidad, $imagen, $descripcion]);

    echo "Los datos han sido guardados en la base de datos.";

    header('Location: ../html/main.html');
    exit();
}
?>


