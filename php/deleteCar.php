<?php
    include 'conection.php';
    //Se captura el valor del id en una variable
    $idVehiculo = $_GET['codCLiente'];
    //Instruccion para eliminar un registro
    $instruccion = "DELETE FROM vehiculos WHERE correlativo = '$idVehiculo'";
    mysqli_query($conection, $instruccion);
?>