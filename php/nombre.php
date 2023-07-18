<?php
require_once('conexion.php');
$conn = conexionbd();

// Obtener la cédula ingresada por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["cedulaI"];

    // Consulta SQL con cédula como filtro
    $sql = "SELECT nombreuser FROM usuario WHERE cedula = $cedula";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cedula', $cedula);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $nombreUsuario = $row["nombreuser"];
        echo "<h1>Bienvenido, " . $nombreUsuario . "!</h1>";
    } else {
        echo "<h1>No se encontraron resultados para la cédula ingresada.</h1>";
    }
}
?>