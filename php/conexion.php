<?php
function conexionbd()

{
    $host = "fungiserver.postgres.database.azure.com";

    $dbname = "Fungi";

    $user = "administrador";

    $password = "fungi12@";

    $port = 5432;

    try {

        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

        echo "Conexión exitosa";

    } catch (PDOException $th) {

        echo "Error de conexión: " . $th->getMessage();

    }

    return $conn;

}

$conn = conexionbd();

?>


