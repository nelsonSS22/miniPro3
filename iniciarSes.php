<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form action="/login_db/login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>

            <h4>or continue whit these social profile</h4>
        </form>
    </div>
</body>
</html>
