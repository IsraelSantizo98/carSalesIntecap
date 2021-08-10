<?php
    include 'conection.php';
    //Se captura el valor del id en una variable
    $idVehiculo = $_GET['codCLiente'];
    //Instruccion para eliminar un registro
    $instruccion = "DELETE FROM vehiculos WHERE correlativo = '$idVehiculo'";
    $query = mysqli_query($conection, $instruccion);
    if($query){
        header('location:../modales/afirmativo.php');
    }else{
        header('location:../modales/error.php');
    }
?>