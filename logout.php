<?php
    session_start();
    if (session_destroy()) {//verifica si hay una sesion para destruirla o cerrarla
        header('location: login.php');
    }
?>