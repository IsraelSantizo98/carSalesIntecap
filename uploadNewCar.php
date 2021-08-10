<?php 
include 'php/conection.php';
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
//$archivo = $_POST['archivo'];
//[archivo] viene desde registrarImagen del primer input, luego tmp_name permite subirlo al servidor
//Luego el as lo asigna a una variable temporal
$instruccion = "INSERT INTO vehiculos (correlativo, marca, linea, tipo, transmision, modelo, km, traccion, combustible, color, precio, cantidad_puertas) VALUES (NULL, '$marca', '$linea', '$tipo', '$transmicion', '$modelo', '$km', '$traccion', '$combustible', '$color', '$precio', '$puerta')";
mysqli_query($conection, $instruccion);
$recienteId = mysqli_insert_id($conection);
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
    echo "La foto se ha guardado correctamente";
    $instruccion = "INSERT INTO fotos_autos (correlativo, id_vehiculo, ubicacion) VALUES (NULL, '$recienteId', '$target_path')";
    mysqli_query($conection, $instruccion);
    header('location: modales/afirmativo.php');
} else {
    header('location: modales/error.php');
}
closedir($dir);
    }
}
?>