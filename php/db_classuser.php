<?php
include_once('../php/conexion.php');

class Db_ClassUser
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function createUser()
    {
        $sql = "INSERT INTO usuario (cedulausuario, nombreuser, emailuser, fecha_registro) VALUES (:cedulaUsuario, :nombreUser, :emailUser, CURRENT_TIMESTAMP)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':cedulaUsuario', $_POST['cedulaUsuario']);
        $stmt->bindParam(':nombreUser', $_POST['nombreUser']);
        $stmt->bindParam(':emailUser', $_POST['emailUser']);
        return $stmt->execute();
    }

    function getUsers()
    {
        $sql = "SELECT cedulausuario, nombreuser, emailuser, fecha_registro FROM usuario ORDER BY cedulausuario DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function getUserByCedula()
    {
        $sql = "SELECT cedulausuario, nombreuser, emailuser, fecha_registro FROM usuario WHERE cedulausuario = :cedula";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':cedula', $_POST['cedula']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteUser()
    {
        $sql = "DELETE FROM usuario WHERE cedulausuario = :cedula";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':cedula', $_POST['cedula']);
        return $stmt->execute();
    }

    function updateUser()
    {
        $sql = "UPDATE usuario SET nombreuser = :nombreUsuario, emailuser = :email WHERE cedulausuario = :cedula";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombreUsuario', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':cedula', $_POST['cedula']);
        return $stmt->execute();
    }
}
?>


