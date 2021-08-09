<?php
//Se usa para enlazar archivos php o html como el link en css
include 'php/conection.php';
/*
$idCarro = $_GET[''];
$instruccion = "SELECT * FROM vehiculos WHERE correlativo = '$idProducto'";
$query = mysqli_query($conection, $instruccion);
while ($i=mysqli_fetch_assoc($query)) {
    $nombreProducto = $i['NombreProducto'];
    $cantidadUnidad = $i['CantidadPorUnidad'];
    $precioUnidad = $i['PrecioUnidad'];
    $existencias = $i['UnidadesEnExistencia'];
}
*/
?>
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"
    />
    <link rel="shortcut icon" href="img/car-sales.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <title>Car Sale</title>
</head>
<body>
    <div class="wrapper">
        <dv class="container">
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
            <div class="container-banner section-margin">
                <h1>El auto que buscas lo tenemos</h1>
            </div>
            <div class="container-sale section">
                    <?php
                            $instruccion = "SELECT vehiculos.marca AS marca1, marcas.marca AS marca2, transmision.transmision AS trans, fotos_autos.ubicacion AS url
                            FROM vehiculos INNER JOIN marcas ON vehiculos.marca = marcas.id_marca
                            INNER JOIN transmision ON vehiculos.transmision = transmision.id_transmicion
                            INNER JOIN fotos_autos ON vehiculos.correlativo = fotos_autos.id_vehiculo";
                            $query = mysqli_query($conection, $instruccion);
                            $resultado = mysqli_num_rows($query);
                            if($resultado = 1){
                                while ($i=mysqli_fetch_assoc($query)) {
                                    echo "<div class='item item-1'>";
                                    echo "<div class='card card1-image'>";
                                    echo "<a href='car/car1.php'></a>";
                                    echo "<img src=".$i['url'].">";
                                    echo "</div>";
                                    echo "<div class='card1-description'>";
                                    echo "<h2>".$i['marca2']."</h2>";
                                    echo "<span>".$i['trans']."</span>";
                                    echo "<span class='badge new'>Nuevo</span>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            else{
                                echo "No se pudo";
                            }
                        ?>
                </div>
            </dv>
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
    <script src="js/main.js"></script>
</body>
</html>