<?php
    include 'php/conection.php';
    $idVehiculo = $_GET['codCLiente'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
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
        <div class="container-glider section">
            <button aria-label="Anterior" class="flecha flecha-anterior" id="fl1">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="container-carousel">
                <?php
                    $instruccion2 = "SELECT * FROM vehiculos 
                    INNER JOIN fotos_autos ON vehiculos.correlativo = fotos_autos.id_vehiculo
                    WHERE vehiculos.correlativo = '$idVehiculo'";
                    $query2 = mysqli_query($conection, $instruccion2);
                    while ($i = mysqli_fetch_assoc($query2)){
                        echo "<img class='' src=".$i['ubicacion'].">";
                    }
                ?>
            </div>
            <button class="flecha flecha-siguiente" id="fs1">
                <i class="fas fa-chevron-right"></i>
            </button>
            <div role="tablist" class="carousel-indicadores">
                
            </div>
        </div>
        <div class="container-information section">
            <h2>Informacion del vehiculo</h2>
            <table>
                <tr>
                    <th>Marca</th>
                    <th>Linea</th>
                    <th>Tipo</th>
                    <th>Transmisión</th>
                    <th>Modelo</th>
                    <th>Kilometraje</th>
                    <th>Traccion</th>
                    <th>Tipo de combustible</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Cantidad de puertas</th>
                </tr>
            <?php
                $instruccion = "SELECT * FROM vehiculos
                INNER JOIN marcas ON vehiculos.marca = marcas.id_marca
                INNER JOIN tipo_vehiculo ON vehiculos.tipo = tipo_vehiculo.id_tipo
                INNER JOIN transmision ON vehiculos.transmision = transmision.id_transmicion
                INNER JOIN traccion ON vehiculos.traccion = traccion.id_traccion
                INNER JOIN combustible ON vehiculos.combustible = combustible.id_combustible
                INNER JOIN colores ON vehiculos.color = colores.id_color
                WHERE vehiculos.correlativo = '$idVehiculo'";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    echo "<tr><td>".$r['marca']."</td><td>".$r['linea']."</td><td>".$r['tipo']."</td><td>".$r['transmision']."</td><td>".$r['modelo']."</td><td>".$r['km']."</td><td>".$r['traccion']."</td><td>".$r['combustible']."</td><td>".$r['color']."</td><td>Q".$r['precio'].".00</td><td>".$r['cantidad_puertas']."</td></tr>";
                    
                }
            ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>