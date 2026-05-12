<?php
session_start();

if (isset($_POST['entrar'])) {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
        $_SESSION['admin_logeado'] = true;
        $_SESSION['nombre'] = "Profesor de Programación";
        header("Location: dashboard.php");
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body { font-family: sans-serif; background: #1e293b; color: white; display: grid; place-items: center; height: 100vh; margin:0; }
        form { background: white; padding: 30px; border-radius: 10px; color: #333; width: 300px; }
        input { width: 100%; margin-bottom: 15px; padding: 10px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #005088; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Iniciar Sesión</h2>
        <input type="text" name="user" placeholder="Usuario (admin)" required>
        <input type="password" name="pass" placeholder="Contraseña (1234)" required>
        <button name="entrar" type="submit">Entrar al Sistema</button>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
</body>
</html>