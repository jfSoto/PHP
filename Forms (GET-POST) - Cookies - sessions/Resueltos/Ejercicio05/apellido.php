<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $nombre = $_GET['nombre'];
        ?>
        <form action="resultado.php" method="get">
            Apellido: <input name="apellido" type="text">
            <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
            <input type="submit" value="Enviar">
            </select>
        </form>
    </body>
</html>
