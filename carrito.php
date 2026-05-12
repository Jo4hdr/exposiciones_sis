<?php
session_start();

// Si recibimos un producto por la URL, lo metemos al carrito
if (isset($_GET['item'])) {
    $_SESSION['carrito'][] = $_GET['item'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: space-around; padding: 50px; }
        .productos, .carrito { background: white; padding: 20px; border-radius: 10px; width: 40%; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        li { margin-bottom: 10px; }
        .btn { background: #005088; color: white; padding: 5px 10px; text-decoration: none; border-radius: 5px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="productos">
        <h2>Tienda de Tecnología</h2>
        <ul>
            <li>Laptop <a class="btn" href="?item=Laptop">Añadir</a></li>
            <li>Monitor <a class="btn" href="?item=Monitor">Añadir</a></li>
            <li>Teclado <a class="btn" href="?item=Teclado">Añadir</a></li>
        </ul>
    </div>

    <div class="carrito">
        <h2>Tu Carrito 🛒</h2>
        <ul>
            <?php
            if (!empty($_SESSION['carrito'])) {
                foreach ($_SESSION['carrito'] as $producto) {
                    echo "<li>✅ $producto</li>";
                }
            } else {
                echo "<p>El carrito está vacío</p>";
            }
            ?>
        </ul>
        <a href="borrar.php" style="color:red;">Vaciar todo</a>
    </div>
</body>
</html>