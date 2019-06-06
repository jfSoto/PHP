<?php
    $nombre = $_GET['nombre'];
    $idioma = $_GET['idioma'];

    switch($idioma) 
    {
        case "es":
        echo "Bienvenido, $nombre.";
        break;

        case "en":
        echo "Welcome, $nombre.";
        break;

        case "fr":
        echo "Bienvenue, $nombre.";
    }
?>
