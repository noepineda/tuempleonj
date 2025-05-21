<?php
require_once 'conexion.php'; // aquí usás tu conexión PDO

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuarios (nombre, email, contraseña, tipo, via_google) 
        VALUES (:nombre, :email, :contrasena, :tipo, 0)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nombre' => $nombre,
    ':email' => $email,
    ':contrasena' => $contrasena,
    ':tipo' => $tipo
]);

header("Location: login.php");
exit;
