<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
        if (isset($_SESSION['nombre'])) {
            echo  "<p>Bienvenido: " . $_SESSION['nombre'] . "!</p>";
            echo  "<p><a href='logout.php'>Cerrar sesión</a></p>";
            echo  "<br><p><a href='dashboard.php'>Ir al panel de control</a></p>";
        }else{
            echo "<form action='dashboard.php' method='POST'>";
            echo "<input type='text' name='nombre'>";
            echo "<button type='submit'>Acceder</button>";
            echo "</form>";
        }
    ?>

</body>
</html>