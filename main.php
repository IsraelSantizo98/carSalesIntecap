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
$imageP = $_SESSION['imageP'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Main</title>
</head>
<body>
  <div class="container-navbar ">
    <div class="logo-navbar">
        <img src="https://intecap.edu.gt/wp-content/uploads/2020/03/logo-intecap.png" alt="Logo">
    </div>
    <div class="navbar">
      <ul>
          <li><a href="index.php"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
      </ul>
  </div>
  <div class="theme-toggle">
    <input type="checkbox" id="theme-toggle-btn">
    <label for="theme-toggle-btn">
      <i class="fas fa-moon toggle-icon" aria-hidden="true"></i>
    </label>
    <a href="logout.php">Cerrar Sesión</a>
  </div>
  <div class="container">
    <div class="crud-selection">
      <ul>
        <li>Insertar</li>
        <li>Modificar</li>
        <li>Eliminar</li>
      </ul>
    </div>
  </div>
    <?php
        echo "<h2>Bienvenido: $name</h2>";
        //echo "<img src='imageProfile/$imageP' alt='photo of me' />";
    ?>
</body>
</html>