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
                <a href="../index.php">
                    <img src="https://intecap.edu.gt/wp-content/uploads/2020/03/logo-intecap.png" alt="Logo">
                </a>
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
        <img class="fotoCarousel imagen" src="https://i.imgur.com/2Aw0a0w.jpg" alt="">
        <img class="fotoCarousel imagen" src="https://i.imgur.com/IPHD0FS.jpg" alt="">
        <img class="fotoCarousel imagen" src="https://i.imgur.com/x0M3K6z.jpg" alt="">
        <img class="fotoCarousel imagen" src="https://i.imgur.com/R0V03fz.jpg" alt="">
        <img class="fotoCarousel imagen" src="https://i.imgur.com/3tYz5DP.jpg" alt="">
            <div class="arrow arrow-left">
                <i onclick="previousImage()" class="fas fa-chevron-left"></i>
            </div>
            <div class="arrow arrow-right">
                <i onclick="nextImage()" class="fas fa-chevron-right"></i>
            </div>
    </div>
    <div class="container-description-car section-margin">
        <h3>Camaro</h3>
    </div>
    <div class="container-footer section-margin">
            <div class="logo-footer">
                    <a href="https://intecap.edu.gt/" target="_blank"><img src="https://intecap.edu.gt/wp-content/uploads/2019/01/logo-inverse.png" alt="Logo"></a>
                </div>
                <div class="footer">
                    <ul>
                        <li><a href="https://github.com/IsraelSantizo98"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<script src="../js/main.js"></script>
</body>
</html>