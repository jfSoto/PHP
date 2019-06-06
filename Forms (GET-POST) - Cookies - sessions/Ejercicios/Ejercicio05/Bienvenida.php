<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
            if((substr($contraseña, 0, 1) == "0" || substr($contraseña, 0, 1) == "1" || substr($contraseña, 0, 1) == "2" || substr($contraseña, 0, 1) == "3" || substr($contraseña, 0, 1) == "4"
            || substr($contraseña, 0, 1) == "5" || substr($contraseña, 0, 1) == "6" || substr($contraseña, 0, 1) == "7" || substr($contraseña, 0, 1) == "8" || substr($contraseña, 0, 1) == "9")
            && empty($usuario) == false)
            {
                echo "Todo correcto";
            }
            else
            {
                echo "Se ha producido un error";
            }
    ?>
    </body>
</html>