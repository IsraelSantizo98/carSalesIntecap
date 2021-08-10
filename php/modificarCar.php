<?php
    include 'conection.php';
    session_start();
    if(!isset($_SESSION['userName'])){
        header('location: login.php');
        die();
    }else{
    $name = $_SESSION['name'];
    $imageP = $_SESSION['imageP'];
    }
    $idVehiculo = $_GET['codCLiente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Actualizar Cliente</title>
</head>
<body>
    <form action="actualizaCar.php" method="POST">
    <fieldset>
    <legend>Actualizar Vehiculo</legend>
    <label for="marca">Marca</label>
            <select name="marca" id="">
            <?php
                $instruccion2 = "SELECT vehiculos.correlativo, marcas.id_marca, marcas.marca FROM vehiculos INNER JOIN marcas ON vehiculos.marca = marcas.id_marca
                WHERE vehiculos.correlativo = '$idVehiculo'";
                $cont = mysqli_query($conection, $instruccion2);
                while ($i=mysqli_fetch_assoc($cont)){
                    $id = $i['id_marca'];
                    echo "<option value='$id'>".$i['marca']."</option>";
                }
                
            ?>
            <?php
            $instruccion = "SELECT * FROM marcas";
            $query = mysqli_query($conection, $instruccion);
            while ($r = mysqli_fetch_assoc($query)){
                $id = $r['id_marca'];
                echo "<option value = '$id'>".$r['marca']."</option>";
            }
            ?>
            </select>
            <!-- Linea vehiculo -->
            <label for="linea">Linea</label>
            <?php
            $instruccion2 = "SELECT * FROM vehiculos WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                echo "<input type='text' name='linea' value='".$i['linea']."'>";
            }
            ?>
            <!-- Tipo vehiculo -->
            <label for="tipo">Tipo</label>
            <select name="tipo" id="">
            <?php
            $instruccion2 = "SELECT vehiculos.correlativo, tipo_vehiculo.id_tipo, tipo_vehiculo.tipo FROM vehiculos INNER JOIN tipo_vehiculo ON vehiculos.correlativo = tipo_vehiculo.id_tipo
            WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                $id = $i['id_tipo'];
                echo "<option value='$id'>".$i['tipo']."</option>";
            }
            ?>
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
            <!-- Transmicion -->
            <label for="transmicion">Transmicion</label>
            <select name="transmicion" id="">
            <?php
            $instruccion2 = "SELECT vehiculos.correlativo, transmision.id_transmicion, transmision.transmision FROM vehiculos INNER JOIN transmision ON vehiculos.correlativo = transmision.id_transmicion
            WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                $id = $i['id_transmicion'];
                echo "<option value='$id'>".$i['transmision']."</option>";
            }
            ?>
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
            <!-- Modelo -->
            <label for="modelo">Modelo</label>
            <?php
            $instruccion2 = "SELECT * FROM vehiculos WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                echo "<input type='text' name='modelo' value='".$i['modelo']."'>";
            }
            ?>
            <!-- kilometro -->
            <label for="km">Kilometros</label>
            <?php
            $instruccion2 = "SELECT * FROM vehiculos WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                echo "<input type='text' name='km' value='".$i['km']."'>";
            }
            ?>
            <!-- traccion -->
            <label for="traccion">Traccion</label>
            <select name="traccion" id="">
            <?php
            $instruccion2 = "SELECT vehiculos.correlativo, traccion.id_traccion, traccion.traccion FROM vehiculos INNER JOIN traccion ON vehiculos.correlativo = traccion.id_traccion
            WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                $id = $i['id_traccion'];
                echo "<option value='$id'>".$i['traccion']."</option>";
            }
            ?>
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
            <!-- Combustible -->
            <label for="combustible">Combustible</label>
            <select name="combustible" id="">
            <?php
            $instruccion2 = "SELECT vehiculos.correlativo, combustible.id_combustible, combustible.combustible FROM vehiculos INNER JOIN combustible ON vehiculos.correlativo = combustible.id_combustible
            WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                $id = $i['id_combustible'];
                echo "<option value='$id'>".$i['combustible']."</option>";
            }
            ?>
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
            <!-- Color -->
            <label for="color">Color</label>
            <select name="color" id="">
            <?php
            $instruccion2 = "SELECT vehiculos.correlativo, colores.id_color, colores.color FROM vehiculos INNER JOIN colores ON vehiculos.correlativo = colores.id_color
            WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                $id = $i['id_color'];
                echo "<option value='$id'>".$i['color']."</option>";
            }
            ?>
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
            <!-- Precio -->
            <label for="precio">Precio</label>
            <?php
            $instruccion2 = "SELECT * FROM vehiculos WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                echo "<input type='text' name='precio' value='".$i['precio']."'>";
            }
            ?>
            <!-- Cantidad puertas -->
            <label for="puertas">Cantidad de puertas</label>
            <?php
            $instruccion2 = "SELECT * FROM vehiculos WHERE vehiculos.correlativo = '$idVehiculo'";//esto esta bien, sin embargo, no es tan necesario
            $query2 = mysqli_query($conection, $instruccion2);
            //Para uso del ciclo las guarda y luego las muestra esa es su funcion
            while ($i=mysqli_fetch_assoc($query2)) {
                echo "<input type='text' name='puerta' value='".$i['cantidad_puertas']."'>";
            }
            ?>
            <input type="hidden" name="codigoCliente" value ="<?php echo $idVehiculo;?>">
            <input type="submit" value="Actualizar" class="boton boton-verde">
    </fieldset>
    </form>
</body>
</html>