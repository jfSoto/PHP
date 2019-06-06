<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        $nombre = $_POST["nombre"];
        $idioma = $_POST["idioma"];
        if($idioma == "español")
        {
            echo "¡Hola, $nombre!";
        }
        else if($idioma == "frances")
        {
            echo "Bonjour, $nombre!";
        }
        else
        {
            echo "Hi, $nombre!";
        }
    ?>
    </body>
</html>