<?php
    include 'php/conection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Nuevo Carro</title>
</head>
<body>
    <div>
    <div class="container-navbar">
                <div class="logo-navbar">
                    <a href="main.php">
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
    </div>
    <div class="container-form-car section">
        <form action="uploadNewCar.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Nuevo Vehiculo</legend>
                <label for="marca">Marca</label>
                <select name="marca" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                $instruccion = "SELECT * FROM marcas";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    $id = $r['id_marca'];
                    #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                    echo "<option value = '$id'>".$r['marca']."</option>";
                }
                ?>
                </select>
                <label for="tipo">Tipo</label>
                <select name="tipo" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                $instruccion = "SELECT * FROM tipo_vehiculo";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    $id = $r['id_tipo'];
                    #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                    echo "<option value = '$id'>".$r['tipo']."</option>";
                }
                ?>
                </select>
                <label for="transmicion">Transmicion</label>
                <select name="transmicion" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                $instruccion = "SELECT * FROM transmision";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    $id = $r['id_transmicion'];
                    #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                    echo "<option value = '$id'>".$r['transmision']."</option>";
                }
                ?>
                </select>
                <label for="traccion">Traccion</label>
                <select name="traccion" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                $instruccion = "SELECT * FROM traccion";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    $id = $r['id_traccion'];
                    #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                    echo "<option value = '$id'>".$r['traccion']."</option>";
                }
                ?>
                </select>
                <label for="combustible">Combustible</label>
                <select name="combustible" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                $instruccion = "SELECT * FROM combustible";
                $query = mysqli_query($conection, $instruccion);
                while ($r = mysqli_fetch_assoc($query)){
                    $id = $r['id_combustible'];
                    #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                    echo "<option value = '$id'>".$r['combustible']."</option>";
                }
                ?>
                </select>
                <label for="color">Color</label>
                <select name="color" id="">
                <option value="" disabled selected>--Seleccione--</option>
                    <?php
                        $instruccion = "SELECT * FROM colores";
                        $query = mysqli_query($conection, $instruccion);
                        while ($r = mysqli_fetch_assoc($query)){
                            $id = $r['id_color'];
                            #echo "<option value = '".$r['id_marca']."'>".$r['marca']."</option>";
                            echo "<option value = '$id'>".$r['color']."</option>";
                        }
                ?>
                </select>
                <!-- Linea -->
                <label for="linea">Linea</label>
                <input type="text" name="linea"placeholder="Linea">
                <!-- Modelo -->
                <label for="Modelo">Modelo</label>
                <input type="text" name="modelo" placeholder="Modelo">
                <!-- Kilometros -->
                <label for="km">Kilometros recorridos</label>
                <input type="text" name="km" placeholder="Kilometros">
                <!-- Precio -->
                <label for="precio">Precio</label>
                <input type="text" name="precio"placeholder="Precio">
                <!-- Cantidad de puertas -->
                <label for="puerta">Cantidad de puertas</label>
                <input type="text" name="puerta"placeholder="Puertas">
                <!-- Foto -->
                <label for="archivo">Insertar una imagen</label>
                <input type="file" name="archivo[]" id="archivo" multiple="">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
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
</body>
</html> 