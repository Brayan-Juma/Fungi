<?php 
session_start();
include_once('../php/conexion.php');
include_once('../php/db_classhongos.php');
$conn = conexionbd();
$db_class = new Db_ClassHongo($conn);

$obj = new Db_ClassHongo($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fungí Explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
