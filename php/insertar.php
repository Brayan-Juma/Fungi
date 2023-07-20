<?php
session_start(); // Iniciar la sesión

include_once('./conexion.php');

$conn = conexionbd();

// Función para validar la cédula ecuatoriana
function validarCedulaEcuatoriana($cedula) {
    // Verificar que la cédula tiene 10 dígitos
    if (strlen($cedula) !== 10) {
        return false;
    }

    // Resto del código de validación de cédula
    $coeficientes = array(2, 1, 2, 1, 2, 1, 2, 1, 2);
    $suma = 0;

    for ($i = 0; $i < 9; $i++) {
        $digito = intval($cedula[$i]) * $coeficientes[$i];
        $suma += ($digito >= 10) ? ($digito - 9) : $digito;
    }

    $verificadorCalculado = 10 - ($suma % 10);
    $verificador = intval($cedula[9]);

    return (($verificador === $verificadorCalculado) || ($verificador === 0 && $verificadorCalculado === 10));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombreApellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['Confirm_password'];

    // Validar la cédula
    if (!validarCedulaEcuatoriana($cedula)) {
        echo '<script>
            alert("Por favor, ingrese una cedula valida.");
            window.location.href = "../html/register.html";
            </script>';

    } elseif ($password !== $confirmPassword) {
        $error = 'Las contraseñas no coinciden';
    } else {
        // Verificar si el usuario ya existe en la base de datos
        $query_verificar = "SELECT * FROM Usuario WHERE cedulausuario = ?";
        $stmt_verificar = $conn->prepare($query_verificar);
        $stmt_verificar->execute([$cedula]);
        $usuario_existente = $stmt_verificar->fetch();

        if ($usuario_existente) {
            echo '<script>
            alert("El usuario ya está registrado. Por favor, inicia sesión.");
            window.location.href = "../html/login.html";
            </script>';
        } else {
            // Insertar el nuevo usuario en la base de datos
            $query_insertar = "INSERT INTO Usuario (cedulausuario, nombreuser, emailuser, contraseñauser) VALUES (?, ?, ?, ?)";
            $stmt_insertar = $conn->prepare($query_insertar);
            $stmt_insertar->execute([$cedula, $nombre, $email, $password]);
            $_SESSION['mensaje'] = 'Registro exitoso. ¡Bienvenido!';
            header('location: ../html/login.html');
            exit();
        }
    }
}

// Si ocurrió un error, redireccionar al formulario de registro con el mensaje de error
if (isset($error)) {
    $_SESSION['error'] = $error;
    header('location: ../html/register.html');
    exit();
}