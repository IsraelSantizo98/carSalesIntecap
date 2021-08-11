<?php
    include 'php/conection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"
    />
    <link rel="shortcut icon" href="img/car-sales.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Show Room</title>
</head>
<body>
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
            <?php
                $instruccion = "SELECT * FROM vehiculos";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    echo "<h2>".$r['marca']."</h2>";
                }
            ?>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>