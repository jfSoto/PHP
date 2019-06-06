<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nombre = $_POST["nombre"];
        ?>
        <form action="Bienvenida.php" method="POST">
            <input name="nombre" type="hidden" value="<?php echo $nombre; ?>"/><br/>
            <label for="apellido">Introduce tu apellido:</label>
            <input id="apellido" name="apellido" type="text" /><br/>
            <input type="submit" />
        </form>
    </body>
</html>