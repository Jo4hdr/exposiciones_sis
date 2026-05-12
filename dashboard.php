<?php
session_start();
if (!isset($_SESSION['admin_logeado'])) {
    die("ACCESO DENEGADO. Debes iniciar sesión.");
}
echo "<h1>Bienvenido a la zona secreta, " . $_SESSION['nombre'] . "</h1>";
echo "<a href='borrar.php'>Cerrar sesión</a>";
?>