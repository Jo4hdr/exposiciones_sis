<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION['total_visitas'])) {
    $_SESSION['total_visitas'] = 1;
} else {
    $_SESSION['total_visitas']++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; background: #f0f2f5; }
        .card { background: white; padding: 20px; border-radius: 15px; display: inline-block; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h1 { color: #005088; font-size: 80px; margin: 0; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Has visitado esta página:</h2>
        <h1><?php echo $_SESSION['total_visitas']; ?></h1>
        <p>veces durante esta sesión.</p>
        <button onclick="location.reload()">Refrescar (F5)</button>
        <br><br>
        <a href="borrar.php">Reiniciar contador</a>
    </div>
</body>
</html>