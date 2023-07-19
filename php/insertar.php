<?php

include_once('./conexion.php');

$conn = conexionbd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombreApellido'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['Confirm_password'];

  if ($password !== $confirmPassword) {
    $error = 'Las contraseñas no coinciden';
  } else {
    $query = "INSERT INTO Usuario (cedulausuario, nombreuser, emailuser, contraseñauser) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$cedula, $nombre, $email, $password]);
    echo 'Los datos han sido insertados en la base de datos';

    header('location: ../html/login.html');
    exit();
  }
}

////////////////////////////////////////////////////////////////////////////////////////////
