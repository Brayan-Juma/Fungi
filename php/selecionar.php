<?php
require_once('conexion.php');
$conn = conexionbd();

// Consulta SQL para obtener los datos de la tabla especie
$sql = "SELECT nombre_cientifico, descripcion, imagen FROM especie";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result) {
    if ($result->rowCount() > 0) {
        // Crear las filas de la tabla con los datos de la especie
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $nombreCientifico = $row['nombre_cientifico'];
            $descripcion = $row['descripcion'];
            $imagen = $row['imagen'];

            // Agregar una fila a la tabla con los datos de la especie
            echo '<tr>';
            echo '<td><img  src="../img/' . $imagen . '" alt="Imagen" width="150px" height="150px"></td>';
            echo '<td>';
            echo '<h3>' . $nombreCientifico . '</h3>';
            echo '<p>' . $descripcion . '</p>';
            echo '</td>';
            echo '</tr>';
      
        }
    } else {
        echo '<tr><td colspan="3">No se encontraron datos.</td></tr>';
    }
} else {
    echo '<tr><td colspan="3">Error en la consulta: ' . $conn->errorInfo()[2] . '</td></tr>';
}

// Cerrar conexión a la base de datos
$conn = null;
?>