<?php
// Configuración de base de datos
// Copiar este archivo como database.php y completar con los valores reales
$server   = 'localhost';
$username = 'DB_USER';
$password = 'DB_PASSWORD';
$database = 'DB_NAME';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
