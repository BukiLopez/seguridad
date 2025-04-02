<?php
// index.php - Página principal
session_start();
if (!isset($_SESSION['user'])) {
    echo '<a href="login.php">Iniciar sesión</a>';
    exit;
}

echo "Hola, " . htmlspecialchars($_SESSION['user']['name']) . "<br>";
?>
<form action="save.php" method="POST">
    <input type="text" name="palabra" required>
    <button type="submit">Guardar</button>
</form>
<a href="logout.php">Cerrar sesión</a>