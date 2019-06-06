<?php
    $clave = $_POST['clave'];

    switch($clave) 
    {
        case "GrupoStudium":
        header("Location: grupostudium.html");
        break;

        case "php":
        header("Location: php.html");
        break;
        
        default:
        echo "Clave incorrecta.";
    }
?>
