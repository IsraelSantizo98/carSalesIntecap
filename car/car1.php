<?php
//Se usa para enlazar archivos php o html como el link en css
include '../php/conection.php';
session_start();
$name = $_SESSION['name'];
$imageP = $_SESSION['imageP'];
//Se toma la variable usuario de login.php, con isset valida que exista la variable usuario y que no sea nula
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo(rand()); ?>">
    <title>Carro</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="container-navbar ">
            <div class="logo-navbar">
                <img src="https://intecap.edu.gt/wp-content/uploads/2020/03/logo-intecap.png" alt="Logo">
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="theme-toggle">
            <input type="checkbox" id="theme-toggle-btn">
            <label for="theme-toggle-btn">
                <i class="fas fa-moon toggle-icon" aria-hidden="true"></i>
            </label>
        </div>
    </div>
    <div class="container-carousel">
        <img class="fotoCarousel imagen" src="../imageProfile/508247.jpg" alt="">
        <img class="fotoCarousel imagen" src="../imageProfile/971601.jpg" alt="">
        <img class="fotoCarousel imagen" src="../imageProfile/andy-holmes-LUpDjlJv4_c-unsplash.jpg" alt="">
        <img class="fotoCarousel imagen" src="../imageProfile/greg-rakozy-oMpAz-DN-9I-unsplash.jpg" alt="">
    </div>
    <div class="arrow">
        <i onclick="previousImage()"class="fas fa-arrow-circle-left"></i>
        <i onclick="nextImage()" class="fas fa-arrow-circle-right"></i>
    </div>
</div>
<script src="../js/main.js"></script>
</body>
</html>