<?php
    $serve = "localhost";
    $user = "root";
    $password = "";
    $db = "carsale";
    $conection = mysqli_connect($serve, $user, $password, $db);
    if (!$conection) {
        echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
        echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
        echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>