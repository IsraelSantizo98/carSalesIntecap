<?php
    include 'php/conection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nuevo Carro</title>
</head>
<body>
    <form action="">
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
                $id = $r['id_transmision'];
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
            <input type="text" name="linea" placeholder="Modelo">
            <!-- Kilometros -->
            <label for="km">Kilometros recorridos</label>
            <input type="text" name="km" placeholder="Kilometros">
            <!-- Precio -->
            <label for="precion">Precio</label>
            <input type="text" name="precion"placeholder="Precio">
            <!-- Cantidad de puertas -->
            <label for="puerta">Cantidad de puertas</label>
            <input type="text" name="puerta"placeholder="Puertas">
        </fieldset>
    </form>
</body>
</html>