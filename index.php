<?php
include 'php/conection.php';
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
                    /*$instruccion = "SELECT vehiculos.marca AS marca1,vehiculos.correlativo, marcas.marca AS marca2, transmision.transmision AS trans, fotos_autos.ubicacion AS url
                    FROM vehiculos INNER JOIN marcas ON vehiculos.marca = marcas.id_marca
                    INNER JOIN transmision ON vehiculos.transmision = transmision.id_transmicion
                    INNER JOIN fotos_autos ON vehiculos.correlativo = fotos_autos.id_vehiculo";*/
                    $instruccion="SELECT vehiculos.correlativo, vehiculos.linea, marcas.marca FROM vehiculos
                    INNER JOIN marcas ON vehiculos.marca = marcas.id_marca";
                    $query = mysqli_query($conection, $instruccion);
                    //$resultado = mysqli_num_rows($query);
                        while ($i=mysqli_fetch_assoc($query)) {
                            //por cada recorrido tendremos un correlativo de auto    
                            $correlativo = $i['correlativo'];
                            echo "<div class='item'>";
                            echo "<div class='card card1-image'>";
                            echo "<a href='car/car1.php'></a>";
                            $instrucFoto = "SELECT * FROM fotos_autos WHERE id_vehiculo = $correlativo";
                            $query2 = mysqli_query($conection,$instrucFoto);
                            $contador=0;
                            while ($a=mysqli_fetch_assoc($query2)){
                                if($contador==0){
                                    echo "<img src=".$a['ubicacion'].">";
                                }
                                $contador++;
                                }
                            echo "</div>";
                            echo "<div class='card-description'>";
                            echo "<h2>".$i['marca']."</h2>";
                            echo "<span>".$i['linea']."</span>";
                            echo "</div>";
                            echo "</div>";
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