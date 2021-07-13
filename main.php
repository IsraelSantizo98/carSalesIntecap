<?php
//Se usa para enlazar archivos php o html como el link en css
include 'php/conection.php';
session_start();
//Se toma la variable usuario de login.php, con isset valida que exista la variable usuario y que no sea nula
if(!isset($_SESSION['userName'])){
  //Nos envia a login asi que no nos muestra nada interno sin registrarse
    header('location: login.php');
  //Y termina la session
    die();
}else{
  //continuar la session de login.php
  //session_start();
  //Se guarda en una variable y se toma del archivo login.php
$name = $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <?php
        echo "<h2>Bienvenido: $name</h2>";
    ?>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>