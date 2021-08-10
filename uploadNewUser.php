<?php 
include 'php/conection.php';
$nameNew = $_POST['nameNew'];
$nameNewUser = $_POST['nameNewUser'];
$email = $_POST['email'];
$password = $_POST['password'];
//$archivo = $_POST['archivo'];
//[archivo] viene desde registrarImagen del primer input, luego tmp_name permite subirlo al servidor
//Luego el as lo asigna a una variable temporal
foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){
    //Se verifica el nombre del archivo, el nombre y variable temporal
    if($_FILES["archivo"]["name"][$key]) {
        $filename = $_FILES["archivo"]["name"][$key];
        $source = $_FILES["archivo"]["tmp_name"][$key];
        $directorio = 'imageProfile';
        //$directorio = 'img/NoPlaca'; se pueden crear carpetas separadas por el numero de placa
        if(!file_exists($directorio)){//verifica si existe la carpeta
            //el numero 0777 permite la creacion de carpetas
            mkdir($directorio, 0777) or die("No se puede crear la carpeta");
    }
$dir=opendir($directorio);//Abrir carpeta
$target_path = $directorio.'/'.$filename;//Ubicacion futura
if(move_uploaded_file($source, $target_path)) {
    echo "La foto se ha guardado correctamente";
    $instruccion="INSERT INTO usuario (idUsuario, nameN, userName, passwordN, emailN, imageProfile) VALUES (NULL,'$nameNew', '$nameNewUser', '$password', '$email', '$filename')";
    mysqli_query($conection, $instruccion);
    header('location: modales/afirmativo.php');
} else {
    header('location: modales/error.php');
}
closedir($dir);
    }
}
?>