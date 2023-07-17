<?php

include_once ('./conexion.php');
$conn = conexionbd();

function validarCredenciales($cedulaI, $passwordI) {
    global $conn;
    $query = "SELECT * FROM Usuario WHERE cedulausuario = ? AND contraseñauser = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$cedulaI, $passwordI]);
    $result = $stmt->fetch();

    if ($result) {
        // Las credenciales son válidas
        return true;
    } else {
        // Las credenciales no coinciden
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['cedulaI'];
    $password = $_POST['passwordI'];

    if (validarCredenciales($email, $password)) {
        // Las credenciales son válidas, redirigir a main.html
        header('Location: ../html/main.php');
        exit(); // Asegurarse de detener la ejecución del código después de la redirección
    } else {
        // Las credenciales no coinciden, mostrar mensaje de error
        echo '<script>
        alert("Credenciales inválidas. Por favor, verifique su correo electrónico y contraseña.");
        window.location.href = "../html/login.html";
    </script>';
    }
}
?>