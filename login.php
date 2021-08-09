<?php
    //evalua si existe un metodo postal
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $userName = $_POST['userName'];
        $pass = $_POST['pass'];//la ultima parte de toma del name del input
        include 'php/conection.php';
        $instruccion = "SELECT * FROM usuario WHERE userName = '$userName' AND passwordN = '$pass'";
        $query =mysqli_query($conection, $instruccion);
        //Se carga a $r el resulado 
        $r = mysqli_fetch_array($query, MYSQLI_ASSOC);
        //Se crea un contador de cuantos registros hay en $query y debe ser uno en el caso de usuario
        $contador = mysqli_num_rows($query);
        //Sei la variabale contador es 1 entonces se inicia una session
        if($contador == 1){
            //Crea un espacio en el servidor para que se puede acceder desde la computadora que se inicia seccion
            session_start();
            //variables de tipo session se puede acceder en cualquier ficheros, se coloca un name y luego el name que esta en la variable $r
            $_SESSION['name'] = $r['nameN'];
            //Se obtiene el resultado del metodo post
            $_SESSION['userName'] = $userName;
            //$_SESSION['imageP'] = $imageP;
            $_SESSION['imageP'] = $r['imageProfile'];
            //$_SESSION['usuario'] = $r['usuario'];
            //con esta instruccion se envia a otro archivo
            header('location: main.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body class="bodylogin">
    <div class="container-login">
        <form method="POST" class="form-login">
            <fieldset>
                <legend>Inicio de Sesion</legend>
                <label for="userName">Ingrese nombre de usuario</label>
                <input type="text" id="userName" name="userName" placeholder="Nombre de usuario">
                <label for="pass">Ingrese su contraseña</label>
                <input type="password" name="pass" id="pass" placeholder="Contraseña">
                <input type="hidden" name="entrar" value="entrar">
                <input class="btn btn-submit" type="submit" value="Inciar Sesion">
                <p>No tienes una cuenta crea una <a href="newUser.php" class="btn-new-user">aqui</a></p>
            </fieldset>
        </form>
    </div>
</body>
</html>