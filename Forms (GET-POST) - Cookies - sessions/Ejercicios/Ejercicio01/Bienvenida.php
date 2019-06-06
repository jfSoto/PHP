<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <?php
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        echo $nombre . "<br/>" . $apellidos;
    ?>
    </body>
</html>