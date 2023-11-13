<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crear Perfil</title>
</head>
<body>
    <div class="login-container">
    <h2>Crear Perfil</h2>
    <form method="post" action="login.php">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <input type="submit" value="Crear Usuario">
    </form>

    <form method="post" action="login.php">
        <input type="submit" value="Login">
    </form>
    </div>
    


</body>
</html>