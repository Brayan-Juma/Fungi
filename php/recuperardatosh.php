<?php
// Incluir el archivo de conexión a la base de datos (conexion.php)
include './conexion.php';

// Realizar la consulta SQL para obtener las especies
$query = "SELECT * FROM especie";
$resultado = $conn->query($query);

// Verificar si se encontraron resultados
if ($resultado->rowCount() > 0) {
    // Crear un array para almacenar las especies
    $especies = array();
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        // Agregar cada especie al array
        $especies[] = array(
            'imagen' => $row['imagen'],
            'nombre_cientifico' => $row['nombre_cientifico'],
            'habitat' => $row['habitat'],
            'descripcion' => $row['descripcion']
        );
    }

    // Devolver los datos en formato JSON
    echo json_encode($especies);
} else {
    // No se encontraron especies
    echo json_encode([]);
}

// Cerrar la conexión a la base de datos
$conn = null;
?>



