<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    setcookie('nombre', $nombre, time()+3600);
    setcookie('apellido', $apellido, time()+3600);

    if(isset($_COOKIE['nombre']))
    {
        echo "Bienvenido, " . $_COOKIE['nombre'] . " " .
        $_COOKIE['apellido'];
    }
?>
