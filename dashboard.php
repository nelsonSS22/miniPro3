<?php
session_start();
if (!isset($_SESSION["user"])){
    echo "Debes iniciar seción primero.";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>Bienvenido <?php echo $_SESSION["user"]["nombres"] ?></h2>

    <a href="/handle_db/logout.php">Logout<a/>

</body>
</html>