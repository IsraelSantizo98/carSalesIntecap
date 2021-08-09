<?php
    include 'conection.php';
    $marca = $_POST['marca'];
    $linea = $_POST['linea'];
    $tipo = $_POST['tipo'];
    $transmicion = $_POST['transmicion'];
    $modelo = $_POST['modelo'];    
    $km = $_POST['km'];
    $traccion = $_POST['traccion'];
    $combustible = $_POST['combustible'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $puerta = $_POST['puerta'];
    $idVehiculos = $_POST['codigoCliente'];
    $instruccion = "UPDATE vehiculos SET marca = '$marca', linea = '$linea', transmision = '$transmicion', modelo = '$modelo', km = '$km', traccion = '$traccion', combustible = '$combustible', color = '$color', precio = '$precio', cantidad_puertas = '$puerta'  WHERE correlativo = '$idVehiculos'";
    $query = mysqli_query($conection, $instruccion);
    if ($query){
        echo "exito";
        //header('location: ../modales/afirmativo.php');
    }else{
        echo "error";
        //header('location: ../modales/error.php');
    }
?>