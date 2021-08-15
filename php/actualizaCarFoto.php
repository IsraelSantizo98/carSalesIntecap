<?php
    include 'conection.php';
    $idVehiculos = $_POST['codigoCliente'];
    foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){
        //Se verifica el nombre del archivo, el nombre y variable temporal
        if($_FILES["archivo"]["name"][$key]) {
            $filename = $_FILES["archivo"]["name"][$key];
            $source = $_FILES["archivo"]["tmp_name"][$key];
            $directorio = 'imageCarro';
            //$directorio = 'img/NoPlaca'; se pueden crear carpetas separadas por el numero de placa
            if(!file_exists($directorio)){//verifica si existe la carpeta
                //el numero 0777 permite la creacion de carpetas
                mkdir($directorio, 0777) or die("No se puede crear la carpeta");
        }
    $dir=opendir($directorio);//Abrir carpeta
    $target_path = $directorio.'/'.$filename;//Ubicacion futura
    if(move_uploaded_file($source, $target_path)) {
        //echo "La foto se ha guardado correctamente";
        $instruccion = "UPDATE fotos_autos SET ubicacion = '$target_path'
        WHERE id_vehiculos = '$idVehiculos'";
        mysqli_query($conection, $instruccion);
        header('location: modales/afirmativo.php');
    } else {
        header('location: modales/error.php');
    }
    closedir($dir);
        }
    }
?>