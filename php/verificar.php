<?php
include_once('./conexion.php');
$conn = conexionbd();

function validarCredenciales($cedulaI, $passwordI) {
    global $conn;
    $query = "SELECT * FROM Usuario WHERE cedulausuario = ? AND contraseñauser = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$cedulaI, $passwordI]);
    $result = $stmt->fetch();

    return $result; // Devuelve el resultado, si es null indica que las credenciales no coinciden
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['cedulaI'];
    $password = $_POST['passwordI'];

    $resultado = validarCredenciales($email, $password);
    if ($resultado) {
        // Las credenciales son válidas, redirigir a main.php
        $nombreUsuario = $resultado["nombreuser"];
        $rol=$resultado["roluser"];
        if($rol=="1"){
            header("Location: ./crudregistros.php?nombre=$nombreUsuario"); 
        }else{
            header("Location: ../html/main.php?nombre=$nombreUsuario"); 
        }
        // Redirigir a main.php con el nombre de usuario
        exit(); // Asegurarse de detener la ejecución del código después de la redirección
    } else {
        // Las credenciales no coinciden, mostrar mensaje de error
        echo '<script>
        alert("Credenciales inválidas. Por favor, verifique su cedula y contraseña.");
        window.location.href = "../html/login.html";
        </script>';
    }
}
?>
