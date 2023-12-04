<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Sesión abierta</h2>

    <p>
        <?php
            if (isset($_POST['nombre'])) {
                $_SESSION['nombre'] = $_POST['nombre'];
                echo "Bienvenido, <b> " . $_POST['nombre']. "</b>" ;
            }else{
                if (isset($_SESSION['nombre'])) {
                    echo "Has iniciado sesión como: " .$_SESSION['nombre'];
                }else {
                    //Si la sesión expira
                echo "Acceso Restringido";
                }
            }
        ?>
    </p>
    <br>
    <p><a href="login2.php">Ir a la página inicial</a></p>
    <br>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>