<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $clave = $_POST["clave"];
            if($clave == "GrupoStudium")
            {
                header("Location: http://www.grupostudium.com");
            }
            else if($clave == "php")
            {
                header("Location: php.html");
            }
        ?>
    </body>
</html>