<?php 
include_once('../php/conexion.php');
include_once('../php/db_classuser.php');
$conn = conexionbd();
$db_class = new Db_ClassUser($conn);

$obj = new Db_ClassUser($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fungi Explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

