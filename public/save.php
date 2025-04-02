<?php
// save.php - Guarda la palabra en MySQL
require '../config/config.php';
session_start();

if (!isset($_SESSION['user'])) {
    die("Acceso denegado");
}

// Conectar a la base de datos
$conn = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['dbname']);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar que la palabra fue enviada
if (!isset($_POST['palabra']) || empty(trim($_POST['palabra']))) {
    die("Palabra no válida");
}

$palabra = trim($_POST['palabra']);

// Usar consulta preparada para evitar inyecciones SQL
$stmt = $conn->prepare("INSERT INTO palabras (texto) VALUES (?)");
$stmt->bind_param("s", $palabra); // "s" indica que es un string

if ($stmt->execute()) {
    echo "Palabra guardada con éxito.";
} else {
    echo "Error al guardar la palabra.";
}

$stmt->close();
$conn->close();
header("Location: index.php");
exit;
?>
