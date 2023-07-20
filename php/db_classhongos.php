<?php
class Db_ClassHongo
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Función para insertar una nueva especie
    function createEspecie()
    {
        $sql = "INSERT INTO especie (nombre_cientifico, id_genero, habitat, cantidad, imagen, descripcion) VALUES (:nombre_cientifico, :id_genero, :habitat, :cantidad, :imagen, :descripcion)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre_cientifico', $_POST['nombre_cientifico']);
        $stmt->bindParam(':id_genero', $_POST['id_genero']);
        $stmt->bindParam(':habitat', $_POST['habitat']);
        $stmt->bindParam(':cantidad', $_POST['cantidad']);
        $stmt->bindParam(':imagen', $_POST['imagen']);
        $stmt->bindParam(':descripcion', $_POST['descripcion']);
        return $stmt->execute();
    }

    // Función para obtener todas las especies
    function getEspecies()
    {
        $sql = "SELECT * FROM especie ORDER BY id_especie DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    // Función para obtener una especie por su ID
    function getEspecieById($id)
    {
        $sql = "SELECT * FROM especie WHERE id_especie = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Función para actualizar una especie
    function updateEspecie()
    {
        $sql = "UPDATE especie SET nombre_cientifico = :nombre_cientifico, id_genero = :id_genero, habitat = :habitat, cantidad = :cantidad, imagen = :imagen, descripcion = :descripcion WHERE id_especie = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre_cientifico', $_POST['nombre_cientifico']);
        $stmt->bindParam(':id_genero', $_POST['id_genero']);
        $stmt->bindParam(':habitat', $_POST['habitat']);
        $stmt->bindParam(':cantidad', $_POST['cantidad']);
        $stmt->bindParam(':imagen', $_POST['imagen']);
        $stmt->bindParam(':descripcion', $_POST['descripcion']);
        $stmt->bindParam(':id', $_POST['id']);
        return $stmt->execute();
    }

    // Función para eliminar una especie por su ID
    function deleteEspecie($id)
    {
        $sql = "DELETE FROM especie WHERE id_especie = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>




