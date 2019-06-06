<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
            <?php
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                echo $nombre . " " . $apellido;
            ?>
    </body>
</html>